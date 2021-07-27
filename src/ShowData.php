<?php

/*


*/


class ShowData{
    function __construct(){}

    function show($returnArray){

        //Utilizo maxLength a pesar de que se que es de 10 porque permite variar y ser reutilizado en otro codigo.
        $maxLength = count($returnArray);
        $keys   = array_keys( $returnArray );
        $values = array_values( $returnArray );

        for($i=0;$i<$maxLength;$i++){

            //La dificultad que encontré en este CU fue lo de reemplazar las tabulaciones y CR que se agregaron en los Keys, por lo que no quedaba todo en la misma linea.
            echo "{$i}. ".preg_replace("/\r|\n/", "",$keys[$i])." {$values[$i]}"."\n";
        }
        
    }
}