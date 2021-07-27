<?php

/*

Decidí separarlo en pequeños casos de uso:
- Crear la URL en funcion del parámetro que se pasa en el llamado del archivo. Si no se pasa el parametro, se arroja una excepcion. El CU permite ajustar facilmente la url en el caso de que cambie.
- Descargar el archivo gz. Arroja una excepción si la url no es encontrada.
- Crear la estructura de datos con el contenido de ese .gz removiendo todo lo que no es necesario para el alcance de este ejercicio.
- Contar la cantidad de repeticiones de cada uno de los paquetes y agregarlo a un nuevo array. A la vez en este CU se ordena el contenido de mayor a menor en funcion de las repeticiones.
- Se trunca el array. El CU permite variar por si cambia en un futuro el requisito de 10 a mas valores.

Una posible mejora podría ser implementar un Factory para la creación de esta clase, ya que se pueden definir mucho mejor los límites de, por ejemplo, la cantidad de valores maximos que se quieren.

*/


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

try {
    $package -> start($argv);
} catch (Exception $e) {
    echo 'Exception: ',  $e->getMessage(), "\n";
}