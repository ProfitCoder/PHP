# How to Interpretate this PDF

Well as you can see, we have a lot of information, just to let us know
how this work, but to prepare the enviroment for those that have to hurry up
just need to go to the part 3.2 and star executting some commands.

Here I'll let some of the most important commands:

# Commands:

## Arrancar todo el entorno
docker compose up -d

## Como crear un proyecto

powershell -ExecutionPolicy Bypass -File .\new-project.ps1 -Nombre proyecto2

# Also

mkdir 

## Parar el entorno (sin borrar nada)
docker compose stop

## Ver logs de Apache/PHP en directo
docker compose logs -f web

## Entrar a una terminal dentro del contenedor PHP
docker compose exec web bash

## Ejecutar Composer/PHPUnit en un proyecto concreto
docker compose exec -w /var/www/projects/NOMBRE web composer install

docker compose exec -w /var/www/projects/NOMBRE web phpunit tests

## Reconstruir la imagen tras cambiar el Dockerfile
docker compose up -d --build

## Borrar TODO (contenedores + volúmenes, incluida la base de datos)
docker compose down -v

## Arrancar todo el entorno
docker compose up -d

## Parar el entorno (sin borrar nada)
docker compose stop

## Ver logs de Apache/PHP en directo
docker compose logs -f web

## Entrar a una terminal dentro del contenedor PHP
docker compose exec web bash

## Ejecutar Composer/PHPUnit en un proyecto concreto
docker compose exec -w /var/www/projects/NOMBRE web composer install

docker compose exec -w /var/www/projects/NOMBRE web phpunit tests

## Reconstruir la imagen tras cambiar el Dockerfile
docker compose up -d --build
# Borrar TODO (contenedores + volúmenes, incluida la base de datos)
docker compose down -v
