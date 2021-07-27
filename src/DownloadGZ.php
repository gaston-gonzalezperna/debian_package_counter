<?php


class DownloadGZ{
    function __construct(){}

    function download($url){
        $fileToOpen = fopen($url, 'r');
        if(!$fileToOpen){
            throw new Exception('File open failed.');
        }
        file_put_contents("Contents.gz", $fileToOpen);
        $save = getcwd()."\Contents.gz";
        return $save;
    }
}