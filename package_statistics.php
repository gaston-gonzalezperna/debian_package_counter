<?php

require_once "src\CreateUrl.php";
require_once "src\DownloadGz.php";
require_once "src\CreateDataStructure.php";
require_once "src\CountAndSortValues.php";
require_once "src\TruncArray.php";

class Package_Statistics {
    private $createUrl;
    private $downloadGz;
    private $createDataStructure;
    private $countAndSortValues;
    private $truncArray;

    function __construct(){

        $this->createUrl = new CreateUrl();
        $this->downloadGz = new DownloadGz();
        $this->createDataStructure = new CreateDataStructure();
        $this->countAndSortValues = new CountAndSortValues();
        $this->truncArray = new TruncArray();
   
    }

    function start($argument){

        $url = $this->createUrl->create($argument);
       // var_dump($url);
        $gzFile = $this->downloadGz->download($url);
        //var_dump($gzFile);
        $array = $this->createDataStructure->createArray($gzFile);
        //var_dump($array);
        $countedArray = $this->countAndSortValues->count($array);
        //var_dump($countedArray);
        $returnArray = $this->truncArray->trunc($countedArray);
        var_dump($returnArray);
        
    }
}

$package = new Package_Statistics();
$package -> start($argv);