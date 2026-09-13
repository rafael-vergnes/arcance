# Drive - Application Web de Stockage de Fichiers

> **Statut du projet :** En cours de développement 
> Projet réalisé dans le cadre de ma formation de **Développeur Web & Web Mobile** (ADRAR Pôle Numérique) afin de valider et mettre en pratique mes compétences.

---

## Présentation du Projet

L'objectif de ce projet est de concevoir une application web responsive de stockage et d'organisation de fichiers en ligne (type Drive). L'application permet aux utilisateurs d'importer, gérer, consulter et organiser leurs documents et dossiers de manière simple et intuitive.

---

## Fonctionnalités Clés

- **Authentification & Gestion d'accès :** Inscription, connexion sécurisée et gestion du profil utilisateur.
- **Gestion de Fichiers (CRUD) :** Importation (*upload*), consultation, téléchargement (*download*) et suppression de documents (PDF, images, etc.).
- **Organisation en Dossiers :** Création d'une arborescence personnalisée avec dossiers et sous-dossiers.
- **Interface 100% Responsive :** Ergonomie optimisée pour Mobile, Tablette et Desktop.
- **Gestion des Quotas (À venir) :** Suivi de l'espace de stockage utilisé par l'utilisateur.

---

## Stack Technique & Compétences

### Front-End (En cours)
- **HTML5 :** Structuration sémantique des pages.
- **CSS3 :** Design moderne, Flexbox, CSS Grid et Media Queries pour le responsive design.
- **JavaScript :** Dynamisation de l'interface, manipulation du DOM et gestion des interactions utilisateur.

### Back-End & Base de Données (À venir)
- **PHP :** Logique serveur, manipulation du système de fichiers (*upload/download*) et gestion des sessions.
- **SQL / MySQL :** Conception de la base de données relationnelle pour la gestion des utilisateurs, des métadonnées des fichiers et de l'arborescence des dossiers.

---

## Architecture & Conception

Afin de garantir une démarche de développement rigoureuse, la phase de conception a débuté par la modélisation des besoins utilisateurs. 

- **Diagramme d'utilisation UML :** Disponible à la racine du dépôt (`diagramme_cas_d_utilisation.jpg`) pour illustrer les fonctionnalités et parcours utilisateurs.

---

## Structure du Projet

```text
├── diagramme_cas_d_utilisation.jpg   # Modélisation UML des besoins
└── front/                            # Partie Front-End
    ├── accueil.html                  # Page d'accueil / Tableau de bord responsive
    ├── style.css                     # Feuilles de style global
    └── main.js                       # Scripts et dynamisme JavaScript



