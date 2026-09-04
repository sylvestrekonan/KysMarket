# KysMarket

KysMarket est une application e-commerce full-stack développée dans le cadre d'un projet personnel visant à mettre en pratique des compétences en développement backend, frontend, bases de données, API REST et conteneurisation.

> Le projet est actuellement en cours de développement. Certaines fonctionnalités ne sont pas encore implémentées.


## Objectifs du projet

Ce projet a plusieurs objectifs :

- **concevoir une base de données relationnelle ;**
- **développer une API REST avec Laravel ;**
- **mettre en place les relations entre les modèles Eloquent ;**
- **gérer l'authentification et les autorisations ;**
- **développer un système de gestion des produits ;**
- **gérer les catégories ;**
- **gérer les paniers ;**
- **gérer les commandes ;**
- **gérer les stocks ;**
- **développer une interface frontend avec Vue.js ;**
- **documenter l'API ;**
- **écrire des tests ;**
- **conteneuriser l'application avec Docker.**

##  Fonctionnalités 

- **Authentification et gestion des utilisateurs**
- **Gestion des catégories : création, modification, suppression et activation/désactivation**
- **Gestion des produits : CRUD, prix, stock, statut et catégories**
- **Gestion des images des produits**
- **Catalogue avec recherche, filtrage et tri**
- **Gestion du panier et des quantités**
- **Gestion des commandes et de leur statut**
- **Gestion des informations de livraison**
- **Administration des produits, catégories, utilisateurs et commandes**
- **API sécurisée avec authentification et validation des données**
- **Tests et documentation des endpoints API**

## Stack technique

| Technologie     | Utilisation                |
| --------------- | -------------------------- |
| PHP 8.0         | Langage backend            |
| Laravel 12      | Framework backend          |
| MySQL 8         | Base de données            |
| Vue.js          | Frontend                   |
| Node.js 22      | Environnement JavaScript   |
| Nginx           | Serveur web                |
| Docker          | Conteneurisation           |
| Docker Compose  | Orchestration des services |
| Git             | Gestion de versions        |
| GitHub          | Hébergement du code        |
| Swagger/OpenAPI | Documentation API          |
| Postman         | Tests de l'API             |

## Prérequis

Pour exécuter le projet, il est recommandé d'avoir :

- **Git**
- **Docker Desktop**
- **WSL 2 sous Windows**
- **Docker Compose**

Il n'est pas nécessaire d'installer PHP, MySQL ou Node.js directement sur la machine hôte lorsque les services Docker correspondants sont utilisés.


## Installation ET Lancement

1. **Cloner le dépôt:**

    **git clone git@github.com:sylvestrekonan/KysMarket.git**
    
    **cd KysMarket**

2. **Construire et démarrer les conteneurs**
    
    docker compose up -d --build 

3. **Vérifier les conteneurs**

   docker compose ps

4. **Entrer dans le conteneur Laravel**
   
   docker compose exec app bash

5. **Générer la clé Laravel**

   php artisan key:generate

## Configuration de la base de données

DANS:

   Backend/.env

Configurer :

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=kysmarket
DB_USERNAME=kysmarket_user
DB_PASSWORD=secret

## Nettoyer le cache Laravel

Après une modification du .env :
 
 php artisan config:clear

 php artisan cache:clear

## Accéder à l'application
  

  Une fois les conteneurs démarrés :
   
   Backend Laravel : http://localhost:8000

   phpMyAdmin : http://localhost:8080

##  Tester l'API

Les endpoints de l'API seront progressivement documentés et testables avec :

- **Postman:** [View API Documentation](https://documenter.getpostman.com/view/54015401/2sBYAvvqVc)



## Commandes Laravel utiles 

php artisan migrate:fresh --seed = pour créer toutes les tables et les données de base (seed) nécessaire pour la base de donnée






















