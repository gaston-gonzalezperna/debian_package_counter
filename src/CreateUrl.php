<?php

class CreateUrl{

    private $URLInit = "http://ftp.uk.debian.org/debian/dists/stable/main/Contents-";
    private $URLextension = ".gz";
    
    function __construct(){}
        
    function create($argument){

        // Se busca el Argumento 1 porque el 0 es el nombre del archivo (package_statistics.php).
        if(is_null($argument[1])){
            throw new Exception('Initial parameter is empty');
        }
        
        // Armado de url por concatenacion.
        $urlCreated = $this->URLInit.$argument[1].$this->URLextension;
        return $urlCreated;
    }
}