# Projet : Espace Contact

## Description
Le projet **Espace Contact** est un module de contact pour un site vitrine.  
Il permet aux visiteurs d’envoyer des messages via un formulaire et aux administrateurs de consulter et gérer ces messages dans un back-office sécurisé.

Ce projet a été développé par notre équipe dans le cadre de la formation **Concepteur Designer UI**.  

**Stack technique :**
- **PHP** : traitement côté serveur  
- **MySQL** : stockage des données  
- **Bootstrap 5** : interface responsive et design  
- **HTML5 / CSS3** : structure et styles  
- **PDO** : connexion sécurisée à la base de données  

---

## Objectifs
- Formulaire de contact public et ergonomique  
- Stockage sécurisé des messages dans MySQL  
- Back-office sécurisé pour consulter, détailler et supprimer les messages  
- Validation côté client et serveur, sécurité renforcée  
- Design responsive et clair avec Bootstrap  

---

## Arborescence du projet

```text
espace-contact/
├── index.php           # Page d'accueil avec formulaire de contact
├── traitement.php      # Script de traitement des données du formulaire
├── admin/              # Espace d'administration sécurisé
│   ├── connexion.php   # Formulaire de connexion des administrateurs
│   ├── liste.php       # Affichage de la liste des messages avec actions
│   └── detail.php      # Détail complet d'un message sélectionné
├── config/             # Configuration et connexion à la base de données
│   └── database.php    # Script PDO pour la connexion MySQL
├── css/                # Fichiers CSS pour styles supplémentaires
│   └── style.css       # Styles personnalisés
└── README.md           # Documentation du projet
