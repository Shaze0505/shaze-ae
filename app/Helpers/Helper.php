<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class Helper
{
    public static function version($path, $type = "css"): string
    {
        $path = "/" . $path;
        try {
            $version = "?v=" . File::lastModified(public_path() . $path);
        }
        catch (\Exception $e){
            $version = "";
        }
        if ($type == "css"){
            return "<link href='{$path}{$version}' rel='stylesheet' type='text/css'/>";
        }
        return "<script src='{$path}{$version}'></script>";
    }

    public static function getLongestWord($sentence): ?string
    {
        $longestWord = null;
        $longestSize = 0;
        foreach (explode(" ", $sentence) as $word){
            if (strlen($word) > $longestSize){
                $longestWord = $word;
                $longestSize = strlen($word);
            }
        }
        return $longestWord;
    }
}
