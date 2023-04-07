<?php

namespace App\Services;

use Spatie\PdfToText\Pdf;


class PdfParser
{
    private $file;
    private $binPath = 'C:\pdftotext\pdftotext.exe';
    private $startPage = 1;
    private $endPage = null;
    public $text;
    public $fullTexts = [];

    public $links = [];
    public $headlines = [];

    public $errors = [];

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    public function setBinPath($binPath)
    {
        $this->binPath = $binPath;

        return $this;
    }

    public function setStartPage($startPage)
    {
        $this->startPage = $startPage;

        return $this;
    }

    public function setEndPage($endPage)
    {
        $this->endPage = $endPage;

        return $this;
    }

    public function getOptions()
    {
        $options =  [
            'layout',
            'simple2',
            '-raw',
            'nopgbrk',
            "-enc UTF-8",
        ];

        if ($this->startPage) {
            $options[] = "-f {$this->startPage}";
        }

        if ($this->endPage) {
            $options[] = "-l {$this->endPage}";
        }

        return $options;
    }

    public function getOutput()
    {
        return $this->fullTexts;
    }

    private function getText()
    {
        try {
            $this->text = Pdf::getText($this->file, $this->binPath, $this->getOptions());
        } catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }

        return $this->text;
    }

    public function hasErrors()
    {
        return count($this->errors) > 0;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function process()
    {
        $text = $this->getText();

        if (!$text) {
            return $this;
        }

        // split text into lines
        $lines = explode(PHP_EOL, $text);
        // remove empty lines
        $lines = array_filter($lines, function ($line) {
            return trim($line) !== '';
        });

        // remove whitespace from each line
        $lines = array_map('trim', $lines);

        // remove last number [ page number ]
        $lines = array_slice($lines, 0, -1);

        $result = [];
        foreach ($lines as $line) {
            $line = trim($line);
            // Check if the line is a headline (customize this based on your PDF conventions)
            // For example, in some PDF files, headlines may be all uppercase
            if (preg_match('/^[A-Z\s]+$/i', $line)) {
                $result[] = [
                    'type' => 'headline',
                    'content' => $line,
                ];
            } elseif (preg_match('/^https?:\/\//i', $line)) {
                $result[] = [
                    'type' => 'link',
                    'content' => $line,
                ];
            } else {
                $result[] = [
                    'type' => 'paragraph',
                    'content' => $line,
                ];
            }
        }
        $result2 = $result;
        for ($i = 0; $i < count($result); $i++) {
            if ($result[$i]['type'] === 'headline') {
                $result2[$i]['children'] = [];
                $result2[$i]['links'] = [];
                // add the next paragraph as a child to the headline until the next headline and remove it from the result array
                for ($j = $i + 1; $j < count($result); $j++) {
                    if ($result[$j]['type'] === 'paragraph') {
                        $result2[$i]['children'][] = $result[$j];
                        unset($result2[$j]);
                    } elseif ($result[$j]['type'] === 'link') {
                        $result2[$i]['links'][] = $result[$j];
                        unset($result2[$j]);
                    } else {
                        break;
                    }
                }
            }
        }

        $result2 = array_values($result2);

        $this->headlines = collect($result2)->filter(function ($item) {
            return $item['type'] === 'headline';
        })->toArray();

        $this->links = collect($result2)->filter(function ($item) {
            return $item['type'] === 'link';
        })->toArray();

        $this->paragraphs = collect($result2)->filter(function ($item) {
            return $item['type'] === 'paragraph';
        })->toArray();


        $this->fullTexts = collect($result2)->map(function ($item) {
            $line = collect($item['children'] ?? [])->map(function ($child) {
                return $child['content'];
            })->implode(' ');

            return $item['content'] . ' ' . $line;
        });

        return $this;
    }
}
