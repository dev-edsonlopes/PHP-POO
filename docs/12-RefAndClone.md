# Referência e Clonagem de Objeto

## Referência de Objeto

A referência a objetos permite que você crie um alias ou um "ponteiro" para um objeto existente. Em vez de criar uma cópia separada do objeto, uma referência aponta diretamente para o objeto original. Qualquer modificação feita na referência também será refletida no objeto original, pois eles compartilham o mesmo espaço de memória. É como ter dois nomes para a mesma entidade.

Exemplo:

```php

<?php

class Pessoa {
    public $nome;
}

$pessoa = new Pessoa();
$pessoa->nome = "Edson";

$pessoa2 = $pessoa;
$pessoa2->nome = "Jennifer";

echo $pessoa->nome;
```

> Jennifer

## Clone

A clonagem de objetos envolve a criação de uma cópia independente de um objeto existente. Em vez de criar uma referência ou ponteiro para o objeto original, um novo objeto é criado com todas as propriedades e métodos correspondentes ao objeto original.


```php
<?php

class Pessoa {
    public $nome;
}

$pessoa = new Pessoa();
$pessoa->nome = "Edson";

$pessoa2 = clone $pessoa;
$pessoa2->nome = "Jennifer";

echo $pessoa->nome;
```

> Edson

## Clonagem no Métodos de uma Classe
