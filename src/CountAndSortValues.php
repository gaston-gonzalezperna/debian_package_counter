<?php

class CountAndSortValues{
    function __construct(){}

    function count($array){

        // La funcion permite contar los valores repetidos y removerlos.
        $array = array_count_values($array);

        // Se ordena el array en orden descendente.
        arsort($array);
        return $array;
    }
}