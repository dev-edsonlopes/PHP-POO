# Interface

Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.

Interfaces são definidas da mesma forma que classes, mas com a palavra-chave i  substituindo `class` e com nenhum dos métodos tendo seu conteúdo definido.

Todos os métodos declarados em uma `interface` devem ser públicos, essa é a natureza de uma `interface`.

Exemplo:
```php
<?php

// Criando a interface
interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}
```
## implements 
Para implementar uma `interface`, o operador `implements` é utilizado. Todos os métodos na `interface` devem ser implementados na classe; não fazê-lo resultará em um erro fatal. Classes podem implementar mais de uma `interface` se assim for desejado, separando cada `interface` com uma vírgula.
```php
// Para implementar.
class Noticias implements Crud {
    public function create($data) {
        // Lógica para criar uma noticia.
    }
    public function read() {
        // Para ler uma noticia.
    }
    public function update() {
        // Lógica para atualizar uma noticia.
    }
    public function delete() {
        // Lógica para apagar uma noticia.
    }
}
```

 