<?php

class CreateDataStructure{
    function __construct(){}

    function createArray($gzFile){
        
        // Gzfile permite crear un array con el contenido de un archivo gz.
        $lines = gzfile($gzFile);
        foreach($lines as $line){

            // Se elimina todo lo anterior a debian installer primero. Luego se remueve el debian installer también.
            $line = strstr(strstr($line,"debian-installer/"),"/");
            $array[] = $line;

        }
        return $array;
    }
}