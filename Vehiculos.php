<?php
require_once "Conexion.php";

class Vehiculo extends Conexion
{
    
public function getVehiculos()
{
   $db = new Conexion();
   $conn = $db->getDb();
   $stmt =$conn->prepare("SELECT * FROM vehiculos");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
} 

public function getMarcas()
{
   $db = new Conexion();
   $conn = $db->getDb();
   $stmt =$conn->prepare("SELECT DISTINCT(marca) FROM vehiculos");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
} 

public function getModelos($marca)
{
   $db = new Conexion();
   $conn = $db->getDb();
   $stmt =$conn->prepare("SELECT DISTINCT(modelo) FROM vehiculos WHERE marca = '$marca' ORDER BY modelo ASC");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
} 



}

?>