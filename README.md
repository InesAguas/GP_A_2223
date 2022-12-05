Para o projeto funcionar é preciso alterar algumas linhas no ficheiro php.ini dentro da pasta Apache/PHP

É preciso retirar o ";" das seguintes linhas:
extension=fileinfo

extension=pdo_pgsql
extension=pgsql

Caso o acesso a base de dados nao funcionar após mudar as duas linhas anteriores, utilizar o path para os ficheiros (exemplo: extension=C:\Apache24\PHP\ext\php_pdo_pgsql.dll)

Para ter acesso ao projeto é preciso fazer clone para o vosso computador (na pasta htdocs do Apache)

Depois, abrir a linha de comandos na pasta do projeto e fazer os seguintes passos

Comando: composer install
Comando: copy .env.example .env
Alterar o ficheiro .env para ter os dados da base de dados corretos
Comando: php artisan key:generate

Para correr o projeto no servidor utiliza-se o comando:
php artisan serve

Após usarem o comando, podem aceder ao website ao escrever localhost:8000 no browser