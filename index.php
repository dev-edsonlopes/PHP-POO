<?php

class Veiculo {
    private $modelo;

    public function setVeiculo($modelo) {
        $this->modelo = $modelo;
    }

    public function getVeiculo() {
        return $this->modelo;
    } 
}


$carro = new Veiculo();

$carro->setVeiculo("Onix");

var_dump($carro);
