######################
# Laravel Framework 8.10.0
# PHP 7.4.11 
# mysql  Ver 8.0.21
######################


- Comandos de inicialização:

composer install

php artisan migrate:refresh

php artisan jwt:secret

npm install

php artisan key:generate

php artisan db:seed


# Api
-Gerar token via request para o endpoint /api/auth/login, passando email e password [ teste@teste.com / 12345678 ]
-Acrescentar o token gerado como bearer token no endpoint /api/products para listar os produtos



jwt-auth by Sean Tymon
https://jwt-auth.readthedocs.io/en/develop/quick-start/
