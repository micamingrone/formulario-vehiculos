<?php
require_once 'Vehiculos.php';

if(isset($_POST['marca'])){
    var_dump($_POST['marca']);
    $vehiculo = new Vehiculo;
    $cachucha = $vehiculo->getModelos($_POST['marca']);

    echo json_encode($cachucha);
}


?>