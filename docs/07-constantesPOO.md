# Constantes, Self e Parent

Para acessar as variáveis const do atributo da classe pai, usamos a palavra chave `self::` em vez do `$this->`

## SELF

O `self::`  ele serve para acessar o atributo da propria classe.

Exemplo:
```php
<?php

class Pessoa {
    const NOME = "Edson";

    public function exibirNome() {
        echo self::NOME;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
```

> Edson

## Parent

O `parent::` ele é declarado na classe filha para Obter o valor do atributo da classe pai.

Exemplo:
```php
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
        // Usando self ele pegarinha a valor do atributo dentro da propria classe.
    }
}

$edson = new Edson();
$edson->exibirNome();
```

> Edson
