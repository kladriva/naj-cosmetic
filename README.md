# NAJ COSMETIC - Site E-commerce

## Description du Projet

NAJ COSMETIC est un site e-commerce spécialisé dans la vente de cosmétiques naturels, créé par Anyssa Joelle NTONGESSA. Le site propose une gamme de produits naturels conçus spécialement pour les peaux mixtes.

## Philosophie de la Marque

- **Naturel** : Des ingrédients 100% naturels, sans compromis
- **Douceur** : Des formules respectueuses de votre peau
- **Éclat** : Mettre en valeur votre beauté naturelle
- **Simplicité** : Des soins simples mais efficaces
- **Efficacité** : Des résultats visibles et durables

## Charte Graphique

### Couleurs
- **Blanc cassé** : `#F7F5F3` (--color-cream)
- **Beige clair** : `#E8E2D8` (--color-beige)
- **Vert sauge** : `#9CAF88` (--color-sage)
- **Doré doux** : `#D4AF37` (--color-gold)
- **Marron** : `#8B7355` (--color-brown)
- **Marron foncé** : `#5D4E37` (--color-dark-brown)

### Typographie
- **Police principale** : Playfair Display (titres)
- **Police secondaire** : Source Sans Pro (texte)

## Structure du Site

### Pages Principales

1. **Page d'Accueil** (`/`)
   - Slogan : "Prenez soin de votre peau, naturellement"
   - Présentation de la philosophie de la marque
   - Mise en avant des produits phares
   - Design sobre et lumineux

2. **Catalogue Produits** (`/produits`)
   - Affichage des deux produits principaux :
     - Lait Hydratant Corps (24,90€)
     - Crème Visage Éclat (32,90€)
   - Grille responsive et aérée
   - Informations sur les ingrédients clés

3. **Détail Produit** (`/produit/{id}`)
   - Grande photo du produit
   - Description détaillée
   - Liste des ingrédients naturels
   - Conseils d'utilisation
   - Bouton "Ajouter au panier"

4. **Notre Histoire** (`/notre-histoire`)
   - Parcours d'Anyssa Joelle NTONGESSA
   - Timeline de son évolution professionnelle
   - Valeurs de la marque
   - Philosophie de la cosmétique naturelle

## Technologies Utilisées

- **Backend** : CodeIgniter 4 (PHP)
- **Frontend** : HTML5, CSS3, JavaScript vanilla
- **Framework CSS** : Bootstrap 5.3
- **Icônes** : Font Awesome 6.4.0
- **Design** : Responsive design mobile-first
- **Typographie** : Google Fonts (Playfair Display, Source Sans Pro)

## Installation et Démarrage

1. **Prérequis**
   - PHP 7.4 ou supérieur
   - Composer
   - Serveur web (Apache/Nginx) ou serveur de développement

2. **Installation**
   ```bash
   # Cloner le projet
   git clone [url-du-repo]
   cd naj-cosmétique
   
   # Installer les dépendances
   composer install
   
   # Configurer l'environnement
   cp env .env
   # Éditer le fichier .env selon vos besoins
   ```

3. **Démarrage du serveur de développement**
   ```bash
   php spark serve
   ```
   
   Le site sera accessible à l'adresse : `http://localhost:8080`

## Structure des Fichiers

```
app/
├── Controllers/
│   ├── Home.php          # Contrôleur page d'accueil
│   ├── Products.php      # Contrôleur produits
│   └── About.php         # Contrôleur notre histoire
├── Views/
│   ├── layouts/
│   │   └── main.php      # Template principal
│   ├── home/
│   │   └── index.php     # Page d'accueil
│   ├── products/
│   │   ├── index.php     # Catalogue produits
│   │   └── detail.php    # Détail produit
│   └── about/
│       └── index.php     # Notre histoire
└── Config/
    └── Routes.php        # Configuration des routes
```

## Fonctionnalités

### ✅ Implémentées
- [x] Design responsive (mobile-first) avec Bootstrap
- [x] Charte graphique NAJ COSMETIC personnalisée
- [x] Navigation intuitive avec Bootstrap Navbar
- [x] Pages principales complètes
- [x] Typographie élégante (Playfair Display + Source Sans Pro)
- [x] Icônes Font Awesome professionnelles
- [x] Animations CSS subtiles
- [x] Optimisation mobile complète
- [x] Composants Bootstrap (Cards, Buttons, Grid, etc.)
- [x] Timeline responsive pour l'histoire de la fondatrice

### 🔄 À Développer (Phase 2)
- [ ] Système de panier d'achat
- [ ] Processus de commande
- [ ] Gestion des utilisateurs
- [ ] Base de données produits
- [ ] Système de paiement
- [ ] Gestion des commandes
- [ ] Images produits réelles
- [ ] Blog/actualités
- [ ] Newsletter
- [ ] Avis clients

## Responsive Design

Le site est entièrement responsive et optimisé pour :
- **Mobile** : < 768px
- **Tablette** : 768px - 1024px
- **Desktop** : > 1024px

## Contribution

Pour contribuer au projet :
1. Fork le repository
2. Créer une branche feature (`git checkout -b feature/nouvelle-fonctionnalite`)
3. Commit vos changements (`git commit -am 'Ajout nouvelle fonctionnalité'`)
4. Push vers la branche (`git push origin feature/nouvelle-fonctionnalite`)
5. Créer une Pull Request

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## Contact

**NAJ COSMETIC**
- Fondatrice : Anyssa Joelle NTONGESSA
- Email : contact@najcosmetic.com
- Site : [www.najcosmetic.com](https://www.najcosmetic.com)

---

*"Prenez soin de votre peau, naturellement."* - NAJ COSMETIC