<?php

class Conexion
{

private $host = 'localhost';
private $dbname = 'abm_vehiculos';
private $username = 'root';
private $password = '';
private $db;

public function __construct()
{

    try {
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

}

public function getDb(){
    return $this->db;
}


}

?>