# Polimorfismo

Polimorfismo é subistitui ou reescreve o método herdado da super classe.

Exemplo:

```php
 <?php

class Animal {
    public function andar() {
        echo "O animal andou";
    }
}

class Leao extends Animal {
    public function andar() {
        echo "O Leão Andou!";
    }
}

$animal = new Leao();
$animal->andar();
```
> O Leão Andou!
