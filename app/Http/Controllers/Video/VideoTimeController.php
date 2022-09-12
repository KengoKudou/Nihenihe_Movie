<?php

namespace App\Http\Controllers\Video;


use App\Http\Controllers\Controller;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoTimeController extends Controller
{
    public static function time($path)
    {

        $path = str_replace('storage','public',$path);

        $media = FFMpeg::open($path);



        return self::sToM($media->getDurationInSeconds());
    }

    private static function sToM($seconds)
    {
        //秒を分に変換
        $minutes = floor(($seconds / 60) % 60);
        $seconds = $seconds % 60;
        return sprintf("%02d:%02d", $minutes, $seconds);
    }
}

