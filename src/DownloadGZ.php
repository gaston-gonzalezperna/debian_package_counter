<?php


class DownloadGZ{
    function __construct(){}
    function download(String $url){
        $file = file_get_contents($url);
        return $file;
    }
}