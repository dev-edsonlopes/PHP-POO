# Modificadores de Acessos

- **Public** => Toda propriedade ou método pode ser acessado de qualquer lugar.

```php
<?php

class Veiculo {
    public $modelo;
}

$carro = new Veiculo();

$carro->modelo = "Onix";

var_dump($carro);
```

> object(Veiculo)#1 (1) { ["modelo"]=> string(4) "Onix" }

- **Protect** => Toda propriedade ou método pode ser acessado dentro da classe e por herdeiros dessa classe.

- Acesso dentro da classe:
```php
<?php

class Veiculo {
    protected $modelo;

// Metodo getters e setters para poder acessar o atributo
    public function setVeiculo($modelo) {
        $this->modelo = $modelo;
    }

    public function getVeiculo() {
        return $this->modelo;
    }
}

$carro = new Veiculo();

$carro->setVeiculo("Onix");

var_dump($carro);
```
> object(Veiculo)#1 (1) { ["modelo":protected]=> string(4) "Onix" }

- Acesso dentro da classe herdeira:

```php
<?php

class Veiculo {
    protected $modelo;
}

// Acessando o atributo usando Getters e Setters pela classe filha.
class Carro extends Veiculo {

    public function setCarro($modelo) {
        $this->modelo = $modelo;
    }

    public function getCarro() {
        return $this->modelo;
    } 

}

$carro = new Carro();

$carro->setCarro("Onix");

var_dump($carro);

```

> object(Carro)#1 (1) { ["modelo":protected]=> string(4) "Onix" }



- **Private** => Toda propriedade ou método só pode ser acessado dentro da classe.

