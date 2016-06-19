Ouikend
=====

Projet d'application de voyage entre amis developpé sous Symfony et Angular Js pour un hackaton.

## Réutilisation du dépot
- récupération dépot GIT
- dans le shell taper : php app/console doctrine:database:create
- se placer dans le projet : sudo chmod -R 777 chmod.sh
- puis : ./chmod.sh
- composer update
- php app/console doctrine:database:update
- php app/console doctrine:schema:update --force
- php app/console doctrine:fixtures:load

## Retour d'expérience
La grosse difficulté a été de faire dialoguer symfony avec angular parce qu'ils ont tout les deux leur système de routage et de templating. Le projet aurait été bien plus efficace avec un back en php sans symfony et le front en angular.


