# Interface

Interface é usado para definir o modelo para ser usado em outras classes.

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
 