<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class OpenAiExampleOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'temp:open';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example of OpenAI emmbeded in Laravel';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // The data that we want to train the model on
        // This is what we would insert into the database to be able to
        // run the question on without having to pay for the tokens
        $prompts = $this->getPrompts();

        // Send the prompts to the OpenAI API to get the embeddings
        $inputs = $this->getInputs($prompts);

        // Ask the user a question
        $userQuestion = $this->ask('What is your question?');

        // Get the embedding for the question
        $question = $this->embeddings([
            'model' => 'text-embedding-ada-002',
            'input' => [
                $userQuestion,
            ]
        ]);

        // Take the question and compare it to the prompts
        $answer = $this->getAnswer($prompts, $inputs, $question);
        // Output the answer
        $this->info('the ada match: ' . $prompts[$answer['index']]);
        // Get a prompt to send to the davanci model
        $davanci = "Rewrite the question and give the answer with an example in PHP from the context
        Contect: {$prompts[$answer['index']]}
        Question: {$userQuestion}
        Answer:";
        // Send the prompt to the davanci model
        $result = $this->completions([
            'model' => 'text-davinci-003',
            'prompt' => $davanci,
            'temperature' => 0.9,
            'max_tokens' => 200,
        ]);

        dd($result);

        // Output the result
        $this->info("Make it humanish: {$result['choices'][0]['text']}");
    }

    public function embeddings($prams)
    {
        return Http::withToken("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")
            ->withOptions(['verify' => false])
            ->post('https://api.openai.com/v1/embeddings', $prams)
            ->object();
    }


    public function completions($prams)
    {
        return Http::withToken("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")
            ->withOptions(['verify' => false])
            ->post("https://api.openai.com/v1/completions", $prams)
            ->json();
    }


    public function getAnswer($prompts, $inputs, $question)
    {
        // loops throuogh all the inputs and compare on a cosine similarity to the question and output the correct answer
        $results = [];
        for ($i = 0; $i < count($inputs->data); $i++) {
            $similarity = $this->cosineSimilarity($inputs->data[$i]->embedding, $question->data[0]->embedding);
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

    public function getPrompts()
    {
        return [
            'echo(): Outputs one or more strings',
            'print(): Outputs a string',
            'strlen(): Returns the length of a string',
            'count(): Counts the number of elements in an array or an object',
            'array(): Creates an array',
            'in_array(): Checks if a value exists in an array',
            'is_array(): Checks if a variable is an array',
            'sort(): Sorts an array',
            'strtolower(): Converts a string to lowercase',
            'strtoupper(): Converts a string to uppercase'
        ];
    }
}
