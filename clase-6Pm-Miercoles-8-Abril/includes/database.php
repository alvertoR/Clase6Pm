<?php

/*
Necesitamos 
usuario = root
contraseña = ''
localhost = localhost
nombre de la base datos = El nombre que tiene la base
charset - Cotejamiento - idioma = utf8mb4
para poder conectarnos a una base de datos de mysql
*/

class Database{

    private $user;
    private $pass;
    private $localhost;
    private $dbName;
    private $charset;

    //Settear las variables

    public function __construct(){
        $this->user      = 'root';
        $this->pass      = '';
        $this->localhost = 'localhost';
        $this->dbName    = 'vehiculo';
        $this->charset   = 'utf8mb4';
    }

    //realizar función para conectarnos a la base de datos

    public function conexion(){
        try{

            $conexion = "mysql:host=" . $this->localhost .";dbname=" . $this->dbName . ";charset=" .$this->charset;

            $options = [
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false 
            ];

            $pdo = new PDO($conexion,$this->user,$this->pass,$options);

            return $pdo;

        }catch(PDOException $e){
            print_r('Error en la conexion... '. $e->getMessage());
        }
    }

}


?>