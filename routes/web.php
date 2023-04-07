<?php

use App\Services\Ai;
use App\Services\Assistant;
use App\Services\PdfParser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Pdf2text\Pdf2text;
use Spatie\PdfToText\Pdf;

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

Route::get('/', function () {
    $start = 12;
    $end = 14;

    // track time
    $start_time = microtime(true);
    $times[0]['start'] = $start_time;
    $assistant = (new Assistant())
        ->file(storage_path('app/queue.pdf'))
        ->limit($start, $end)
        ->process();

        
    $times[0]['end'] = microtime(true);
    $times[0]['seconds'] = $times[0]['end'] - $times[0]['start'];

    $times[1]['start'] = microtime(true);
    $question1 = 'Why Use a Message Queue';
    $answer1 = $assistant->ask($question1);
    $times[1]['end'] = microtime(true);
    $times[1]['seconds'] = $times[1]['end'] - $times[1]['start'];

    $times[2]['start'] = microtime(true);
    $question2 = 'Why Use a Message Queue';
    $answer2 = $assistant->ask($question2);
    $times[2]['end'] = microtime(true);
    $times[2]['seconds'] = $times[2]['end'] - $times[2]['start'];


    dd($times, $answer1, $answer2);
});
