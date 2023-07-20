# Relação entre os Objetos

## Relação de Associação

Acontece quando um objeto aponta para o outro objeto sem que eles dependam um do outro é como tivessse duas classes distintas, e fizesse uso de uma delas dentro da outra, ou como parâmetro de outra.

exemplo: 

```php
class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

// Aplicando a associação

$cliente = new Cliente();
$cliente->nome = "Edson Lopes";
$cliente->endereco = "Av. Dr. Gonzaga Maranhão";

$pedido = new Pedido();
$pedido->numero = "45632";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);
```

```csharp
array(3) { 
    ["numero"]=> string(5) "45632" 
    ["nome_cliente"]=> string(11) "Edson Lopes" 
    ["endereco_cliente"]=> string(25) "Av. Dr. Gonzaga Maranhão" 
}
```

## Relação de Agregação

Acontece quando um objeto precisa de outro objeto para completar a sua ação (Todo/Parte), ou seja, faz a agregação de um objeto externo e o utiliza como parte de si própria.

exemplo:

```php
<?php

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    // Agregação
    public function adicionar(Produtos $produto) {
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach($this->produtos as $produto) {
            echo "$produto->nome | $produto->valor <hr />";
        }
    }
}

$produto1 = new Produtos("Notebook", "3179");
$produto2 = new Produtos("Crosser Z 150", "23559");

$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

$carrinho->exibe();

```

```csharp
Notebook | 3179
Crosser Z 150 | 23559
```

## Relação de Composição

na composição, a classe principal (todo) cria uma instância da outra classe, que se torna parte dela. Quando a classe principal for destruída, sua instância da outra classe também será.

Exemplo: 

```php
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
```

```csharp
O nome da pessoa é Edson
```

A diferença entre Agregação e Composição é que a instancia é feito dentro da classe e na agregação é fora da classe.