<h1 align="center">Tucana</h1>

<p align="center">Thème WordPress sur mesure pour une plateforme de voyage responsable et solidaire.</p>

<p align="center">
  <img src="https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white" alt="WordPress" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/ACF-1F5FBF?style=for-the-badge&logo=wordpress&logoColor=white" alt="Advanced Custom Fields" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Font_Awesome-04BBFF?style=for-the-badge&logo=fontawesome&logoColor=white" alt="Font Awesome" />
</p>


## À propos

Tucana est un thème WordPress développé à partir d'une maquette, pour un site de voyage qui met en avant un tourisme responsable : destinations, activités, valeurs et missions de la plateforme.

Projet réalisé seul en formation. L'objectif : passer d'un starter theme vide à un thème complet, avec des templates dédiés par type de page, un custom post type et des contenus éditables depuis l'admin grâce à ACF.

## Fonctionnalités

- **Page d'accueil complète** (`front-page.php`) : hero avec barre de recherche WordPress, grille de catégories, bloc promo, formulaire de réservation, statistiques, pays coup de cœur, activités, villes les plus visitées et croisières.
- **Formulaire de vol interactif** : bouton d'inversion départ / arrivée animé et date affichée au format français (`toLocaleDateString('fr-FR')`), en JavaScript natif.
- **Fiches destination** (`single-trip.php`) : titre, description et image principale, mosaïque « À propos », cartes « Les 4 incontournables » avec contenu révélé au survol, grille « À découvrir aussi ». Tout est piloté par des champs ACF.
- **Custom post type `activite`** : déclaré dans `functions.php` (slug `/activite`, image à la une, champs personnalisés, compatible éditeur de blocs).
- **Fiches activité** (`single-activite.php`) : lieu, galerie de 3 images, infos pratiques (âges, durée, horaire, billet, langue du guide), carte de réservation avec prix et expériences similaires.
- **Page À propos** (`page-about.php`) : hero typographique, navigation par ancres, valeurs (responsabilité, créativité, accessibilité, confiance) et missions.
- **Page Aide / Contact** (`page-contact.php`) : hero avec image de fond et recherche, grille de sujets d'aide et bloc d'appel à l'action, éditables via ACF.
- **Trois en-têtes** : `header-home.php` (accueil), `header-contact.php` (contact) et `header.php` (le reste, avec recherche et fil d'Ariane).
- **Fil d'Ariane maison** : fonction `tucana_breadcrumb()` qui gère pages parentes, articles, catégories, recherche et 404.
- **CSS chargé à la demande** : chaque feuille de `css/` n'est enqueue que sur le template qui l'utilise (`is_singular()`, `is_page()`).

## Stack technique

| Côté | Technologies |
| --- | --- |
| CMS | WordPress, thème classique PHP (base Underscores `_s`) |
| Contenus | Custom post type `activite`, Advanced Custom Fields (champs simples et répéteurs) |
| Front | HTML, CSS3 (une feuille par template), JavaScript natif |
| Icônes | Font Awesome 6.5 (CDN cdnjs) |
| Environnement | WordPress local (site `toucana.local`) |

## Architecture

```text
wp_tucana/
├── functions.php        # supports du thème, menus, CPT activite, enqueue, fil d'Ariane
├── front-page.php       # page d'accueil
├── single-trip.php      # fiche destination (aussi template de page « Trip Page »)
├── single-activite.php  # fiche activité
├── page-about.php       # page À propos
├── page-contact.php     # page Aide / Contact
├── header*.php          # en-têtes accueil, contact et par défaut
├── footer.php           # pied de page commun
├── css/                 # styles par page : about, contact, header, footer, single-trip, single-activite
├── template-parts/      # gabarits de contenu hérités de _s (articles, pages, recherche)
└── inc/                 # fonctions utilitaires et Customizer de _s
```

Les styles globaux et ceux de l'accueil sont dans `style.css`, qui importe `css/header.css` et `css/footer.css`.

## Lancer le projet en local

**Prérequis** : un WordPress local (Local, MAMP, XAMPP…), PHP 5.6 ou plus, et l'extension Advanced Custom Fields avec les champs répéteurs (ACF Pro ou équivalent).

1. Copier le dossier dans les thèmes :

   ```bash
   cp -r wp_tucana /chemin/vers/wordpress/wp-content/themes/tucana
   ```

2. Dans l'admin : **Apparence > Thèmes**, activer **tucana**.
3. Installer et activer ACF, puis recréer les groupes de champs utilisés par les templates (aucun export JSON n'est fourni) :
   - fiche destination : `title_trip`, `description`, `main_image`, `about_text`, répéteurs `about_image`, `unavoidable`, `steps` ;
   - activité : `activity_location`, `activity_price`, `activity_ages`, `activity_duration`, `activity_start`, `activity_ticket`, `activity_language`, `activity_gallery_1` à `3`, répéteur `steps` ;
   - contact : `bg_image`, `title`, `grid_title`, `cta_title`, `cta_text`, `cta_btn_label` et le répéteur `grid` avec `subject_name` / `question_count`.
4. Créer le type de contenu `trip` (il n'est pas déclaré dans le thème, par exemple via ACF ou CPT UI) pour profiter de `single-trip.php`.
5. Créer les pages aux slugs attendus par le code : `about` et `contact` (leurs CSS se chargent sur ces slugs), plus les destinations liées depuis l'accueil (`thailande`, `portugal`…).
6. **Réglages > Lecture** : choisir une page statique comme page d'accueil pour afficher `front-page.php`.
7. **Apparence > Personnaliser** : ajouter un logo (affiché par `the_custom_logo()` dans les en-têtes).

Les images de l'accueil et de la page À propos pointent en dur vers `http://toucana.local/wp-content/uploads/2026/01/`. Elles ne sont pas dans le repo : il faut les importer dans la médiathèque ou adapter les URL.

## Ce que j'ai appris

- **Transformer un starter theme** : partir de `_s` et le remplacer par des templates propres à chaque page, en suivant la hiérarchie WordPress (`front-page`, `single-{type}`, `page-{slug}`).
- **Modéliser du contenu** : déclarer un custom post type et brancher ACF, notamment les répéteurs (`have_rows()` / `the_row()`), pour rendre les fiches éditables sans toucher au code.
- **Charger les assets au bon endroit** : enqueue conditionnel des feuilles de style plutôt qu'un seul gros fichier.
- **Limites repérées** : des URL et liens écrits en dur (images, pages pays, lien vers une activité) qu'il faudrait rendre dynamiques, et le menu `menu-1` enregistré mais pas encore affiché par les en-têtes.

## Auteur

**Mehdi Hammadou** (Madou) : [Portfolio](https://portfoliohammadoumehdi.vercel.app/) · [GitHub](https://github.com/madou752)

## Crédits

Le thème part du starter theme [Underscores (`_s`)](https://underscores.me/) d'Automattic, distribué sous licence GPLv2 ou ultérieure (voir le fichier [LICENSE](LICENSE)).
