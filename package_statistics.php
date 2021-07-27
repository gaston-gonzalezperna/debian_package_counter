<?php

require_once "src\CreateUrl.php";
require_once "src\DownloadGz.php";
require_once "src\DecompressGZ.php";
require_once "src\CreateDataStructure.php";
require_once "src\CountValues.php";
require_once "src\OrderArray.php";
require_once "src\TruncArray.php";

class Package_Statistics {
    private $createUrl;
    private $downloadGz;
    private $decompressGZ;
    private $createDataStructure;
    private $countValues;
    private $orderArray;
    private $truncArray;

    function __construct(){

        $this->createUrl = new CreateUrl();
        $this->downloadGz = new DownloadGz();
        $this->decompressGZ = new DecompressGZ();
        $this->createDataStructure = new CreateDataStructure();
        $this->countValues = new CountValues();
        $this->orderArray = new OrderArray();
        $this->truncArray = new TruncArray();
   
    }

    function start($argument){

        $url = $this->createUrl->create($argument);
        $gzFile = $this->downloadGz->download($url);
        $file = $this->decompressGZ->decompress($gzFile);
        // $array = $this-> createDataStructure->createArray($file);
        // $countedArray = $this->countValues->count($array);
        // $countedArray = $this-> orderArray->sort($countedArray);
        // $returnArray = $this->truncArray->trunc($countedArray);
        // echo $returnArray;

    }
}

$package = new Package_Statistics();
$package -> start($argv);