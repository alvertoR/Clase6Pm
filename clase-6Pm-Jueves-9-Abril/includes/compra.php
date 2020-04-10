<?php

include_once 'database.php';

class Compra extends Database{
    private $producto;
    private $cantidad;
    private $valor;

    //Seteamos los valores
    public function setProucto($producto){
        $this->producto = $producto;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    //Hacer los Get

    public function getProducto(){
        return $this->producto;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getValor(){
        return $this->valor;
    }

    //Select
    public function getCompra(){
        return $this->conexion()->query('select*from compra');
    }

    //Delete
    public function deleteCompra($id){
        $query = $this->conexion()->prepare('delete*from compra where id =:id');
        $query->execute([':id' => $id]);
    }

    //Insert
    public function insertCompra(){
        $query = $this->conexion()->prepare('insert into compra values(:producto,:cantidad,:valor)');
        $query->execute([':producto' => $this->producto, ':cantidad' => $this->cantidad, ':valor' => $this->valor]);

    }

    //Update
    public function updateCompra($id){
        $query = $this->conexion()->prepare('update compra set producto =:producto, cantidad =:cantidad, valor =:valor where id =:id');
        $query->execute([':producto' => $this->producto, ':cantidad' => $this->cantidad, ':valor' => $this->valor, ':id' => $id]);
    }


}

?>