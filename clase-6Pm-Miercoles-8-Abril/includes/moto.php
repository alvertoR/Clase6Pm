<?php

include_once 'database.php';

class Moto extends Database{

    private $placa;
    private $color;
    private $marca;
    private $cilindro;

    //Crear los Set y Get

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setCilindro($cilindro){
        $this->cilindro = $cilindro;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getColor(){
        return $this->color;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getCilindro(){
        return $this->cilindro;
    }

    //Función para agregar valores

    public function addMoto(){
        $query = $this->conexion()->prepare('insert into moto values(:placa,:color,:marca,:cilindro)');
        $query->execute([':placa' => $this->placa, ':color' => $this->color, ':marca' => $this->marca, ':cilindro' => $this->cilindro]);        
    }


}

?>