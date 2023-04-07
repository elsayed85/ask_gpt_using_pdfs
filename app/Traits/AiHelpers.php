<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;


trait AiHelpers
{
    public function cosineSimilarity($u, $v)
    {
        $dotProduct = 0;
        $uLength = 0;
        $vLength = 0;
        for ($i = 0; $i < count($u); $i++) {
            $dotProduct += $u[$i] * $v[$i];
            $uLength += $u[$i] * $u[$i];
            $vLength += $v[$i] * $v[$i];
        }
        $uLength = sqrt($uLength);
        $vLength = sqrt($vLength);
        return $dotProduct / ($uLength * $vLength);
    }

    public function getInputs($prompts)
    {
        return $this->embeddings([
            'model' => 'text-embedding-ada-002',
            'input' => $prompts,
        ]);
    }

    public function getAnswer($prompts, $embeddings, $questionEmbeddings)
    {
        // loops throuogh all the inputs and compare on a cosine similarity to the question and output the correct answer
        $results = [];
        for ($i = 0; $i < count($embeddings); $i++) {
            $similarity = $this->cosineSimilarity($embeddings[$i]['embedding'], $questionEmbeddings[0]['embedding']);
            // store the simliarty and index in an array and sort by the similarity
            $results[] = [
                'similarity' => $similarity,
                'index' => $i,
                'input' => $prompts[$i],
            ];
        }
        usort($results, function ($a, $b) {
            return $a['similarity'] <=> $b['similarity'];
        });

        return end($results);
    }

    public function embeddings($prams)
    {
        try {
            return Http::withToken($this->token)
                ->withOptions(['verify' => false])
                ->post('https://api.openai.com/v1/embeddings', $prams)
                ->json()['data'];
        } catch (\Throwable $th) {
            return [];
        }
    }


    public function completions($prams)
    {
        try {
            return Http::withToken($this->token)
                ->withOptions(['verify' => false])
                ->post("https://api.openai.com/v1/chat/completions", $prams)
                ->json();
        } catch (\Throwable $th) {
            return [];
        }
    }
}
