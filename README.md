# Administration Project to the plataform called E-Cleaner
Developed using AminLte

# Installing the project
Clone
`git clone https://github.com/luhanBeal/e-cleanerADM.git`
# Instal dependencies
`composer install`
or in development enviroment:
`composer update`

## Copy .env.example and rename to .env to configure dabase configuration:
`create database ecleaner;`

## Create DB config
`php artisan migrate`
## Create administator user
`php artisan db:seed`
USER: luhan@admin.com
Senha: 123123123

Start development server
`php artisan serve`
