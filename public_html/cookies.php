<?php
$title  = 'Politique de gestion des cookies | Le Peigne Vert';
$desc   = 'Quels cookies utilise le site Le Peigne Vert, pour quelles finalités, et comment gérer votre consentement.';
$active = '';
include 'partials/header.php';
?>
<section class="page-head"><div class="wrap">
  <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Cookies</nav>
  <h1>Gestion des cookies</h1>
</div></section>

<div class="wrap"><article class="legal">
  <p class="updated">Dernière mise à jour : <?= date('d/m/Y') ?></p>
  <p>Un cookie est un petit fichier déposé sur votre terminal lors de la visite d'un site. Conformément aux recommandations de la CNIL, aucun cookie non essentiel n'est déposé sans votre consentement préalable, recueilli via le bandeau à votre première visite.</p>

  <h2>Cookies strictement nécessaires</h2>
  <p>Indispensables au fonctionnement du site (panier, session, sécurité, mémorisation du choix de consentement). Ils ne requièrent pas de consentement.</p>

  <h2>Cookies de mesure d'audience</h2>
  <p>Ils nous aident à comprendre l'usage du site pour l'améliorer <span style="color:var(--ochre)">[ex. Matomo / Google Analytics — à préciser]</span>. Déposés uniquement après votre accord.</p>

  <h2>Cookies marketing & réseaux sociaux</h2>
  <p>Permettent de vous proposer des contenus pertinents et de partager sur les réseaux (Instagram, Facebook). Déposés uniquement après votre accord.</p>

  <h2>Durée de conservation</h2>
  <p>Les cookies soumis à consentement ont une durée de vie maximale de 13 mois. Votre choix de consentement est conservé 6 mois.</p>

  <h2>Gérer votre consentement</h2>
  <p>Vous pouvez à tout moment modifier vos préférences via le bouton ci-dessous, ou en paramétrant votre navigateur pour bloquer/supprimer les cookies.</p>
  <p><button class="btn btn-ghost" type="button" onclick="window.openCookiePrefs&&window.openCookiePrefs();return false">Modifier mes préférences cookies</button></p>
</article></div>

<?php include 'partials/footer.php'; ?>
