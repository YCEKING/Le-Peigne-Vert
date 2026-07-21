<?php
/* Partial header — variables attendues (optionnelles) :
   $title  : balise <title> + og:title
   $desc   : meta description
   $active : clé de nav active (salon|prestations|boutique|journal|contact) */
$title  = $title  ?? 'Le Peigne Vert | Coiffeur végétal & boutique naturelle · Orléans';
$desc   = $desc   ?? 'Salon de coiffure végétal à Orléans : coloration 100% végétale sans ammoniaque, soins bio, coupe sur-mesure. Boutique de routines capillaires naturelles fabriquées en France.';
$active = $active ?? '';
$SITE_URL = 'https://lepeignevert.com';
$current  = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$canonical = $canonical ?? $SITE_URL . '/' . ($current === 'index.php' ? '' : $current);
$og_image  = $og_image  ?? $SITE_URL . '/assets/img/hero-salon.webp';
$jsonld    = $jsonld    ?? null; // JSON déjà encodé, spécifique à la page
$nav = [
  'salon'       => ['Le Salon',   'index.php#salon'],
  'prestations' => ['Prestations','index.php#prestations'],
  'tarifs'      => ['Tarifs',     'tarifs.php'],
  'boutique'    => ['Boutique',   'boutique.php'],
  'journal'     => ['Le Journal', 'index.php#journal'],
  'contact'     => ['Contact',    'index.php#visite'],
];
?><!doctype html>
<html lang="fr" data-theme="light">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script>/* thème clair par défaut ; on ne bascule en sombre que si l'utilisateur l'a choisi */(function(){try{var t=localStorage.getItem('lpv_theme');document.documentElement.setAttribute('data-theme',t==='dark'?'dark':'light');}catch(e){}})();</script>
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<meta name="robots" content="index,follow,max-image-preview:large">
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
<meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
<meta property="og:site_name" content="Le Peigne Vert">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E%F0%9F%8C%BF%3C/text%3E%3C/svg%3E">
<link rel="stylesheet" href="assets/css/style.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebSite","name":"Le Peigne Vert","url":"<?= $SITE_URL ?>/","inLanguage":"fr-FR","potentialAction":{"@type":"SearchAction","target":"<?= $SITE_URL ?>/boutique.php?q={search_term_string}","query-input":"required name=search_term_string"}}
</script>
<?php if ($jsonld): ?>
<script type="application/ld+json"><?= $jsonld ?></script>
<?php endif; ?>
</head>
<body>

<header class="site">
  <div class="wrap nav">
    <div class="nav-left">
      <button class="icon-btn burger" id="burger" aria-label="Ouvrir le menu des collections" aria-controls="drawer" aria-expanded="false">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/></svg>
      </button>
      <nav class="nav-links" aria-label="Principale">
        <?php foreach ($nav as $key => [$label, $href]): ?>
          <a href="<?= $href ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
      </nav>
    </div>
    <a class="brand" href="index.php" aria-label="Le Peigne Vert, accueil"><img src="assets/img/logo-header.png" alt="Le Peigne Vert — coiffure et produits capillaires éco-responsables"></a>
    <div class="nav-right">
      <button class="icon-btn" id="theme" title="Changer de thème" aria-label="Changer de thème">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="12" r="4.2"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2M5.6 5.6l1.4 1.4M17 17l1.4 1.4M18.4 5.6L17 7M7 17l-1.4 1.4" stroke-linecap="round"/></svg>
      </button>
      <a class="icon-btn cart" href="#" title="Panier" aria-label="Panier">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M6 7h13l-1.2 9.2a2 2 0 0 1-2 1.8H8.9a2 2 0 0 1-2-1.7L5.5 5.5A1 1 0 0 0 4.5 5H3" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span class="dot">2</span>
      </a>
      <a class="btn btn-primary" href="reservation.php" style="padding:11px 20px">Réserver</a>
    </div>
  </div>
</header>

<?php
$collections = [
  ['Routines & coffrets', 'boutique.php', '4'],
  ['Shampoings',          'boutique.php', '6'],
  ['Après-shampoings & soins', 'boutique.php', '5'],
  ['Coloration végétale', 'boutique.php', '3'],
  ['Packs coiffants',     'boutique.php', '4'],
  ['Accessoires',         'boutique.php', '7'],
];
?>
<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="drawer" id="drawer" aria-hidden="true" aria-label="Collections">
  <div class="drawer-head">
    <span>Nos collections</span>
    <button class="drawer-close" id="drawerClose" aria-label="Fermer le menu">&times;</button>
  </div>
  <nav class="drawer-nav" aria-label="Collections">
    <?php foreach ($collections as [$label, $href, $n]): ?>
      <a href="<?= $href ?>"><?= $label ?><span class="n"><?= $n ?></span></a>
    <?php endforeach; ?>
    <a href="index.php#boutique" style="color:var(--ochre)">Diagnostic capillaire →</a>
  </nav>
  <div class="drawer-sep"></div>
  <nav class="drawer-nav small" aria-label="Navigation">
    <?php foreach ($nav as [$label, $href]): ?>
      <a href="<?= $href ?>"><?= $label ?></a>
    <?php endforeach; ?>
  </nav>
  <div class="drawer-foot">
    <a class="btn btn-primary" href="reservation.php" style="width:100%;justify-content:center">Réserver ma visite</a>
  </div>
</aside>

<div class="fruit-deco left" aria-hidden="true"></div>
<div class="fruit-deco right" aria-hidden="true"></div>

<!-- Panier flottant (mobile) : apparaît après un ajout -->
<a class="cart-fab" id="cartFab" href="#" aria-label="Voir le panier">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6 7h13l-1.2 9.2a2 2 0 0 1-2 1.8H8.9a2 2 0 0 1-2-1.7L5.5 5.5A1 1 0 0 0 4.5 5H3" stroke-linecap="round" stroke-linejoin="round"/></svg>
  <span class="cart-fab-count">0</span>
</a>

<!-- Panier coulissant -->
<div class="cart-overlay" id="cartOverlay"></div>
<aside class="cart-drawer" id="cartDrawer" aria-hidden="true" aria-label="Votre panier">
  <div class="cart-drawer-head">
    <span>Votre panier<span class="n" id="cartHeadCount"></span></span>
    <button class="drawer-close" id="cartClose" aria-label="Fermer le panier">&times;</button>
  </div>
  <div class="cart-items" id="cartItems"></div>
  <div class="cart-foot" id="cartFoot">
    <div class="cart-subtotal"><span>Sous-total</span><b id="cartTotal">0,00 €</b></div>
    <p class="cart-note">Livraison et code promo calculés à l'étape suivante.</p>
    <button class="btn btn-primary" id="cartCheckout">Passer commande</button>
    <button class="btn btn-ghost" id="cartContinue">Continuer mes achats</button>
  </div>
</aside>
