<?php

class DownloadGZ{
    function __construct(){}

    function download($url){
        $fileToOpen = fopen($url, 'r');

        if(!$fileToOpen){
            throw new Exception('File open failed.');
        }

        // Se guarda el archivo gz.
        file_put_contents("Contents.gz", $fileToOpen);

        // Permite saber la ubicacion relativa del archivo y funcionar en cualquier entorno.
        $save = getcwd()."\Contents.gz";
        return $save;
    }
}