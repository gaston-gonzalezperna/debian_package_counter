<?php

use PharData;

class DecompressGZ{
    private $gzTest = "C:\Users\Gaston\Desktop\Gaston\Gcoop\debian_package_counter\src\Packages.gz";

    function __construct(){
    }

    function decompress(){
        $p = new PharData($this->gzTest);
        $file = $p->decompress();
    }
}