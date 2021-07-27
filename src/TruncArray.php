<?php

class TruncArray{

    private $dataLength = 10;
    private $offset = 0;

    function __construct(){}

    function trunc($countedArray){

        // Se recorta el array. Se puede modificar con variables en que valor para ser reutilizado en otra aplicacion.
        $countedArray = array_slice($countedArray, $this->offset, $this->dataLength);
        return $countedArray;
    }
}