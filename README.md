Para ter acesso ao projeto é preciso fazer clone para o vosso computador (na pasta htdocs do Apache)
Depois, abrir a linha de comandos na pasta do projeto e fazer os seguintes passos

Comando: composer install
Comando: copy .env.example .env
Alterar o ficheiro .env para ter os dados da base de dados corretos
Comando: php artisan key:generate

Para correr o projeto no servidor utiliza-se o comando:
php artisan serve

Após usarem o comando, podem aceder ao website ao escrever localhost:8000 no browser