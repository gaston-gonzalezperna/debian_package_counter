<?php

use src\CreateUrl;
use src\DownloadGz;
use src\DecompressGZ;
use src\CreateDataStructure;
use src\CountValues;
use src\OrderArray;
use src\TruncArray;

class Package_Statistics {
    function __construct(){

        $createUrl = new CreateUrl();
        $downloadGz = new DownloadGz();
        $decompressGZ = new DecompressGZ();
        $createDataStructure = new CreateDataStructure();
        $countValues = new CountValues();
        $orderArray = new OrderArray();
        $truncArray = new TruncArray();
   
    }

    function start(array $argument){

        $url = $this-> createUrl -> create($argument);
        $gzFile = $this-> downloadGz-> download($url);
        $file = $this-> decompressGZ-> decompress($gzFile);
        $array = $this-> createDataStructure-> createArray($file);
        $countedArray = $this-> countValues-> count($array);
        $countedArray = $this-> orderArray-> sort($countedArray);
        $returnArray = $this-> truncArray-> trunc($countedArray);
        return print_r($returnArray);

    }
}

$package = new Package_Statistics();
$package -> start($argv);