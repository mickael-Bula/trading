# installation

J'utilise php en version 7.4. Pour cela j'ai spécifié la version que Symfony doit utiliser.
En effet, par défaut c'est la version déclarée dans les variables d'environnement qui prévaut.
Voici la commande pour déclarer une autre version :

```sql
symfony php -v
7.4.29 > .php-version
```
Cette commande crée un fichier temporaire dans lequel symfony va lire la version à utiliser.
Pour que cette utilisation soit prise en compte, il faut faire précéder la commande d'insatllation du projet par 'symfony' :

```sql
symfony composer create-project symfony/skeleton trading
```

On peut vérifier la version utilisée dans le fichier composer.json

## installation des bundles

Du fait que l'on utilise une version de php différente de la version par défaut, il faut préfixer les commandes en console par
symfony. En outre, il faut préficer par php les appels à bin/console :

```sql
symfony php bin/console make:controller
```

## installation database

Pour communiquer avec la BDD il est nécessaire d'avoir un driver configuré.
Pour cela, il faut décommenter le module dans le fichier php.ini : pdo_mysql.
Après création du fichier .env.local, il faut configurer le DATABASE_URL avec la version de notre SGBDR