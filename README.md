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

## Partie 3 — Application Android (Volley + Gson)

### Création du projet Android
- Lancement de Android Studio  
- Création du projet **projetws** (Java, API ≥ 26)  
- Vérification de la compilation du projet  

### Permission Internet
- Ajout de la permission Internet dans **AndroidManifest.xml**  
- Autorisation des requêtes HTTP vers le Web Service  

### Intégration des dépendances
- Ajout des bibliothèques **Volley** et **Gson**  
- Synchronisation du projet  

### Activité AddEtudiant
- Création de l’interface d’ajout d’étudiant  
- Saisie : nom, prénom, ville, sexe  
- Bouton d’envoi des données  

### Communication avec le Web Service
- Envoi d’une requête POST avec Volley  
- Réception de la réponse JSON  
- Conversion des données avec Gson  
- Affichage des résultats dans Logcat  

### Configuration réseau (Android 9+)
- Autorisation du trafic HTTP local  
- Ajout du fichier de configuration réseau  
- Mise à jour du manifest  

### Test de l’application
- Démarrage de Apache et MySQL  
- Exécution de l’application sur émulateur/appareil  
- Ajout d’un étudiant  
- Vérification de la réponse dans Logcat  

### Challenge (optionnel)
- Création d’un écran liste des étudiants  
- Ajout des actions modifier / supprimer  
- Confirmation avant suppression  
- Actualisation dynamique de la liste    
