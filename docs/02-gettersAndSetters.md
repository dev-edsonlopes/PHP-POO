# Métodos Getters and Setters

Acessar atibrutos diretamente de uma classe não é uma boa prática, pra acessar esses atributos de forma não direta utilizamos os metodos `get` (pegar) e `set` (colocar, definir) para cada atributo de uma classe.

Exemplo:

```php
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

// Nova instância
$edson = new Login();

// Setando os valores
$edson->setEmail("edson@teste.com");
$edson->setSenha("123456");

$edson->logar();

// Obetendo os valores
echo "<hr /><br />".$edson->getEmail()."<br />".$edson->getSenha();
```
- **Notações importantes**:

- Os métodos get e set devem ser públicos, pois eles serão acessados de fora das classes.

- A palavra reservada $this é usada para quando se refere a classe, de dentro dela. Ou seja, quando eu escrevo return $this->nome, é como se eu escrevesse: return Aluno->nome.

- Os métodos gets sempre retornam algo e o métodos sets sempre manipulam o atributo e insere valor dentro deles, por isso, tais métodos recebem parâmetros que serão alocados aos atributos.

- Por fim, tais métodos são uma forma de acessar ou manipular os atributos que não são públicos. Porem, é recomendado que mesmo os públicos precisam de tais métodos para acessá-los ou manipulá-los.