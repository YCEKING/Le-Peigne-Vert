<?php
$title  = 'Boutique | Routines & soins capillaires végétaux | Le Peigne Vert';
$desc   = 'Découvrez nos routines, shampoings, soins et colorations 100% végétaux, fabriqués en France. Filtrez par type de cheveu et besoin, ou lancez votre diagnostic capillaire.';
$active = 'boutique';

$products = [
  ['n'=>'Routine Douceur',          'c'=>'Coffret · Routine',   'col'=>'Routines & coffrets',       'p'=>'48,00','img'=>'coffret-1.webp',        'badge'=>'Best-seller','pills'=>['Cheveux fins','Vegan']],
  ['n'=>'Routine Curly · Citron',   'c'=>'Coffret · Boucles',   'col'=>'Routines & coffrets',       'p'=>'52,00','img'=>'coffret-2.webp',        'badge'=>'','pills'=>['Boucles','Bio']],
  ['n'=>'Routine Volume',           'c'=>'Coffret · Volume',    'col'=>'Routines & coffrets',       'p'=>'52,00','img'=>'life-3.jpg',            'badge'=>'','pills'=>['Volume']],
  ['n'=>'Shampoing solide Calendula','c'=>'Shampoing',          'col'=>'Shampoings',                'p'=>'12,00','img'=>'presta-shampoing.webp', 'badge'=>'','pills'=>['Cuir sensible','Solide']],
  ['n'=>'Shampoing Fève Tonka',     'c'=>'Shampoing',           'col'=>'Shampoings',                'p'=>'13,00','img'=>'life-2.jpg',            'badge'=>'','pills'=>['Nutrition']],
  ['n'=>'Après-shampoing liquide',  'c'=>'Soin · Liquide',      'col'=>'Soins & après-shampoings',  'p'=>'16,00','img'=>'citronnier.jpg',        'badge'=>'Nouveauté','pills'=>['Démêlant']],
  ['n'=>'Masque botanique intense', 'c'=>'Soin',                'col'=>'Soins & après-shampoings',  'p'=>'19,00','img'=>'life-1.jpg',            'badge'=>'','pills'=>['Réparateur','Bio']],
  ['n'=>'Coloration Henné Naturel', 'c'=>'Coloration',          'col'=>'Coloration végétale',       'p'=>'24,00','img'=>'presta-coloration.webp','badge'=>'','pills'=>['100% végétal']],
  ['n'=>'Pack coiffant Fragrance',  'c'=>'Coiffants',           'col'=>'Coiffants',                 'p'=>'21,00','img'=>'presta-chignon.webp',   'badge'=>'','pills'=>['Fixation souple']],
];
/* Ordre d'affichage des collections + regroupement */
$collectionsOrder = ['Routines & coffrets','Shampoings','Soins & après-shampoings','Coloration végétale','Coiffants'];
$byCollection = array_fill_keys($collectionsOrder, []);
foreach ($products as $pr) { $byCollection[$pr['col']][] = $pr; }
$filters = [
  'Cuir chevelu'   => ['Sec','Gras','Sensible','Qui démange'],
  'Type de cheveu' => ['Fin','Épais','Bouclé','Abîmé','Colorés'],
  'Besoin'         => ['Volume','Nutrition','Boucles','Anti-chute','Brillance'],
  'Labels'         => ['Bio','Vegan','Fabriqué en France','Format solide'],
];
$jsonld = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => [
    ['@type'=>'ListItem','position'=>1,'name'=>'Accueil','item'=>'https://lepeignevert.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Boutique','item'=>'https://lepeignevert.com/boutique.php'],
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
include 'partials/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <nav class="crumb" aria-label="Fil d'Ariane"><a href="index.php">Accueil</a><span>/</span>Boutique</nav>
    <h1>La boutique végétale</h1>
    <p>Routines, shampoings, soins et colorations formulés avec des plantes, fabriqués en France. Un doute&nbsp;? Lancez le <a href="#diagnostic" style="color:var(--ochre-soft);text-decoration:underline">diagnostic capillaire</a>.</p>
  </div>
</section>

<div class="wrap shop">
  <button class="filter-toggle" type="button" aria-controls="shopFilters" aria-expanded="false">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 6h16M7 12h10M10 18h4" stroke-linecap="round"/></svg>
    Filtrer les produits
  </button>
  <aside class="filters" id="shopFilters" aria-label="Filtres">
    <?php foreach ($filters as $group => $opts): ?>
      <div class="fgroup">
        <h4><?= $group ?></h4>
        <div class="chips">
          <?php foreach ($opts as $o): ?><button class="fchip" type="button"><?= $o ?></button><?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </aside>

  <div class="shop-main">
    <div class="shop-bar">
      <span class="count"><?= count($products) ?> produits · <?= count($collectionsOrder) ?> collections</span>
      <label>Trier :
        <select aria-label="Trier">
          <option>Popularité</option><option>Prix croissant</option><option>Prix décroissant</option><option>Nouveautés</option>
        </select>
      </label>
    </div>

    <?php foreach ($byCollection as $colName => $items): if (!$items) continue; ?>
    <section class="collection" id="col-<?= md5($colName) ?>">
      <div class="collection-head">
        <h2 class="collection-title"><?= $colName ?></h2>
        <span class="collection-count"><?= count($items) ?> produit<?= count($items) > 1 ? 's' : '' ?></span>
      </div>
      <div class="shop-grid">
        <?php foreach ($items as $pr): ?>
        <article class="prod rv">
          <a href="produit.php" class="ph" aria-label="<?= htmlspecialchars($pr['n']) ?>">
            <?php if ($pr['badge']): ?><span class="tag"><?= $pr['badge'] ?></span><?php endif; ?>
            <img src="assets/img/<?= $pr['img'] ?>" alt="<?= htmlspecialchars($pr['n']) ?>" loading="lazy">
          </a>
          <div class="body">
            <div class="cat"><?= $pr['c'] ?></div>
            <h3><a href="produit.php"><?= $pr['n'] ?></a></h3>
            <div class="pill-row"><?php foreach ($pr['pills'] as $pl): ?><span class="pill"><?= $pl ?></span><?php endforeach; ?><span class="pill pill-fr">Fabriqué en France</span></div>
            <div class="buy"><span class="price"><?= $pr['p'] ?> €</span><button class="add" data-add data-name="<?= htmlspecialchars($pr['n']) ?>" data-price="<?= str_replace(',','.',$pr['p']) ?>" data-img="assets/img/<?= $pr['img'] ?>">Ajouter</button></div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endforeach; ?>

    <div id="diagnostic" class="banner-cta rv" style="margin-top:34px">
      <div>
        <h3>Pas sûr·e de votre routine&nbsp;?</h3>
        <p>3 questions suffisent : on compose la routine végétale idéale pour vos cheveux.</p>
      </div>
      <a class="btn btn-primary" href="index.php#boutique">Lancer mon diagnostic</a>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
