<?php

class TruncArray{
    private $dataLength = 10;
    private $offset = 0;
    function __construct(){}
    function trunc($countedArray){
        $countedArray = array_slice($countedArray, $this->offset, $this->dataLength);
        return $countedArray;
    }
}