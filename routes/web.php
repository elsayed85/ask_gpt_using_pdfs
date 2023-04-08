<?php

use App\Services\Ai;
use App\Services\Assistant;
use App\Services\Md2Json;
use App\Services\PdfParser;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Invis1ble\MediaIntelligence\VideoToFacts\Application;
use Pdf2text\Pdf2text;
use Spatie\PdfToText\Pdf;
use Symfony\Component\Process\Process;
use YoutubeDl\Options;
use YoutubeDl\YoutubeDl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("video", function () {
    $video_id = "Aq2tGqq-sJU";
    $audioTargetDirectoryPath = storage_path('app/audio');
    $file = "{$audioTargetDirectoryPath}/{$video_id}.mp3";

    if (!file_exists($file)) {
        $yt = new YoutubeDl();
        $yt->setBinPath("C:\yt-dlp\yt-dlp.exe");
        $collection = $yt->download(
            Options::create()
                ->downloadPath($audioTargetDirectoryPath)
                ->ffmpegLocation('C:\ffmpeg\bin\ffmpeg.exe')
                ->extractAudio(true)
                ->audioFormat('mp3')
                ->audioQuality(2)
                ->output('%(id)s.%(ext)s')
                ->url('https://www.youtube.com/watch?v=' . $video_id)
        );

        $file = $collection->getVideos()[0]->getFile()->getPathname();
    }

    $response = Http::withToken(config('services.openai.token'))
        ->timeout(999999999999999)
        ->asMultipart()
        ->withOptions(['verify' => false])
        ->post("https://api.openai.com/v1/audio/transcriptions", [
            'model' => 'whisper-1',
            'file' => fopen($file, 'r'),
            'response_format' => 'verbose_json',
        ])
        ->json();

    $inputs = collect($response['segments'])->pluck('text')->toArray();

    dd($inputs);
});

Route::get('/', function () {
    // steps :
    // 1- get pdf file
    // 2- convert pdf to text
    // 3- convert text to json
    // 4- generate embedings for each paragraph
    // 5- generate embedings for question
    // 6- compare embedings
    // 8- get the answer from the most similar paragraph
    // 9- return the answer with chatgpt completions to make it more natural and human like :)
    $assistant = (new Assistant())->pdf(storage_path('app/intro.pdf'))->ai(1)->process();
    $reply = $assistant->ask("ما الفرق بين ال Rna وال Dna ؟");
    dd($reply);
});
