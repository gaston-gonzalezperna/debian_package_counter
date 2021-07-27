<?php

class CountAndSortValues{
    function __construct(){}
    function count($array){
        $array = array_count_values($array);
        arsort($array);
        return $array;
    }
}