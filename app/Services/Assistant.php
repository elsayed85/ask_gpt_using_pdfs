<?php

namespace App\Services;

use App\Services\AiAssistant;
use App\Services\PdfParser;
use Illuminate\Support\Facades\Storage;


class Assistant
{
    private $file;
    public $start = 1;
    public $end = null;
    public $file_name;
    public $inputs = [];
    public $attachAiAnswer = false;
    public AiAssistant $ai;

    public function ai($attachAiAnswer = true)
    {
        $this->attachAiAnswer = $attachAiAnswer;

        return $this;
    }

    public function pdf($file)
    {
        $this->file = $file;
        $this->file_name = pathinfo($file, PATHINFO_FILENAME);
        return $this;
    }

    public function limit($start = 1, $end = null)
    {
        $this->start = $start;
        $this->end = $end;
        return $this;
    }

    public function process()
    {
        $pdf_content = storage_path("app/{$this->file_name}_content.json");

        if (file_exists($pdf_content)) {
            $inputs = json_decode(file_get_contents($pdf_content), true);
            $this->ai = (new AiAssistant())
                ->setInputsFileName("{$this->file_name}.json")
                ->setPrompts($inputs)
                ->attachAiAnswer($this->attachAiAnswer);

            return $this;
        }

        $pdf = (new PdfParser())
            ->setFile($this->file)
            ->setStartPage($this->start)
            ->setEndPage($this->end)
            ->process();

        if (!$pdf->hasErrors()) {
            $inputs = $pdf->getOutput();

            Storage::put("{$this->file_name}_content.json", json_encode($inputs)); // save to storage for later use

            $this->inputs = $inputs;

            $this->ai = (new AiAssistant())
                ->setInputsFileName("{$this->file_name}.json")
                ->setPrompts($this->inputs)
                ->attachAiAnswer($this->attachAiAnswer);

            return $this;
        }

        throw new \Exception("Error Processing Request", 1);
    }

    public function ask($question)
    {
        return $this->ai->ask($question);
    }
}
