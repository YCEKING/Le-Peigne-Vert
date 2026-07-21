<?php
$title  = 'Conditions Générales de Vente (CGV) | Le Peigne Vert';
$desc   = 'Conditions générales de vente de la boutique en ligne Le Peigne Vert : commande, prix, paiement, livraison, droit de rétractation et garanties.';
$active = '';
include 'partials/header.php';
?>
<section class="page-head"><div class="wrap">
  <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>CGV</nav>
  <h1>Conditions Générales de Vente</h1>
</div></section>

<div class="wrap"><article class="legal">
  <p class="updated">En vigueur au <?= date('d/m/Y') ?></p>

  <div class="toc"><h4>Sommaire</h4><ul>
    <li><a href="#art1">1. Objet</a></li>
    <li><a href="#art2">2. Produits</a></li>
    <li><a href="#art3">3. Prix</a></li>
    <li><a href="#art4">4. Commande</a></li>
    <li><a href="#art5">5. Paiement</a></li>
    <li><a href="#art6">6. Livraison</a></li>
    <li><a href="#art7">7. Droit de rétractation</a></li>
    <li><a href="#art8">8. Garanties</a></li>
    <li><a href="#art9">9. Litiges & médiation</a></li>
  </ul></div>

  <h2 id="art1">1. Objet</h2>
  <p>Les présentes conditions régissent les ventes de produits capillaires réalisées par Le Peigne Vert (« le Vendeur ») via le site lepeignevert.com au profit de tout acheteur non professionnel (« le Client »). Toute commande implique l'acceptation sans réserve des présentes CGV.</p>

  <h2 id="art2">2. Produits</h2>
  <p>Les produits proposés sont décrits et présentés avec la plus grande exactitude. Les photographies n'ont pas de valeur contractuelle. Les offres sont valables dans la limite des stocks disponibles.</p>

  <h2 id="art3">3. Prix</h2>
  <p>Les prix sont indiqués en euros toutes taxes comprises (TTC), hors frais de livraison. Le Vendeur se réserve le droit de modifier ses prix à tout moment, étant entendu que le prix appliqué est celui en vigueur au moment de la validation de la commande.</p>

  <h2 id="art4">4. Commande</h2>
  <p>Le Client valide sa commande après avoir vérifié le contenu de son panier. La vente est considérée comme définitive après confirmation de l'acceptation de la commande par e-mail et encaissement du paiement.</p>

  <h2 id="art5">5. Paiement</h2>
  <p>Le règlement s'effectue en ligne par carte bancaire via un prestataire de paiement sécurisé <span style="color:var(--ochre)">[Stripe / PayPal — à préciser]</span>. Les données bancaires ne transitent jamais en clair et ne sont pas conservées par le Vendeur.</p>

  <h2 id="art6">6. Livraison</h2>
  <p>Les modalités, délais et frais sont détaillés dans notre page <a href="livraison-retours.php">Livraison &amp; Retours</a>. Les livraisons sont effectuées en France métropolitaine <span style="color:var(--ochre)">[+ zones à préciser]</span>.</p>

  <h2 id="art7">7. Droit de rétractation</h2>
  <p>Conformément aux articles L.221-18 et suivants du Code de la consommation, le Client dispose d'un délai de <strong>14 jours</strong> à compter de la réception des produits pour exercer son droit de rétractation, sans avoir à motiver sa décision. Les produits d'hygiène descellés après livraison ne peuvent être repris pour raisons de santé (art. L.221-28). La procédure est détaillée sur la page <a href="livraison-retours.php">Livraison &amp; Retours</a>.</p>

  <h2 id="art8">8. Garanties légales</h2>
  <p>Tous les produits bénéficient de la garantie légale de conformité (art. L.217-3 et s. du Code de la consommation) et de la garantie contre les vices cachés (art. 1641 et s. du Code civil).</p>

  <h2 id="art9">9. Litiges & médiation</h2>
  <p>En cas de litige, le Client s'adresse en priorité au Vendeur. À défaut de résolution amiable, le Client peut recourir gratuitement au médiateur de la consommation <span style="color:var(--ochre)">[nom du médiateur à compléter]</span> ou à la plateforme européenne de règlement en ligne des litiges : <a href="https://ec.europa.eu/consumers/odr">ec.europa.eu/consumers/odr</a>.</p>
</article></div>

<?php include 'partials/footer.php'; ?>
