# Função Constructor

O construtor permite criar objeto dentro do paramentro da instancia da Classe.

```php
<?php

class Login {

    private $email;
    private $password;
    private $name;

    // Constructor
    public function __construct($email, $password, $name) {
        $this->name = $name;

        //Pegando do SETTERS
        $this->setEmail($email);
        $this->setPassword($password);

    }

    // Métodos Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($emailSet) {
        $this->email = $emailSet;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($passwordSet) {
        $this->password = $passwordSet;
    }

}

$edson = new Login("edson@teste.com", "123456", "Edson");

echo var_dump($edson);
```

> object(Login)#1 (3) { ["email":"Login":private]=> string(15) "edson@teste.com" ["password":"Login":private]=> string(6) "123456" ["name":"Login":private]=> string(5) "Edson" }

*Se você criar uma `__construct()`, o PHP chamará automaticamente esta função quando você criar um objeto de uma classe.*
