<?php
// You should require_once the conexion on each file that contains a class and their methods
require_once("connection.php");

// Class that contains the Methods

Class Productos {

// The methods below are just examples of SELECT, INSERT and UPDATE
// These methods are samples with PDO structure, If you follow it you dont have to worry about SQL inyection.
static public function getProductos(){

    $sql =  "SELECT * FROM `r_productos`";
    $stmt = Connection::connect()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->close();
    $stmt =  null;
  }

}





?>
