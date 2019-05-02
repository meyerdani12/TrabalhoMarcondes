#Como instalar o Laravel após clonar ele do GIT.

1. Faz pacto com o capeta;
2. Cria uma pasta e clona tudo o que tem no GIT;
3. Cria uma cópia do '.env.example', renomeia para '.env';
4. Dentro do .env, mudar as configurações do MYSQL e alterar as variáveis:
```DB_DATABASE=Banco de dados;
DB_USERNAME=Usuário do Mysql;
DB_PASSWORD=Senha do Mysql;
```
Exemplo:
```DB_DATABASE=trabalho;
DB_USERNAME=root;
DB_PASSWORD=senha123;
```
5. Rodar o comando 'composer install' e 'composer update' dentro da pasta do projeto;

6. Rodar o comando 'php artisan key:generate' dentro da pasta do projeto;

7. Rodar o comando 'php artisan serve' para disponibilizar o servidor.

8. Ser feliz! :) 