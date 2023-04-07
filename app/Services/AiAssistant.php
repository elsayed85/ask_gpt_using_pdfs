<?php

namespace App\Services;

use App\Traits\AiHelpers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class AiAssistant
{
    use AiHelpers;

    public $question;
    public $match;
    private $token;
    public $prompts;
    public $inputs_file_name = 'inputs.json';
    public $attachAiAnswer = false;

    public function __construct()
    {
        $this->token = config('services.openai.token');
    }

    public function ask($question)
    {
        $this->question = $question;

        return $this->handle();
    }

    public function setInputsFileName($inputs_file_name)
    {
        $this->inputs_file_name = $inputs_file_name;

        return $this;
    }

    public function attachAiAnswer($attachAiAnswer = false)
    {
        $this->attachAiAnswer = $attachAiAnswer;

        return $this;
    }

    public function setPrompts($prompts)
    {
        $this->prompts = $prompts;

        return $this;
    }

    public function getPrompts()
    {
        return $this->prompts;
    }

    private function handle()
    {
        // The data that we want to train the model on
        // This is what we would insert into the database to be able to
        // run the question on without having to pay for the tokens
        $prompts = $this->getPrompts();

        if (!Storage::disk('local')->exists($this->inputs_file_name)) {
            // Send the prompts to the OpenAI API to get the embeddings
            $embeddings = $this->getInputs($prompts);

            // convert the inputs to an array
            $embeddings = collect($embeddings)->map(function ($item, $key) {
                return (array) $item;
            })->toArray();

            // save to json file
            Storage::disk('local')->put($this->inputs_file_name, json_encode($embeddings));
        } else {
            $embeddings = json_decode(Storage::disk('local')->get($this->inputs_file_name), true);
        }

        // Ask the user a question
        $userQuestion = $this->question;

        // Get the embedding for the question
        $questionEmbeddings = $this->embeddings([
            'model' => 'text-embedding-ada-002',
            'input' => [
                $userQuestion,
            ]
        ]);

        // Take the question and compare it to the prompts
        $answer = $this->getAnswer($prompts, $embeddings, $questionEmbeddings);

        // Output the answer
        $this->match =  $prompts[$answer['index']];

        $response = [
            "question" => $this->question,
            'match' => $this->match,
        ];


        if ($this->attachAiAnswer) {
            // Get a prompt to send to the davanci model
            $davanci = "Rewrite the question and give the answer
            Contect: {$this->match}
            Question: {$userQuestion}
            Answer:";

            // Send the prompt to the davanci model
            $result = $this->completions([
                'model' => 'gpt-3.5-turbo',
                "messages" => [
                    [
                        "role" => "assistant",
                        "content" => $davanci,
                    ]
                ],
            ]);

            // Output the answer
            $response['answer'] = $result['choices'][0]['message']['content'];
        }

        return $response;
    }
}
