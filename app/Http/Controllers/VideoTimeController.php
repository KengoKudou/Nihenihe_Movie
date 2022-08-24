<?php

namespace App\Http\Controllers;


use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoTimeController extends Controller
{
    public function time($path)
    {
        //dd($path);
        $path = str_replace('storage','public',$path);
        //$path = 'public/users/Hero/1/movie.mp4'; //ファイルのパス
        //dd($path);
        $media = FFMpeg::open($path);



        return $this->sToM($media->getDurationInSeconds());
    }

    private function sToM($seconds)
    {
        //秒を分に変換
        $minutes = floor(($seconds / 60) % 60);
        $seconds = $seconds % 60;
        return sprintf("%02d:%02d", $minutes, $seconds);
    }
}

