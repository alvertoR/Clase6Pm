<?php

class Carro{
    private $puertas;
    private $llantas;
    private $ventanas;
    private $color;
    private $marca;
    private $placa;

    private $numero1;
    private $numero2;

    public function setNumero1($numero1){
        $this->numero1 = $numero1;
    }

    public function setNumero2($numero2){
        $this->numero2 = $numero2;
    }

    public function setPuertas($puertas){
        $this->puertas = $puertas;
    }

    public function setLlantas($llantas){
        $this->llantas = $llantas;
    }

    public function setVentanas($ventanas){
        $this->ventanas = $ventanas;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getPuertas(){
        return $this->puertas;
    }

    public function getLlantas(){
        return $this->llantas;
    }
    
    public function getVentanas(){
        return $this->ventanas;
    }

    public function getColor(){
        return $this->color;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function sumaSet(){
        $suma = $this->numero1 + $this->numero2;

        return $suma;
    }

    public function suma($numero1,$numero2){
        $suma = $numero1 + $numero2;

        return $suma;
    }

}

?>