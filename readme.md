## Installation de composer
`composer install`

## Installation de npm 
`npm install`

## Lancement du serveur
`symfony server:start`

## Lancement de npm
`npm run watch`

# Base de donnée

## Création de la base de données
`php bin/console doctrine:database:create`

## Suppression et création de la base de données
`php bin/console doctrine:database:drop --force` \
`php bin/console doctrine:database:create`

## Création d'une entité
`php bin/console make:entity`

## Création des tables
`php bin/console make:migration`\
`php bin/console doctrine:migrations:migrate -n`
