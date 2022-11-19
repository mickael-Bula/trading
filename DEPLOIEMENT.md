# Déploiement automatique avec phpstorm

Cette note concerne le déploiement automatique du code en utilisant phpstorm.
Le code d'origine est installé dans mon répertoire Utilisateur, tandis qu'une copie est mise dans le répertoire de Wampserver :

```
origine : C:\Users\bulam\Documents\php
copie: C:\wamp64\www\MyDeployedApp
```

L'appli se trouvant dans mon répertoire Utilisateur est lancée avec le serveur Symfony.
J'utilise le localhost de Wampserver comme serveur distant ou déployé.
Si n'importe quel répertoire ferait l'affaire, l'avantage est ici de pouvoir indistinctement lancer l'un des 2 serveurs pour voir les changements apparaître dans le navigateur.

NOTE : cette fiche suit le tutoriel du site de [JetBrains](https://www.jetbrains.com/help/phpstorm/tutorial-deployment-in-product.html)

Pour configurer le déploiement automatique, dans le menu phpstorm : Tools | Deployment | Configuration
Cliquer ensuite sur Add, et dans la fenêtre déclarer un nom pour le serveur (ici `MyRemoteServer`) et sélectionner son type (j'ai choisi `Local or mounted folder` puisque ce serveur est le localhost de Wampserver)
Après avoir fait `OK`, une nouvelle fenêtre apparaît dans laquelle on précise le répertoire dans lequel le projet sera déversé par copie. Dans mon cas, c'est `C:\wamp64\www`.
Ensuite, dans la même fenêtre, il s'agit de remplir l'onglet Mappings. Par défaut, Local Pat est prérempli avec le chemin du projet en cours, ce qui me convient parfaitement.
Dans le champ suivant, Deployment path, il faut indiquer le répertoire dans lequel les fichiers seront téléversés (j'ai précisé MyDeployedApp). Puis on peut accepter la valeur par défaut pour le Web path (`\`).
Une fois accepté ces changements, le serveur se trouve prêt à l'emploi.

Pour s'assurer que le serveur est bien monté, sélectionner Tools | Deployment | Browse Remote Host dans le menu principal et la fenêtre Remote Host tool window doit apparaître sur la droite dans phpstorm.

### Configurer un serveur par défaut pour bénéficier du déploiement automatique

Le déploiement automatique requiert qu'un serveur par défaut soit configuré pour recevoir les modifications appliquées dans l'IDE.
Plusieurs serveurs peuvent être déclarés dans phpstorm, mais bien entendu un seul sera celui par défaut. Il faut donc veiller à modifier celui-ci en function des projets.
Pour définir un serveur par défaut, il faut cliquer sur la coche en haut à gauche de la fenêtre ouverte depuis le menu principal Tools | Deployment | Configuration.
On peut changer le serveur par défaut depuis ce même espace, mais aussi depuis le pied de page de phpstorm en cliquant sur le nom du serveur par défaut.

Reste à tester avec des commits, pour saisir les éventuelles manipulations à opérer.
Il s'agit de voir si des pulls, ou des uploads sont nécessaires après un push, un pull sur le remote ou si tout est automatisé.

## Modification du code en remote pour tester le déploiement lors d'un pull

Ce test consiste en une modification du présent fichier depuis la plateforme de Github pour vérifier si le déploiement se fait automatiquement ou non.

### Résultat

Après un pull du dernier commit, les modifications se trouvent bien sur le code déployé. Inutile de lancer des commandes supplémentaires.