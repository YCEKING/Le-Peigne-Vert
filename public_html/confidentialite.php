<?php
$title  = 'Politique de confidentialité (RGPD) | Le Peigne Vert';
$desc   = 'Politique de protection des données personnelles de Le Peigne Vert : données collectées, finalités, durée de conservation et vos droits (RGPD).';
$active = '';
include 'partials/header.php';
?>
<section class="page-head"><div class="wrap">
  <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Confidentialité</nav>
  <h1>Politique de confidentialité</h1>
</div></section>

<div class="wrap"><article class="legal">
  <p class="updated">Dernière mise à jour : <?= date('d/m/Y') ?></p>
  <p>Le Peigne Vert accorde une grande importance à la protection de votre vie privée. La présente politique explique quelles données nous collectons, pourquoi, et comment exercer vos droits, conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi Informatique et Libertés.</p>

  <h2>1. Responsable de traitement</h2>
  <p>Le Peigne Vert — Marine Duchêne, [adresse], 45000 Orléans. Contact : bonjour@lepeignevert.fr.</p>

  <h2>2. Données collectées</h2>
  <ul>
    <li><strong>Identité & contact :</strong> nom, prénom, e-mail, téléphone, adresse de livraison/facturation.</li>
    <li><strong>Commande :</strong> historique d'achats, montants (les données bancaires sont gérées par notre prestataire de paiement, jamais stockées par nos soins).</li>
    <li><strong>Navigation :</strong> cookies, adresse IP, pages consultées (voir <a href="cookies.php">politique cookies</a>).</li>
    <li><strong>Diagnostic capillaire :</strong> réponses fournies pour personnaliser nos recommandations.</li>
  </ul>

  <h2>3. Finalités & bases légales</h2>
  <ul>
    <li>Gérer les commandes et la relation client — <em>exécution du contrat</em>.</li>
    <li>Envoyer la newsletter — <em>consentement</em>.</li>
    <li>Améliorer le site et mesurer l'audience — <em>intérêt légitime / consentement</em>.</li>
    <li>Respecter nos obligations comptables et légales — <em>obligation légale</em>.</li>
  </ul>

  <h2>4. Durée de conservation</h2>
  <p>Données clients : 3 ans après le dernier contact à des fins de prospection ; données de facturation : 10 ans (obligation légale) ; cookies : 13 mois maximum.</p>

  <h2>5. Destinataires</h2>
  <p>Vos données sont destinées aux services internes de Le Peigne Vert et à nos sous-traitants (hébergeur, prestataire de paiement, transporteur, outil d'e-mailing), tenus à la confidentialité. Aucune donnée n'est vendue à des tiers.</p>

  <h2>6. Vos droits</h2>
  <p>Vous disposez des droits d'accès, de rectification, d'effacement, de limitation, d'opposition et de portabilité, ainsi que du droit de définir des directives post-mortem. Pour les exercer : <strong>bonjour@lepeignevert.fr</strong>. Vous pouvez également introduire une réclamation auprès de la CNIL (<a href="https://www.cnil.fr">cnil.fr</a>).</p>
</article></div>

<?php include 'partials/footer.php'; ?>
