<?php

class Pessoa {
    public function atribuiNome($nome) {
        echo "O nome da pessoa é $nome";
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    // composição
    function __construct($nome) {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Edson");
$exibe->exibeNome();