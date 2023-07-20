<?php

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