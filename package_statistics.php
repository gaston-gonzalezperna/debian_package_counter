<?php

require_once "src\CreateUrl.php";
require_once "src\DownloadGz.php";
require_once "src\CreateDataStructure.php";
require_once "src\CountAndSortValues.php";
require_once "src\TruncArray.php";
require_once "src\ShowData.php";


class Package_Statistics {
    private $createUrl;
    private $downloadGz;
    private $createDataStructure;
    private $countAndSortValues;
    private $truncArray;
    private $showData;

    function __construct(){

        $this->createUrl = new CreateUrl();
        $this->downloadGz = new DownloadGz();
        $this->createDataStructure = new CreateDataStructure();
        $this->countAndSortValues = new CountAndSortValues();
        $this->truncArray = new TruncArray();
        $this->showData = new ShowData();
    }

    function start($argument){

        $url = $this->createUrl->create($argument);
        $gzFile = $this->downloadGz->download($url);
        $array = $this->createDataStructure->createArray($gzFile);
        $countedArray = $this->countAndSortValues->count($array);
        $returnArray = $this->truncArray->trunc($countedArray);
        $this->showData->show($returnArray);
    }
}

$package = new Package_Statistics();
$package -> start($argv);