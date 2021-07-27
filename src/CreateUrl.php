<?php

class CreateUrl{

    private $URLInit = "http://ftp.uk.debian.org/debian/dists/stable/main/Contents-";
    private $URLextension = ".gz";
    
    function __construct(){}
        
    function create($argument){
        if(is_null($argument[1])){
            throw new Exception('Initial parameter is empty');
        }
        $urlCreated = $this->URLInit.$argument[1].$this->URLextension;
        return $urlCreated;
    }
}