CRUD de Cadastro de Clientes em Laravel
Este é um projeto CRUD (Create, Read, Update, Delete) simples de cadastro de clientes desenvolvido em Laravel v10.21.0 com PHP v8.2.9. O objetivo deste projeto é fornecer um exemplo básico de como criar um sistema de gerenciamento de clientes utilizando o framework Laravel.

Requisitos
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados em sua máquina:

PHP >= 8.2.9
Composer (https://getcomposer.org/)
Node.js (https://nodejs.org/)
NPM (geralmente instalado junto com o Node.js)
Banco de dados (MySQL, PostgreSQL, SQLite, etc.)
Passos para Execução
Siga as etapas abaixo para configurar e executar o projeto:

Clone o repositório:

bash
Copy code
git clone https://github.com/seu-usuario/crud-clientes-laravel.git
cd crud-clientes-laravel
Instale as dependências do Laravel:

Copy code
composer install
Crie o arquivo .env:

Renomeie o arquivo .env.example para .env e configure as informações de conexão com o banco de dados.

Gere a chave de aplicação:

vbnet
Copy code
php artisan key:generate
Execute as migrações do banco de dados:

Copy code
php artisan migrate
Inicie o servidor de desenvolvimento:

Copy code
php artisan serve
O servidor de desenvolvimento será executado em http://localhost:8000.

Acesse a aplicação no navegador:

Abra seu navegador e acesse http://localhost:8000. Você verá a página inicial da aplicação.

Usando Laravel Sail (opcional)
Laravel Sail é uma ferramenta que fornece um ambiente de desenvolvimento Docker para aplicativos Laravel. Se você preferir usar o Laravel Sail para executar o projeto, siga os passos abaixo:

Instale o Laravel Sail globalmente (caso ainda não tenha):

javascript
Copy code
composer global require laravel/sail
Inicie o ambiente Sail:

Copy code
sail up
Execute os passos de 3 a 7 acima.

Certifique-se de que o ambiente Sail esteja em execução sempre que você estiver trabalhando no projeto.
