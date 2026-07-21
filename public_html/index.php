<?php
$title = 'Le Peigne Vert | Coiffeur végétal & boutique naturelle · Orléans';
$desc  = 'Salon de coiffure végétal à Orléans : coloration 100% végétale sans ammoniaque, soins bio, coupe sur-mesure. Boutique de routines capillaires naturelles fabriquées en France.';
$active = 'salon';
$jsonld = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'HairSalon',
  '@id' => 'https://lepeignevert.com/#salon',
  'name' => 'Le Peigne Vert',
  'description' => 'Salon de coiffure végétal et boutique de soins naturels à Orléans.',
  'image' => 'https://lepeignevert.com/assets/img/hero-salon.webp',
  'url' => 'https://lepeignevert.com/',
  'telephone' => '+33675717978',
  'priceRange' => '€€',
  'currenciesAccepted' => 'EUR',
  'address' => ['@type'=>'PostalAddress','streetAddress'=>'62 Boulevard de Châteaudun','addressLocality'=>'Orléans','postalCode'=>'45000','addressRegion'=>'Centre-Val de Loire','addressCountry'=>'FR'],
  'geo' => ['@type'=>'GeoCoordinates','latitude'=>47.9027,'longitude'=>1.9086],
  'openingHoursSpecification' => [
    ['@type'=>'OpeningHoursSpecification','dayOfWeek'=>['Monday','Tuesday','Friday'],'opens'=>'09:00','closes'=>'19:00'],
    ['@type'=>'OpeningHoursSpecification','dayOfWeek'=>['Wednesday','Thursday'],'opens'=>'09:00','closes'=>'20:00'],
    ['@type'=>'OpeningHoursSpecification','dayOfWeek'=>'Saturday','opens'=>'08:30','closes'=>'17:30'],
  ],
  'sameAs' => ['https://www.instagram.com/lepeignevert_coiffeur/','https://www.facebook.com/lepeignevert'],
  'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'150'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
include 'partials/header.php';
?>

<section class="hero" style="padding:0">
  <div class="wrap">
    <div class="rv in">
      <p class="eyebrow">Salon de coiffure végétal · Orléans</p>
      <h1>Rendez à vos cheveux<br>leur <em>nature</em> profonde.</h1>
      <p class="lead">Coloration 100&nbsp;% végétale, soins bio et coupes sur-mesure. Une beauté écoresponsable, pensée pour la santé de vos cheveux — au salon comme à la maison.</p>
      <div class="hero-cta">
        <a class="btn btn-primary" href="reservation.php">Réserver ma visite</a>
        <a class="btn btn-onhero" href="#boutique">Découvrir la boutique</a>
      </div>
    </div>
    <div class="hero-photo rv in">
      <img src="assets/img/salon-facade.jpg" alt="La devanture du salon Le Peigne Vert, au cœur d'Orléans">
      <div class="badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" style="width:18px;height:18px;color:var(--ochre-soft);margin-bottom:4px"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11Z" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.4"/></svg>
        <b>Notre salon à Orléans</b><br>62 Bd de Châteaudun · un cocon végétal
      </div>
    </div>
  </div>
  <div class="hero-tags">
    <div class="wrap">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3c4 3 7 6 7 11a7 7 0 0 1-14 0c0-5 3-8 7-11Z" stroke-linejoin="round"/></svg>100&nbsp;% Végétal</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12l5 5L20 6" stroke-linecap="round" stroke-linejoin="round"/></svg>Sans ammoniaque</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-4.4-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.6-7 10-7 10Z" stroke-linejoin="round"/></svg>Cruelty-free</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17M12 3.5c2.4 2.3 3.8 5.3 3.8 8.5S14.4 18.2 12 20.5C9.6 18.2 8.2 15.2 8.2 12S9.6 5.8 12 3.5Z"/></svg>Fabriqué en France</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 4l2.2 4.6L19 9.3l-3.5 3.4.8 4.9L12 15.4 7.7 17.6l.8-4.9L5 9.3l4.8-.7Z" stroke-linejoin="round"/></svg>+150 avis 5 étoiles</span>
    </div>
  </div>
</section>

<section id="salon">
  <div class="wrap intro">
    <div class="intro-media rv">
      <img src="assets/img/life-1.jpg" alt="Soin capillaire végétal au salon Le Peigne Vert" loading="lazy">
      <div class="sig">Marine Duchêne<small>Fondatrice · Maître artisan</small></div>
    </div>
    <div class="rv">
      <p class="eyebrow">Notre philosophie</p>
      <h2>Le végétal, notre signature depuis le premier jour.</h2>
      <p>Chez Le Peigne Vert, un cheveu sublimé est d'abord un cheveu respecté. Nos colorations sont composées de plantes tinctoriales — henné, indigo, calendula — sans ammoniaque ni sels métalliques. Chaque geste accompagne votre transition vers une routine plus naturelle, sans jamais renoncer à l'élégance.</p>
      <div class="stat-row">
        <div class="stat"><b>12 ans</b><span>d'expertise végétale</span></div>
        <div class="stat"><b>0 %</b><span>d'ammoniaque</span></div>
        <div class="stat"><b>4,9/5</b><span>note moyenne clientes</span></div>
      </div>
    </div>
  </div>
</section>

<section id="prestations" class="presta">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Au salon · Orléans</p>
      <h2>Des prestations sur-mesure, tout en douceur.</h2>
      <p>Coupe, couleur, soin — chaque rendez-vous commence par un diagnostic personnalisé de votre cheveu.</p>
    </div>
    <div class="cards">
      <article class="pcard rv"><div class="ph"><img src="assets/img/presta-coloration.webp" alt="Coloration végétale" loading="lazy"></div>
        <div class="body"><h3>Coloration végétale</h3><p>100&nbsp;% plantes ou semi-végétale, sans ammoniaque. Reflets naturels, cheveu renforcé.</p><div class="from">Dès 55 € <span>· diagnostic offert</span></div></div></article>
      <article class="pcard rv"><div class="ph"><img src="assets/img/presta-coupe.webp" alt="Coupe et coiffure" loading="lazy"></div>
        <div class="body"><h3>Coupe & Coiffure</h3><p>Femme, homme et enfant. Cheveux longs ou courts, styles sur-mesure.</p><div class="from">Dès 28 € <span>· sur réservation</span></div></div></article>
      <article class="pcard rv"><div class="ph"><img src="assets/img/presta-chignon.webp" alt="Chignons et coiffures de cérémonie" loading="lazy"></div>
        <div class="body"><h3>Cérémonie & Chignons</h3><p>Chignons, tresses et coiffures pour mariages et soirées.</p><div class="from">Dès 45 € <span>· sur devis</span></div></div></article>
      <article class="pcard rv"><div class="ph"><img src="assets/img/presta-shampoing.webp" alt="Shampoing et soins végétaux" loading="lazy"></div>
        <div class="body"><h3>Shampoing & Soins</h3><p>Rituels et masques botaniques, massage du cuir chevelu.</p><div class="from">Dès 22 € <span>· en complément</span></div></div></article>
      <article class="pcard rv"><div class="ph"><img src="assets/img/life-2.jpg" alt="Balayage et mèches" loading="lazy"></div>
        <div class="body"><h3>Mèches & Balayage</h3><p>Ombré hair et balayage aux éclaircissants doux, respectueux de la fibre.</p><div class="from">Dès 68 € <span>· selon longueur</span></div></div></article>
      <article class="cta-card rv"><h3>Prêt·e pour votre transition capillaire ?</h3><p>Réservez en ligne en moins d'une minute, 7j/7.</p><a class="btn btn-primary" href="reservation.php" style="margin-top:18px;align-self:flex-start">Voir les disponibilités</a></article>
    </div>
  </div>
</section>

<section id="boutique">
  <div class="wrap">
    <div class="diag rv">
      <div>
        <p class="eyebrow" style="color:var(--ochre-soft)">La boutique en ligne</p>
        <h2>Trouvez la routine capillaire faite pour vous.</h2>
        <p>Répondez à trois questions sur votre cuir chevelu et votre cheveu : nous composons instantanément la routine végétale idéale, livrée chez vous.</p>
        <a class="btn btn-primary" href="#" style="margin-top:22px">Lancer mon diagnostic</a>
      </div>
      <div class="quiz">
        <label>Votre cuir chevelu</label>
        <div class="chips"><button class="chip on">Sec</button><button class="chip">Gras</button><button class="chip">Qui démange</button></div>
        <label>Votre cheveu</label>
        <div class="chips"><button class="chip">Fin</button><button class="chip on">Épais</button><button class="chip">Bouclé</button><button class="chip">Abîmé</button></div>
        <a class="btn btn-onhero" href="#" style="width:100%;justify-content:center">Valider →</a>
      </div>
    </div>
  </div>
</section>

<section style="padding-top:24px">
  <div class="wrap">
    <div class="sec-head rv head-row">
      <div style="max-width:520px"><p class="eyebrow">Best-sellers</p><h2>Nos routines & coffrets préférés</h2></div>
      <a class="btn btn-ghost" href="#">Toute la boutique →</a>
    </div>
    <div class="prod-grid">
      <article class="prod rv"><div class="ph"><span class="tag">Best-seller</span><img src="assets/img/coffret-1.webp" alt="Routine Douceur" loading="lazy"></div>
        <div class="body"><div class="cat">Coffret · Routine</div><h3>Routine Douceur</h3><div class="buy"><span class="price">48,00 €</span><button class="add" data-add data-name="Routine Douceur" data-price="48.00" data-img="assets/img/coffret-1.webp">Ajouter</button></div></div></article>
      <article class="prod rv"><div class="ph"><img src="assets/img/coffret-2.webp" alt="Routine Curly" loading="lazy"></div>
        <div class="body"><div class="cat">Coffret · Boucles</div><h3>Routine Curly · Citron</h3><div class="buy"><span class="price">52,00 €</span><button class="add" data-add data-name="Routine Curly · Citron" data-price="52.00" data-img="assets/img/coffret-2.webp">Ajouter</button></div></div></article>
      <article class="prod rv"><div class="ph"><img src="assets/img/life-3.jpg" alt="Routine Volume" loading="lazy"></div>
        <div class="body"><div class="cat">Coffret · Volume</div><h3>Routine Volume</h3><div class="buy"><span class="price">52,00 €</span><button class="add" data-add data-name="Routine Volume" data-price="52.00" data-img="assets/img/life-3.jpg">Ajouter</button></div></div></article>
      <article class="prod rv"><div class="ph"><span class="tag">Nouveauté</span><img src="assets/img/citronnier.jpg" alt="Après-shampoing liquide" loading="lazy"></div>
        <div class="body"><div class="cat">Soin · Liquide</div><h3>Après-shampoing liquide</h3><div class="buy"><span class="price">16,00 €</span><button class="add" data-add data-name="Après-shampoing liquide" data-price="16.00" data-img="assets/img/citronnier.jpg">Ajouter</button></div></div></article>
    </div>
  </div>
</section>

<section class="engage">
  <div class="wrap">
    <div class="sec-head rv center"><p class="eyebrow">Nos engagements</p><h2>Une beauté qui prend soin de vous — et de la planète.</h2></div>
    <div class="eng-grid">
      <div class="eng rv"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3c4 3 7 6 7 11a7 7 0 0 1-14 0c0-5 3-8 7-11Z" stroke-linejoin="round"/></svg><h3>Formules propres</h3><p>Compositions strictes, sans ammoniaque, silicones ni sulfates agressifs.</p></div>
      <div class="eng rv"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17M12 3.5c2.4 2.3 3.8 5.3 3.8 8.5S14.4 18.2 12 20.5"/></svg><h3>Origine France</h3><p>Produits fabriqués en France, en circuit court, chez des artisans partenaires.</p></div>
      <div class="eng rv"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-4.4-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.6-7 10-7 10Z" stroke-linejoin="round"/></svg><h3>Jamais testé sur animaux</h3><p>Une démarche cruelty-free et vegan sur l'ensemble de nos gammes.</p></div>
      <div class="eng rv"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 7h16M7 7l1 12a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2l1-12M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg><h3>Éco-responsable</h3><p>Emballages recyclables, recharges et formats solides pour réduire les déchets.</p></div>
    </div>
  </div>
</section>

<section id="journal">
  <div class="wrap">
    <div class="sec-head rv head-row"><div style="max-width:520px"><p class="eyebrow">Le Journal</p><h2>Conseils, rituels & végétal</h2></div><a class="btn btn-ghost" href="#">Tous les articles →</a></div>
    <div class="posts">
      <article class="post rv"><div class="ph"><img src="assets/img/life-3.jpg" alt="" loading="lazy"></div><div class="body"><div class="cat">Transition</div><h3>Réussir sa transition vers la coloration végétale</h3><p class="meta">6 min de lecture · Coloration</p></div></article>
      <article class="post rv"><div class="ph"><img src="assets/img/life-2.jpg" alt="" loading="lazy"></div><div class="body"><div class="cat">Routine</div><h3>Quelle routine pour des cheveux bouclés au naturel ?</h3><p class="meta">4 min de lecture · Boucles</p></div></article>
      <article class="post rv"><div class="ph"><img src="assets/img/citronnier.jpg" alt="" loading="lazy"></div><div class="body"><div class="cat">Ingrédients</div><h3>Henné, indigo, calendula : le guide des plantes tinctoriales</h3><p class="meta">7 min de lecture · Végétal</p></div></article>
    </div>
  </div>
</section>

<section id="visite" style="padding-top:24px">
  <div class="wrap">
    <div class="visit rv">
      <div class="media"><img src="assets/img/salon-interior.jpg" alt="L'intérieur cosy du salon Le Peigne Vert à Orléans : mur en brique, ambiance végétale" loading="lazy">
        <div class="pin"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11Z" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.4"/></svg>Orléans · Loiret</div>
      </div>
      <div class="info">
        <p class="eyebrow">Venez nous voir</p>
        <h2>Le salon</h2>
        <p style="color:var(--muted);margin:12px 0 22px">Un cadre cosy et décontracté, propice à la détente. On vous accueille avec un café et beaucoup de conseils.</p>
        <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11Z" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.4"/></svg><div><b>Adresse</b><span>62 Boulevard de Châteaudun, 45000 Orléans</span></div></div>
        <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3.5 2" stroke-linecap="round"/></svg><div><b>Horaires</b><span>Lun–Ven 9h–19h (mer & jeu jusqu'à 20h) · Sam 8h30–17h30 · Dim fermé</span></div></div>
        <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M5 5l4 1 1.5 4-2 1.5a11 11 0 0 0 5 5l1.5-2 4 1.5 1 4a2 2 0 0 1-2 2C11 22 3 14 3 6a2 2 0 0 1 2-2Z" stroke-linejoin="round"/></svg><div><b>Contact</b><span>06 75 71 79 78 · bonjour@lepeignevert.fr</span></div></div>
        <a class="btn btn-primary" href="reservation.php" style="margin-top:26px">Réserver ma visite</a>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>