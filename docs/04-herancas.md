# Herança POO

é um recurso que permite que classes compartilhem atributos e metódos, afim de reaproveitar códigos ou comportámentos gereneralizados.

Para herdar os atributos e métodos da classe pai, usamos uma palavra reservada do PHP `extends`.

Exemplo:

```php
<?php

// Classe Pai
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

// Exetendo os atributos da Classe Veiculo
class Carro extends Veiculo {

}

class Moto extends Veiculo {

}

// instancia.
$carro = new Carro();
$moto = new Moto();

// Atribuindo as propriedades da classe Veiculo
$carro->modelo = "Onix";
$carro->cor = "Azul";
$carro->ano = "2021";

$moto->modelo = "Crosser Z";
$moto->cor = "Bege";
$moto->ano = "2023";

// Sáida dos valores
var_dump($carro);

echo "$carro->modelo: ";
$carro->andar();
echo "<br />";

echo "$moto->modelo: ";
$moto->parar();
```
> object(Carro)#1 (3) { ["modelo"]=> string(4) "Onix" ["cor"]=> string(4) "Azul" ["ano"]=> string(4) "2021" } 

> oobject(Moto)#2 (3) { ["modelo"]=> string(9) "Crosser Z" ["cor"]=> string(4) "Bege" ["ano"]=> string(4) "2023" }

> Crosser Z: Parou
