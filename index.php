<?php

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {
    public function create($data) {
        // Lógica para criar uma noticia.ndou!
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
 