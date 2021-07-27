<?php

class CreateDataStructure{
    function __construct(){
    }

    function createArray($gzFile){
        $lines = gzfile($gzFile);
        foreach($lines as $line){
            $line = strstr(strstr($line,"debian-installer/"),"/");
            $array[] = $line;
        }
        return $array;
    }
}