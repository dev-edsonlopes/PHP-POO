# namespace
É usado para definir nomes de classes para não ocorrer conflitos caso tenha de arquivos iguais.

Exemplo:

1. Criando duas pasta `classes` e `models` criaremos um arquivos `produto.php` para ambos.

2. `classes\produto.php`

```php 
<?php

class Produto {
    public function mostrarDetalhe() {
        echo "Detalhe do produto dentro da pasta classes";
    }
}
```

3. `models\produto.php`

```php
<?php

class Produto {
    public function mostrarDetalhe() {
        echo "Detalhe do produto dentro da pasta models";
    }
}
```
4. `index.php`

```php 
<?php

require 'classes\produto.php';
require 'models\produto.php';

// Chamando o método da pasta classes
$produto = new \classe\Produto();
$produto->mostrarDetalhes();

echo "<br />";
// Chamando o método da pasta models
$produto2 = new \models\Produto();
$produto2->mostrarDetalhes();
```

> Detalhe do produto da pasta classes

> Detalhe do produto dentro da pasta models

## USE AS

Podemos támbém da um apelido para não deixar a instância ta verbosa, e deixa o código mais legivel

Exemplo:

```php
<?php

require 'classes\produto.php';
require 'models\produto.php';

// APelido
use classes\Produto as productClass;
use models\Produto as productModel;

// Chamando o método da pasta classes
$produto = new productClass();
$produto->mostrarDetalhes();

echo "<br />";
// Chamando o método da pasta models
$produto2 = new productModel();
$produto2->mostrarDetalhes();

```
> Detalhe do produto da pasta classes

> Mostrar produto da pasta models