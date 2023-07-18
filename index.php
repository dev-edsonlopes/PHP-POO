<?php

class Pessoa {
    public $nome;
}

$pessoa = new Pessoa();
$pessoa->nome = "Edson";

$pessoa2 = $pessoa;
$pessoa2->nome = "Jennifer";

echo $pessoa->nome;