<div align="center">

# 🌿 Le Peigne Vert

**Site vitrine & e-commerce du salon de coiffure végétal Le Peigne Vert — Orléans**

Coloration 100 % végétale · Soins naturels · Boutique en ligne · Réservation

</div>

---

## À propos

Refonte complète du site du salon **Le Peigne Vert** (62 Bd de Châteaudun, 45000 Orléans),
dirigé par Marine Duchêne. Un site **unifié** réunissant la vitrine du salon, la boutique
en ligne, les tarifs et la prise de rendez-vous — pensé **mobile-first** et optimisé pour
le **référencement local**.

## ✨ Fonctionnalités

- **Accueil** — présentation du salon, prestations, best-sellers, engagements, journal
- **Boutique** — grille produits, filtres à facettes (type de cheveu, besoin, labels), diagnostic capillaire
- **Fiche produit** — galerie, variantes, quantité, accordéon (composition, conseils, livraison)
- **Tarifs** — forfaits (soins, colorations, coupe, mariage) + prestations à la carte + offres
- **Réservation** — formulaire avec validation serveur, anti-spam (honeypot), e-mail + log
- **Panier** — compteur persistant + bouton flottant sur mobile
- **RGPD** — bandeau cookies conforme CNIL + 5 pages légales (mentions, CGV, confidentialité, cookies, livraison/retours)
- **SEO** — JSON-LD (`HairSalon`, `Product`, `BreadcrumbList`), `sitemap.xml`, `robots.txt`, Open Graph
- **UX** — menu latéral collections, thème clair/sombre, décors botaniques, signature de marque sur les visuels

## 🛠️ Stack technique

| Élément | Détail |
|---|---|
| **Back** | PHP (sans framework) — partials `header.php` / `footer.php`, pages autonomes |
| **Front** | HTML sémantique + CSS avec design system tokenisé (thème clair par défaut / sombre) |
| **JS** | Vanilla (menu latéral, panier flottant, filtres, cookies, thème) |
| **Hébergement** | Hostinger — `public_html` (LiteSpeed) |

## 📁 Structure

```
le-peigne-vert/
├── public_html/            # racine web
│   ├── index.php           # accueil
│   ├── boutique.php        # collection + filtres
│   ├── produit.php         # fiche produit
│   ├── tarifs.php          # grille tarifaire
│   ├── reservation.php     # formulaire de réservation (traitement PHP)
│   ├── mentions-legales.php · cgv.php · confidentialite.php · cookies.php · livraison-retours.php
│   ├── robots.txt · sitemap.xml
│   ├── partials/           # header.php, footer.php, cookie-consent.php
│   └── assets/             # css/ (design system) + img/
├── data/                   # logs hors racine web (protégé par .htaccess) — ignoré par Git
└── README.md
```

## 🚀 Développement local

Prérequis : **PHP 8+**.

```bash
cd public_html
php -S 127.0.0.1:8100
```

Puis ouvrir **http://127.0.0.1:8100**.

## 📦 Déploiement (Hostinger)

Déposer le contenu de `public_html/` à la racine `public_html` de l'hébergement.
Le dossier `data/` doit rester **hors de la racine web** et protégé.

### À compléter avant mise en ligne
- Infos société dans les pages légales (SIRET, forme juridique, médiateur, prestataire de paiement)
- E-mail réel du salon dans `reservation.php` (`$SALON_EMAIL`) + envoi SMTP fiable
- Remplacer les photos de démonstration par des visuels dont le salon détient les droits

## 📄 Licence

Projet privé — © Le Peigne Vert. Tous droits réservés.

---

<div align="center">

Conçu & développé par **[Lunyce](https://lunyce.fr)** 💜

</div>
