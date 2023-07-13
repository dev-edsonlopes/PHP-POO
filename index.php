<?php

class Pessoa {
    const NOME = "Edson";

    public function exibirNome() {
        echo self::NOME;
    }
}

class Edson extends Pessoa {
    const NOME = "Lopes";
    public function exibirNome() {
        echo parent::NOME;
    }
}
// $pessoa = new Pessoa();
// $pessoa->exibirNome();

$edson = new Edson();
$edson->exibirNome();