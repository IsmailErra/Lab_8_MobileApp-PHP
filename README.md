# Projet WS — Gestion des Étudiants

## Objectifs

- Création d’une base MySQL  
- Développement d’un service PHP  
- Création d’une application Android  
- Lecture du JSON avec Gson  

---

## Partie 1 — Base MySQL

### Démarrage
- Lancement de XAMPP  
- Activation de Apache et MySQL  
- Ouverture de phpMyAdmin  

### Base de données
- Création de **school1**

### Table
- Création de **Etudiant**  
- Champs : id, nom, prenom, ville, sexe  

### Test
- Ajout de quelques étudiants  


## Partie 2 — Web Service PHP

### Structure du projet
- Création du projet PHP  
- Organisation des dossiers : classes, connexion, dao, service, controller, ws  
- Placement du projet dans **htdocs**

### Connexion à la base
- Création de la classe **Connexion (PDO)**  
- Configuration de l’accès à la base **school1**

### Classe Etudiant
- Création de la classe métier **Etudiant**  
- Définition des attributs : id, nom, prenom, ville, sexe  
- Ajout des getters nécessaires  

### Interface IDao
- Définition des opérations CRUD  
- Méthodes principales : create, delete, update, findAll, findById  

### Service EtudiantService
- Implémentation de l’interface **IDao**  
- Ajout d’un étudiant dans la base  
- Récupération de la liste des étudiants  

### Web Services
- Service **createEtudiant** pour l’ajout (POST)  
- Service **loadEtudiant** pour la lecture (GET)  
- Retour des données au format JSON  

### Test avec Advanced REST Client
- Installation de l’outil ARC ou Postman  
- Test du service POST d’ajout  
- Vérification de l’insertion dans phpMyAdmin  
- Test du service GET de lecture  
- Validation du format JSON  

### Remarque
- Vérification du bon fonctionnement des services avant l’intégration Android  
