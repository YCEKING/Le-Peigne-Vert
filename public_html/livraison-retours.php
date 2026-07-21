<?php
$title  = 'Livraison & Retours | Le Peigne Vert';
$desc   = 'Modalités de livraison, délais, frais et procédure de retour et remboursement de la boutique Le Peigne Vert.';
$active = '';
include 'partials/header.php';
?>
<section class="page-head"><div class="wrap">
  <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Livraison &amp; Retours</nav>
  <h1>Livraison &amp; Retours</h1>
</div></section>

<div class="wrap"><article class="legal">
  <p class="updated">Dernière mise à jour : <?= date('d/m/Y') ?></p>

  <h2>Délais & frais de livraison</h2>
  <ul>
    <li><strong>Préparation :</strong> commande expédiée sous 24 à 48 h ouvrées.</li>
    <li><strong>France métropolitaine :</strong> 2 à 4 jours ouvrés — <strong>3,90 €</strong>, ou <strong>offerte dès 49 €</strong> d'achat.</li>
    <li><strong>Point relais :</strong> 2 à 4 jours — <strong>2,90 €</strong>.</li>
    <li><strong>Retrait au salon (Orléans) :</strong> gratuit, dès réception de l'e-mail de disponibilité.</li>
    <li><span style="color:var(--ochre)">[Belgique / Suisse / DOM-TOM — tarifs à préciser]</span></li>
  </ul>

  <h2>Suivi de commande</h2>
  <p>Un e-mail de confirmation puis un numéro de suivi vous sont envoyés dès l'expédition. Vous pouvez suivre votre colis à tout moment depuis votre compte client.</p>

  <h2>Droit de rétractation (14 jours)</h2>
  <p>Vous disposez de <strong>14 jours</strong> à compter de la réception pour changer d'avis, sans justification. Les produits d'hygiène descellés ne sont pas repris pour des raisons sanitaires (art. L.221-28 du Code de la consommation).</p>

  <h2>Procédure de retour</h2>
  <ul>
    <li>Contactez-nous à <strong>bonjour@lepeignevert.fr</strong> en indiquant votre numéro de commande.</li>
    <li>Renvoyez les produits non ouverts, dans leur emballage d'origine, à l'adresse communiquée.</li>
    <li>Les frais de retour sont à votre charge, sauf produit défectueux ou erreur de notre part.</li>
  </ul>

  <h2>Remboursement</h2>
  <p>Une fois le retour reçu et vérifié, le remboursement est effectué sous <strong>14 jours</strong> par le même moyen de paiement que celui utilisé lors de la commande.</p>

  <h2>Produit endommagé ou erroné</h2>
  <p>En cas de colis abîmé ou d'erreur, signalez-le sous 48 h avec photos à l'appui : nous organisons le remplacement ou le remboursement à nos frais.</p>
</article></div>

<?php include 'partials/footer.php'; ?>
