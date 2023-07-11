# PHP Orientado a Objetos(POO)

Um estilo de codificação onde ações relacionadas são agrupadas em classes para ajudar na criação de códigos mais compactos e efetivos.

## Como criar um Objeto

### Classe

Para criar um objeto precisamos definir a Estrutura de uma classe desse objeto.

- *Como criar a classe*:

declare-a usando a palavra chave `class`, seguida do nome da classe e um par de chaves (`{}`):

Exemplo:

```php
<?php

// Objeto
class Pessoa { 
    // Atributos e Métodos
}
/* Boas praticas: nome de classes sempre com a primeira Letra Maiúscula.*/
```

### Atributos

Os atributos são a característica do objeto que seria as variáveis do objeto.

exemplo:

```php
<?php
class Pessoa {
    //Atributos
    public $nome;
    public $idade;
}
```

### Métodos

Os métodos são as ações do objeto que seria a função do objeto criado.

```php
<?php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar() {
        echo "Falou";
    }

}
```
### Intância

Após criar a classe, ela pode ser instanciada e guardada em alguma variável usando a palavra chave `new`:


```php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar() {
        echo "Falou";
    }

}
// Intanciando 
$Edson = new Pessoa();
var_dump($edson)
```

> object(Pessoa)#1 (2) { ["nome"]=> NULL ["idade"]=> NULL }

### Acessar as propriedades e Métodos

Para acessar as propriedades e Métodos é usado flecha (`->`) depois da variavel que foi instânciado.

Exemplo:
```php
<?php
class Pessoa {...} 
$edson = new Pessoa();

$edson->nome = "Edson Lopes da Silva Junior";
$edson->idade = 23;
$edson->Falar();

var_dump($edson);

// Exibindo o valor do atiburo

echo $edson->nome;
```
> Falou
> object(Pessoa)#1 (2) { ["nome"]=> string(27) "Edson Lopes da Silva Junior" ["idade"]=> int(23) }
> Edson Lopes da Silva Junior

### Acessar as propriedades de uma classe dentro do Metodo.

Para acessar o atributo do escopo da classe dentro do métodos usamos a palavra reserva `this->nomeAtributo`, fazendo referencia do atritubo do objeto atual.

Exemplo:

```php
<?php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar() {
        echo "$this->nome tem $this->idade anos<br /> Ação: acabou de falar";
    }

}

$edson = new Pessoa();

$edson->nome = "Edson Lopes da Silva Junior";
$edson->idade = 23;
$edson->Falar();
```
> Edson Lopes da Silva Junior tem 23 anos
> Ação: acabou de falar