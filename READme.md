## Suivez les commandes suivantes pour pouvoir lancer le projet :

+ Tout d'abord il faut cloner le projet :

```bash 
git clone https://forge.iut-larochelle.fr/tjamard/2021-2022-info2-dw-projet-musee-maritime-fregate.git 
```

+ Ce positioner dans le projet :

```bash 
cd 2021-2022-info2-dw-projet-musee-maritime-fregate 
```

+ Il faut par la suite lancer docker : 

```bash 
docker-compose up --build -d
```

+ Ouvrir un nouveau terminal et ce positionner à nouveau dans le projet

+ Une fois à nouveau dans le projet, il faut entrer dans le conteneur :

```bash 
docker-compose exec php-fpm bash 
```

+ Une fois dans le conteneur se positionner dans le répértoire `sfapi` :

```bash 
cd sfapi 
```

+ Installer les dépendances du projet :

```bash 
composer install 
```

+ Éffectuer les migrations :

```bash 
php bin/console d:m:m 
```

+ Lancer la fixture : 

```bash 
php bin/console d:f:l 
```

+ Il vous suffit ensuite d'aller sur l'url : <http://localhost:3000>

