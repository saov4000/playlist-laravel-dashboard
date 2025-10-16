PAINEL ADMINISTRADOR COM CRUD FILAMENT

C:\xampp\php\php.ini and uncomment: 
Retirar o ; antes de
extension=intl
extension=zip

Instalar o filament

composer require filament/filament

Cria o painel

php artisan filament:install --panels


Criar todas as tabelas inclusive user

php artisan migrate

Criar o administrador

php artisan make:filament-user

Cria a key 
php artisan key:generate


Cria o crud para manipular a tabela musicas no painel administrativo

php artisan make:filament-resource Musica --generate --view


