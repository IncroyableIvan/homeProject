#Home Project DWM7 by Ivan Zanazzi

Sujet choisi: sujet numéro 1

##Fonctionnalités en place

Pour se connecter à l'application, j'ai préalablement défini trois administrateurs
dans la table "administrator" de ma base de données MySQL

Lorsqu'on est connecté, l'administrateur voit apparaître le message "Bienvenue" ainsi que son nom d'utilisateur

L'application contient deux parties:
1)Employés

Composée de deux tableaux :

-le premier "Ajouter", permet d'ajouter et d'updater les données des employés,

-le deuxième "Données employés", contient l'ensemble des données des employés (id, Prénom, Nom, Poste et Mail),
ainsi qu'un bouton "Edit" et un bouton "Delete",
le bouton "Edit" renvoie vers le premier tableau et permet d'updater les données employés,
le bouton "Delete" supprime simplement l'employé selectionné

2)Horaires

Composée de deux tableaux également:

-le premier "Ajouter", permet d'ajouter et d'updater les données horaires,

-le deuxième "Données horaires", contient l'ensemble des données horaires (Prénom, Nom, Date et Heures travaillées),
ainsi qu'un bouton "Edit" et un bouton "Delete",
le bouton "Edit" renvoie vers le premier tableau et permet d'updater les données horaires,
le bouton "Delete" supprime simplement l'horaire selectionné

L'administrateur peut quitter l'application via le bouton "Logout" sité en haut à droite de l'application


##Problèmes rencontrés

J'ai vraiment eu du mal avec la mise en place du update et du delete

J'ai toujours du mal avec le CSS, du coup j'ai utilisé Bootstrap qui m'a vraiment bien aidé

Je n'ai pas réussi à mettre en place un total des heures travaillées

Je n'ai pas non plus réussi à faire ne sorte de limiter les heures travaillées dans une journée à 24h

##Marche à suivre pour tester le projet
1)Se connecter avec l'un des trois administrateurs

2)Lorqu'on est connecté, on se dirige soit vers "Employés", soit vers "Horaires"

3)On peut ensuite dans chaque parties:

-ajouter un employé dans la partie "Employés", un horaire dans la partie "Horaires",
en rentrant les informations dans le tableau "Ajouter"

-updater un employé dans la partie "Employés" ou un horaire dans la partie "Horaires",
en cliquant sur le bouton "Edit" dans le tableau "Données employés" pour la partie "Employés",
ou dans le tableau "Données horaires" pour la partie "Horaires",
ce qui nous renvoie dans le tableau "Ajouter" pour modifier les précédantes informations

-delete un employé dans la partie "Employés" ou un horaire dans la partie "Horaires",
en cliquant sur le bouton "Delete" dans le tableau "Données employés" pour la partie "Employés",
ou dans le tableau "Données horaires" pour la partie "Horaires",
ce qui supprime automatiquement la ligne selectionnée

4)On peut enfin se déconnecter en cliquant simplement sur la partie "Logout" située en haut à gauche de l'application
