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

### Back-End & Base de Données (En cours)
- **PHP (Architecture MVC) :** Logique serveur, orientation objet, routage et séparation des responsabilités.
- **Composer :** Gestion des dépendances et autoloading PSR-4 avec des namespaces simplifiés.
- **SQL / MySQL :** Conception de la base de données relationnelle pour la gestion des utilisateurs, des métadonnées des fichiers et de l'arborescence des dossiers.

---

## Architecture & Conception

Afin de garantir une démarche de développement rigoureuse, la phase de conception a débuté par la modélisation des besoins utilisateurs. 

- **Diagramme de cas d'utilisation UML :** Disponible dans le dossier `docs/use_case/` pour illustrer les fonctionnalités et parcours utilisateurs.
- **MCD / MLD :** Modélisation de la base de données disponible dans `docs/mcd_mld/`.

---

## Structure du projet

```text
arcance/
├── App/                  # Code source applicatif (MVC)
│   ├── Controller/       # Contrôleurs de l'application
│   ├── Model/            # Modèles et gestion des données
│   ├── Utils/            # Classes utilitaires et helpers
│   └── View/             # Composants et vues d'affichage
├── database/             # Scripts et dumps de la base de données
│   └── db.sql
├── docs/                 # Documentation et schémas de conception
│   ├── mcd_mld/          # Modèles conceptuels et logiques des données
│   └── use_case/         # Diagrammes de cas d'utilisation
├── public/               # Racine web publique
│   ├── assets/           # Ressources statiques
│   │   ├── img/          # Images
│   │   ├── scripts/      # Fichiers JavaScript
│   │   └── styles/       # Feuilles de style CSS
│   └── index.php         # Point d'entrée unique de l'application
├── vendor/               # Dépendances gérées par Composer (ignoré par Git)
├── .gitignore            # Fichiers et dossiers ignorés par Git
├── .htaccess             # Configuration de la réécriture d'URL Apache
├── composer.json         # Configuration Composer et autoloading PSR-4
├── env.php               # Variables d'environnement (ignoré par Git)
└── README.md             # Documentation du projet
```

---

## 🚀 Installation & Lancement en local

1. **Cloner le dépôt Git :**
   ```bash
   git clone <URL_DE_TON_DEPOT>
   cd arcance
   ```

2. **Installer les dépendances Composer :**
   ```bash
   composer install
   ```

3. **Configurer la base de données :**
   - Importer le fichier `database/db.sql` dans votre gestionnaire MySQL (phpMyAdmin, DBeaver, etc.).
   - Créer le fichier `env.php` à la racine de votre projet et y renseigner vos identifiants de connexion :
     ```php
     <?php

     const DB_HOST = "localhost";
     const DB_NAME = "arcance";
     const DB_USERNAME = "root";
     const DB_PASSWORD = "";
     ```

4. **Démarrer le serveur local PHP :**
   ```bash
   php -S 127.0.0.1:8000 -t public
   ```

5. **Accéder à l'application :**
   Ouvrir votre navigateur sur [http://127.0.0.1:8000](http://127.0.0.1:8000).
