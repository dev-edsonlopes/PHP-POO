<?php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar() {
        echo "$this->nome tem $this->idade anos<br /> Ação: acabou de falar";
    }

}

$edson = new Pessoa();

$edson->nome = "Edson Lopes da Silva Junior";
$edson->idade = 23;
$edson->Falar();
