# Déploiement automatique avec phpstorm

Cette note concerne le déploiement automatique du code en utilisant phpstorm.
Le code d'origine est installé dans mon répertoire Utilisateur, tandis qu'une copie est mise dans le répertoire de wampserver :

```
origine : C:\Users\bulam\Documents\php
copie: C:\wamp64\www\MyDeployedApp
```

L'appli sur Utilisateur est lancé avec le serveur Symfony.
J'utilise le localhost de Wampserver comme serveur distant ou déployé.
Si n'importe quel répertoire ferait l'affaire, l'avantage est ici de pouvoir indistinctement lancer l'un des 2 serveurs pour voir les changements apparaître dans le navigateur.

Pour compléter cette note, suivre le tuto de [Jet Brains](https://www.jetbrains.com/help/phpstorm/tutorial-deployment-in-product.html)

Reste à tester avec des commits, pour saisir les éventuelles manipulations à opérer.
Il s'agit de voir si des pulls, ou des uploads sont nécessaires après un push, un pull sur le remote ou si tout est automatisé.