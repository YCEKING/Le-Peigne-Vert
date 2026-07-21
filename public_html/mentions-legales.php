<?php
$title  = 'Mentions légales | Le Peigne Vert';
$desc   = 'Mentions légales du site Le Peigne Vert : éditeur, hébergeur et propriété intellectuelle.';
$active = '';
include 'partials/header.php';
?>
<section class="page-head"><div class="wrap">
  <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Mentions légales</nav>
  <h1>Mentions légales</h1>
</div></section>

<div class="wrap"><article class="legal">
  <p class="updated">Dernière mise à jour : <?= date('d/m/Y') ?></p>

  <h2>1. Éditeur du site</h2>
  <p>Le présent site <strong>lepeignevert.com</strong> est édité par :</p>
  <ul>
    <li><strong>Raison sociale :</strong> Le Peigne Vert <span style="color:var(--ochre)">[forme juridique à compléter : SARL / EI…]</span></li>
    <li><strong>Responsable de la publication :</strong> Marine Duchêne</li>
    <li><strong>Adresse :</strong> [Adresse complète du salon], 45000 Orléans</li>
    <li><strong>SIRET :</strong> [N° SIRET à compléter]</li>
    <li><strong>N° TVA intracommunautaire :</strong> [à compléter]</li>
    <li><strong>Téléphone :</strong> 02 38 00 00 00 — <strong>E-mail :</strong> bonjour@lepeignevert.fr</li>
  </ul>

  <h2>2. Hébergement</h2>
  <p>Le site est hébergé par <strong>Hostinger International Ltd.</strong>, 61 Lordou Vironos Street, 6023 Larnaca, Chypre — <a href="https://www.hostinger.fr">hostinger.fr</a>.</p>

  <h2>3. Propriété intellectuelle</h2>
  <p>L'ensemble des éléments du site (textes, photographies, logo, charte graphique, illustrations) est la propriété exclusive de Le Peigne Vert ou de ses partenaires. Toute reproduction, représentation ou diffusion, totale ou partielle, sans autorisation écrite préalable est interdite et constitutive de contrefaçon.</p>

  <h2>4. Données personnelles & cookies</h2>
  <p>Le traitement de vos données personnelles est détaillé dans notre <a href="confidentialite.php">politique de confidentialité</a>. La gestion des cookies est décrite dans notre <a href="cookies.php">politique cookies</a>.</p>

  <h2>5. Responsabilité</h2>
  <p>Le Peigne Vert s'efforce d'assurer l'exactitude des informations diffusées mais ne saurait être tenu responsable des erreurs, omissions ou indisponibilités du site. Les liens vers des sites tiers n'engagent pas la responsabilité de l'éditeur.</p>
</article></div>

<?php include 'partials/footer.php'; ?>
