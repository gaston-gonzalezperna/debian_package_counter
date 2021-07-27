<?php


class DownloadGZ{
    function __construct(){}

    function download($url){
        file_put_contents("Contents.gz", fopen($url, 'r'));
        $save = getcwd()."\Contents.gz";
        var_dump($save);
        return $save;
    }
}