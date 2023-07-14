# Métodos e Atributos Estáticos

Uma classe estática em PHP é um tipo de classe instanciada apenas uma vez em um programa. Ele deve conter um membro estático (variável) ou uma função de membro estático (método) ou ambos. As variáveis ​​e métodos são acessados ​​sem a criação de um objeto, usando o operador de resolução de escopo (`::`). Mas aqui está uma pegadinha, que o método estático não pode acessar as variáveis ​​não estáticas porque isso exigirá a criação do objeto primeiro. Portanto, para acessar variáveis ​​de uma classe estática, devemos declará-las como estáticas usando a palavra-chave `static` .

Exemplo:

```php
<?php

class Login {
    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." Online";
    }
}

// Chamando atributos e métodos estáticos
Login::$user = "Edson";
Login::verificaLogin();
```

> O usuário Edson Online