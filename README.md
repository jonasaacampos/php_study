# php_study
Documentando meu aprendizado de php

## Configuração do ambiente

### Linux 

- `sudo apt-get install docker.io`
- `sudo apt-get search docker`
- `sudo docker (testar)`
- `sudo systemctl`
- `sudo systemctl enable docker`

### Windows

- Instalar o docker Desktop
- `docker search php`
- `docker pull newdeveloper/apache-php`

### Rodar o Servidor

`php -S localhost:3000`

## Variáveis pré-definidas (reservadas)
> Documentação oficial [aqui](https://www.php.net/manual/pt_BR/reserved.variables.php)


- Superglobais — Variáveis nativas que estão sempre disponíveis em todos escopos
- $GLOBALS — Referencia todas variáveis disponíveis no escopo global
- $_SERVER — Informação do servidor e ambiente de execução
- $_GET — Variáveis HTTP GET
- $_POST — HTTP POST variables
- $_FILES — Variáveis de Upload de Arquivos HTTP
- $_REQUEST — Variáveis de requisição HTTP
- $_SESSION — Variáveis de sessão
- $_ENV — Variáveis de ambiente
- $_COOKIE — Cookies HTTP
- $php_errormsg — A mensagem de erro anterior
- $http_response_header — Cabeçalhos de resposta HTTP
- $argc — O número de argumentos passados para o script
- $argv — Array de argumentos passados para o script


```php
// obtém todas as informações do servidor
<?php
foreach($_SERVER as $key => $value){
    echo $key . ": " . $value . "<br>" ;
}
```



-------

## Referências

- [Manual do PHP](https://www.php.net/manual/pt_BR/)
- [HTTP - MozDev](https://developer.mozilla.org/pt-BR/docs/Web/HTTP)