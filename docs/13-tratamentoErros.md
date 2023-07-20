# Tratamento de Exceções

- O que é um Execeção

Ele descreve um erro inesperado dentro do script, Ela podem ser lançadas dentro das funções e classes.

- Porque usar-la?

As exceções são uma boa maneira de interromper uma função quando ela encontra dados que não pode usar.

## Lançar uma Exceção

Usamos a instrução `throw` dentro de uma função ou método criado, quando a exceção é declarada, o código seguinte não será executado.

Exemplo:

```php
<?php
class CadastroExecption {
    
    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Mensgagem da Exceção: Esse email é inválido", 1);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}

$cadastroEmail = new CadastroExecption();
$cadastroEmail->cadastrarEmail("Edson@");
```

Saída:
```csharp
PHP Fatal error:  Uncaught Exception: Mensgagem da Exceção: Esse email é inválido in C:\edson\PHP-POO\index.php:7
Stack trace:
#0 C:\edson\PHP-POO\index.php(15): CadastroExecption->cadastrarEmail()
#1 {main}
  thrown in C:\edson\PHP-POO\index.php on line 7
```

## Try... Catch...

Para evitar esse tipo de erro que foi mostrado ácima usamos a instrução Try catch para pegar a exceção e continuar o processo.

```php
<?php
<?php

class CadastroExecption {
    
    public function cadastrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Mensgagem da Exceção: Esse email é inválido", 1);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}

$cadastroEmail = new CadastroExecption();

try {
    $cadastroEmail->cadastrarEmail("Edson@");
} catch(Exception $e) {
        // métodos:
        echo "Mensagem: ".$e->getMessage()."<br />";
        echo "Código: ".$e->getCode()."<br />";
        echo "Linha: ".$e->getLine()."<br />";
        echo "Arquivo:".$e->getFile()."<br />";
}
```

```csharp
Mensagem: Mensgagem da Exceção: Esse email é inválido
Código: 1
Linha: 7
Arquivo:C:\edson\PHP-POO\index.php
```

### Descrição do método

- getMessage() Retorna uma string descrevendo porque a exceção foi lançada

- getPrevious() Se esta exceção foi disparada por outra, este método retorna a exceção anterior. Se não, retorna null

- getCode() Retorna o código de exceção

- getFile() Retorna o caminho completo do arquivo no qual a exceção foi lançada

- getLine() Retorna o número da linha de código que lançou a exceção
