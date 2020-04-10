<?php


class Database{
    private $host;
    private $user;
    private $pass;
    private $charset;
    private $dbName;

    //Setamos los valores
    public function __construct(){
        $this->host    = 'localhost';
        $this->user    = 'root';
        $this->pass    = '';
        $this->charset = 'utf8mb4';
        $this->dbName  = 'tienda';
    }

    //Creamos la función para conectatnos a la base de datos

    public function conexion(){
        try{

            $conexion = "mysql:host=". $this->host .";dbname=". $this->dbName . ";charset=" .$this->charset;

            $options = [ 
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
                ];
            
            $pdo = new PDO($conexion,$this->user,$this->pass,$options);

            return $pdo;

        }catch(PDOException $e){
            print_r('Error en la conexión... ' . $e->getMessage());
        }
    }




}


?>