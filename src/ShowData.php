<?php


class ShowData{
    function __construct(){}

    function show($returnArray){
        $maxLength = count($returnArray);
        $keys   = array_keys( $returnArray );
        $values = array_values( $returnArray );

        for($i=0;$i<$maxLength;$i++){
            echo "{$i}. ".preg_replace("/\r|\n/", "",$keys[$i])." {$values[$i]}"."\n";
        }
        
    }
}