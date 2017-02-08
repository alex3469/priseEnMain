priseEnMain
===========

A Symfony project created on February 7, 2017, 9:35 am.

## Prise en main de Symfony:
### Comprendre certains aspects de son fonctionnement:
* Découverte de l'architecture de Symfony
* .htaccess: utilisé pour des redirections, HTTP_HOST, REQUEST_URI, ENV:BASE
* Explication de la relation route/URI
* Prise en main des controllers
* Découverte de la fonction twig parent


### Procédure d'instalation (sur Netbeans).
    
    1. Projet Click droit, composer, install dev.
    2. Faire un chmod -R a+rwx a la racine du dossier. (sous linux)
    3. Configurer la base de donnée dans parameters.yml
    4. Terminal : php bin/console doctrine:database:create
                : php bin/console doctrine:schema:create:update --force