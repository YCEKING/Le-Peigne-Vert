<?php
$title  = 'Routine Douceur | coffret capillaire végétal | Le Peigne Vert';
$desc   = 'Routine Douceur : shampoing, après-shampoing et soin végétaux pour cheveux fins et cuir chevelu sensible. 100% naturel, sans ammoniaque, fabriqué en France.';
$active = 'boutique';
$thumbs = ['coffret-1.webp','life-1.jpg','life-3.jpg','presta-shampoing.webp'];
$related = [
  ['n'=>'Routine Volume','c'=>'Coffret','p'=>'52,00','img'=>'life-3.jpg'],
  ['n'=>'Shampoing Calendula','c'=>'Shampoing','p'=>'12,00','img'=>'presta-shampoing.webp'],
  ['n'=>'Après-shampoing liquide','c'=>'Soin','p'=>'16,00','img'=>'citronnier.jpg'],
  ['n'=>'Masque botanique','c'=>'Soin','p'=>'19,00','img'=>'life-1.jpg'],
];
$jsonld = json_encode([
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'Product',
      'name' => 'Routine Douceur',
      'image' => ['https://lepeignevert.com/assets/img/coffret-1.webp'],
      'description' => 'Coffret capillaire végétal pour cheveux fins et cuir chevelu sensible : shampoing, après-shampoing et soin sans rinçage. 100% d\'origine naturelle, sans sulfates ni silicones.',
      'brand' => ['@type'=>'Brand','name'=>'Le Peigne Vert'],
      'category' => 'Soins capillaires',
      'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'38'],
      'offers' => ['@type'=>'Offer','price'=>'48.00','priceCurrency'=>'EUR','availability'=>'https://schema.org/InStock','url'=>'https://lepeignevert.com/produit.php','itemCondition'=>'https://schema.org/NewCondition'],
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Accueil','item'=>'https://lepeignevert.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Boutique','item'=>'https://lepeignevert.com/boutique.php'],
        ['@type'=>'ListItem','position'=>3,'name'=>'Routine Douceur','item'=>'https://lepeignevert.com/produit.php'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
include 'partials/header.php';
?>

<div class="wrap">
  <nav class="crumb" aria-label="Fil d'Ariane" style="color:var(--muted);margin:24px 0 0">
    <a href="index.php" style="color:var(--muted)">Accueil</a><span>/</span>
    <a href="boutique.php" style="color:var(--muted)">Boutique</a><span>/</span>Routine Douceur
  </nav>
</div>

<div class="wrap pdp">
  <div class="gallery rv">
    <div class="main-img"><img src="assets/img/coffret-1.webp" alt="Coffret Routine Douceur — Le Peigne Vert"></div>
    <div class="thumbs">
      <?php foreach ($thumbs as $i => $t): ?>
      <button type="button" class="<?= $i===0?'on':'' ?>" aria-label="Vue <?= $i+1 ?>"><img src="assets/img/<?= $t ?>" alt=""></button>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="pdp-info rv">
    <div class="cat">Coffret · Routine</div>
    <h1>Routine Douceur</h1>
    <div class="stars">★★★★★ <span>4,9 · 38 avis</span></div>
    <div class="pdp-price">48,00 € <small>· soit 3 soins · livraison offerte dès 49 €</small></div>
    <p class="pdp-desc">Le trio essentiel pour les cheveux fins et les cuirs chevelus sensibles : un shampoing doux au calendula, un après-shampoing démêlant et un soin sans rinçage. Des formules 100&nbsp;% d'origine naturelle, sans sulfates ni silicones, pour une chevelure légère, brillante et respectée jour après jour. <strong>Conçu et fabriqué en France.</strong></p>

    <div class="variant">
      <div class="chips">
        <button class="chip on" type="button">Cheveux fins</button>
        <button class="chip" type="button">Cheveux normaux</button>
        <button class="chip" type="button">Cuir sensible</button>
      </div>
    </div>

    <div class="pdp-cta">
      <div class="qty"><button type="button" data-d="-" aria-label="Moins">−</button><input value="1" inputmode="numeric" aria-label="Quantité"><button type="button" data-d="+" aria-label="Plus">+</button></div>
      <button class="btn btn-primary" data-add data-name="Routine Douceur" data-price="48.00" data-img="assets/img/coffret-1.webp">Ajouter au panier · 48 €</button>
      <button class="icon-btn" aria-label="Ajouter aux favoris"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-4.4-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.6-7 10-7 10Z" stroke-linejoin="round"/></svg></button>
    </div>

    <div class="reassure">
      <div><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3c4 3 7 6 7 11a7 7 0 0 1-14 0c0-5 3-8 7-11Z" stroke-linejoin="round"/></svg>100% végétal</div>
      <div><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17"/></svg>Fabriqué en France</div>
      <div><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 7h13l-1 9a2 2 0 0 1-2 1.8H8a2 2 0 0 1-2-1.8Z" stroke-linejoin="round"/></svg>Livré sous 2–4 j</div>
    </div>

    <div class="acc">
      <details open><summary>Composition</summary><div class="acc-body">Aqua, extrait de calendula*, protéines de blé, glycérine végétale, huile de jojoba*, tensioactifs doux d'origine végétale, huiles essentielles. *Ingrédients issus de l'agriculture biologique. Sans sulfates, sans silicones, sans ammoniaque.</div></details>
      <details><summary>Conseils d'utilisation</summary><div class="acc-body">Appliquez le shampoing sur cheveux mouillés, massez, rincez. Renouvelez si besoin. Complétez avec l'après-shampoing sur les longueurs, puis le soin sans rinçage sur cheveux essorés. Convient à un usage quotidien.</div></details>
      <details><summary>Livraison & retours</summary><div class="acc-body">Expédition sous 24–48 h. Livraison offerte dès 49 € d'achat. Retour gratuit sous 14 jours (voir <a href="livraison-retours.php" style="color:var(--green);text-decoration:underline">conditions</a>).</div></details>
    </div>
  </div>
</div>

<section style="padding-top:20px">
  <div class="wrap">
    <div class="sec-head rv"><p class="eyebrow">Vous aimerez aussi</p><h2>Complétez votre routine</h2></div>
    <div class="prod-grid">
      <?php foreach ($related as $pr): ?>
      <article class="prod rv">
        <a href="produit.php" class="ph"><img src="assets/img/<?= $pr['img'] ?>" alt="<?= htmlspecialchars($pr['n']) ?>" loading="lazy"></a>
        <div class="body"><div class="cat"><?= $pr['c'] ?></div><h3><a href="produit.php"><?= $pr['n'] ?></a></h3>
          <div class="buy"><span class="price"><?= $pr['p'] ?> €</span><button class="add" data-add data-name="<?= htmlspecialchars($pr['n']) ?>" data-price="<?= str_replace(',','.',$pr['p']) ?>" data-img="assets/img/<?= $pr['img'] ?>">Ajouter</button></div></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
