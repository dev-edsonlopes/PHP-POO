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
