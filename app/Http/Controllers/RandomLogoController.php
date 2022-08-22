<?php

namespace App\Http\Controllers;

class RandomLogoController extends Controller
{
    public function RandomLogo()
    {
        $randomList = ["storage/logo/nihenihe.gif",
            "storage/logo/nihenihedouga_01.png",
            "storage/logo/nihenihedouga_02.png",
            "storage/logo/nihenihedouga_logo_01.png"];

        return $randomList[array_rand($randomList)];
    }
}
