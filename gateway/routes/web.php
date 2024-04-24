<?php

use App\Events\PodcastProcessed;
use Illuminate\Support\Facades\Route;
use Prwnr\Streamer\Facades\Streamer;

Route::get('/', function () {

    $event = new PodcastProcessed();
    $id = Streamer::emit($event);

    return view('welcome');
});
