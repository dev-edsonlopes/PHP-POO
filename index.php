<?php

class Login {

    private $email;
    private $senha;

    // Métodos Getters and Setters
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($emailSet) {
        $this->email = $emailSet;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senhaSet) {
        $this->senha = $senhaSet;
    }

    // Método simulando a validação de acesso do usuário.

    public function logar() {
        if($this->email == "edson@teste.com" and $this->senha == "123456") {
            echo "Usuário Logado com sucesso!";
        } else {
            echo "Dados incorretos!";
        }
    }
    
}

$edson = new Login();

// Setando os valores
$edson->setEmail("edson@teste.com");
$edson->setSenha("123456");

$edson->logar();

// Obetendo os valores
echo "<hr /><br />".$edson->getEmail()."<br />".$edson->getSenha();