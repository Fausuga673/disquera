<?php

class Conexion {

    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $con;

    public function __construct(){

        try {

            $this->con = new PDO("mysql:host=$this->host;dbname=disquera", $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();

        }

    }

    public function ejecutar($sql) {

        $this->con->exec($sql);
        return $this->con->lastInsertId();

    }

    public function consultar($sql) {

        $sentencia=$this->con->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>