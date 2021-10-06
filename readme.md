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

## Chargement de fixtures
https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html
`php bin/console doctrine:fixtures:load --append`

### En cas de problème sur une table
`php app/console doctrine:schema:update --force`