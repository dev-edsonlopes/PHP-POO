# Classes e Métodos Abstratos

São classes e métodos onde a classe Pai cria métodos de uma função sem linhas de códigos para as classes filhas herdar e adicionar as tarefas a ela.

para criar uma class abstrata precisamos declarar a palavra reservada `abstract`

exemplo: 

```php
<?php
// Criando a classe abstrata;
abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

// Métodos Abstratos
    abstract protected function sacar();
    abstract protected function depositar();
}

// Classe filhas
class Bradesco extends Banco {
    // Ela herda todas as propriedades da Classe Parent

    // Métodos abstratos é obrigatório declarar na classe Child

    public function sacar() {
        echo "Realizou Saque";
    
    }
    public function depositar() {
        echo "Realizou Deposito";
    }

}

$bradesco = new Banco(); // Erro
$bradesco = new Bradesco();

var_dump($bradesco);

```
> object(Bradesco)#1 (3) { ["saldo":protected]=> NULL ["limiteSaque":protected]=> NULL ["juros":protected]=> NULL }


```php
<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($saldoSet) {
        $this->saldo = $saldoSet;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function sacar($saque);
    abstract protected function depositar($deposito);
}

class Bradesco extends Banco {

    public function sacar($saque) {
        $this->saldo -= $saque;
        echo "<hr />Realizou Saque de $saque";
    }
    public function depositar($deposito) {
        $this->saldo += $deposito;
        echo "<hr />Realizou Deposito de $deposito";
    }

}

//$bradesco = new Banco(); // Erro
$bradesco = new Bradesco();
$bradesco->setSaldo(1000);
echo $bradesco->getSaldo();

// Realizar Saque
$bradesco->sacar(250);
echo "<hr/>";

//Mostrar Saldo:
echo $bradesco->getSaldo();

// Realizar Deposito:
$bradesco->depositar(1000);
//Mostrar Saldo:
echo "<hr/>";
echo $bradesco->getSaldo();
```

> 1000

> Realizou Saque de 250

> 750

> Realizou Deposito de 1000

> 1750