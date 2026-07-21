<?php
$title  = 'Tarifs des prestations | coiffure végétale à Orléans | Le Peigne Vert';
$desc   = 'Tarifs du salon Le Peigne Vert à Orléans : forfaits soins, colorations végétales, coupe, mariage et prestations à la carte (femme, homme, enfant). Tarifs TTC.';
$active = 'tarifs';

/* ---- Forfaits (nom, description, prix, durée) ---- */
$forfaits = [
  'Forfaits soins' => ['ic'=>'leaf','items'=>[
    ['Soin Détox','Shampoing vitalité + massage 10 min + soin + séchage aux doigts','43 €','40 min'],
    ['Soin Volume & Gainant','Shampoing vitalité + massage 10 min + soin + séchage','43 €','40 min'],
    ['Soin Profond','Shampoing vitalité + massage 10 min + soin + séchage','50 €','40 min'],
    ['Cure Anti-chute','Soin + massage — cure de 8 séances de 15 min','102 €','forfait'],
  ]],
  'Forfaits colorations' => ['ic'=>'drop','items'=>[
    ['Coloration végétale','Shampoing + coupe + coloration végétale 1 pause + soin + brushing','71 €','2 h'],
    ['Coloration sans ammoniaque','Shampoing + coupe + couleur + soin + brushing','81 €','1 h 30'],
    ['Effet soleil','Shampoing + coupe + balayage + soin + brushing','81 €','1 h 30'],
    ['Balayage','Shampoing + coupe + mèches traditionnelles + soin + brushing','dès 91 €',''],
  ]],
  'Forfaits coupe' => ['ic'=>'scissors','items'=>[
    ['Cheveux courts','Shampoing vitalité + massage 10 min + coupe + coiffage','43,50 €','40 min'],
    ['Cheveux longs','Shampoing vitalité + massage 10 min + coupe + coiffage','50,50 €','40 min'],
    ['Coupe homme','Shampoing équilibrant + massage 10 min + coupe + séchage','26,50 €','25 min'],
    ['Shampoing brushing — courts','','26 €','30 min'],
    ['Shampoing brushing — mi-longs','','30 €','45 min'],
    ['Shampoing brushing — longs','','35 €','1 h'],
  ]],
  'Forfaits mariage' => ['ic'=>'star','items'=>[
    ['Forfait Mariage','1 essai + le jour J','155 €',''],
    ['Forfait Mariage Sublime','2 essais + 1 essai mise en beauté + le jour J (coiffure & mise en beauté)','235 €',''],
  ]],
];

/* ---- À la carte ---- */
$carte = [
  'Femme' => [
    ['Shampoing','7 €'],['Massage vitalité 10 min','12 €'],['Soin hydratant','14 €'],
    ['Soin détox','27 €'],['Soin anti-chute','17 €'],['Soin profond','27 €'],
    ['Coupe entretien','21 €'],['Coupe transformation','27 €'],['Brushing','19 €'],
    ['Séchage naturel','8 €'],['Supplément coiffage','12 €'],
    ['Coloration traditionnelle (sans ammoniaque)','35 €'],['Coloration dose supplémentaire','13,50 €'],
    ['Coloration duo végétale (2 poses)','45 €'],['Coloration végétale repousse','28 €'],
    ['Coloration végétale (dose sup.)','13,50 €'],
    ['Balayage cheveux courts','45 €'],['Balayage cheveux mi-longs','55 €'],['Balayage cheveux longs','65 €'],
    ['Chignon attache rapide','32 €'],['Chignon sophistiqué','62 €'],['Chignon mariage','92 €'],
    ['Mise en beauté','25 €'],['Pose de vernis','10 €'],
  ],
  'Homme' => [
    ['Shampoing','5,50 €'],['Coiffage','5,50 €'],['Coupe entretien','20 €'],
    ['Soin hydratant','14,50 €'],['Soin détox','27,50 €'],['Soin anti-chute','17,50 €'],['Soin profond','27,50 €'],
    ['Taille de la barbe','12,50 €'],['Séchage naturel','8 €'],
    ['Coloration traditionnelle (sans ammoniaque)','34 €'],['Coloration végétale','23 €'],
    ['Effet soleil, quelques mèches','dès 22,50 €'],
  ],
  'Enfants' => [
    ['Coupe 0 – 2 ans','16 €'],['Coupe 3 – 5 ans','18 €'],
    ['Coupe 6 – 12 ans (garçon)','20 €'],['Coupe 6 – 12 ans (fille) — shampoing + coiffage, 40 min','30 €'],
  ],
];

$icons = [
  'leaf'=>'<path d="M12 3c4 3 7 6 7 11a7 7 0 0 1-14 0c0-5 3-8 7-11Z" stroke-linejoin="round"/>',
  'drop'=>'<path d="M12 3c4 4 7 7 7 11a7 7 0 0 1-14 0c0-4 3-7 7-11Z" stroke-linejoin="round"/>',
  'scissors'=>'<circle cx="6" cy="6" r="2.6"/><circle cx="6" cy="18" r="2.6"/><path d="M8 7.5l12 9M8 16.5l12-9" stroke-linecap="round"/>',
  'star'=>'<path d="M12 4l2.2 4.6L19 9.3l-3.5 3.4.8 4.9L12 15.4 7.7 17.6l.8-4.9L5 9.3l4.8-.7Z" stroke-linejoin="round"/>',
];

$jsonld = json_encode([
  '@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Accueil','item'=>'https://lepeignevert.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Tarifs des prestations','item'=>'https://lepeignevert.com/tarifs.php'],
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include 'partials/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Tarifs</nav>
    <h1>Tarifs des prestations</h1>
    <p>Forfaits et prestations à la carte, tout en végétal. Chaque rendez-vous débute par un diagnostic personnalisé de votre cheveu.</p>
  </div>
</section>

<!-- FORFAITS -->
<section style="padding-bottom:40px">
  <div class="wrap">
    <div class="sec-head rv"><p class="eyebrow">Nos forfaits</p><h2>Des rituels complets, tout compris</h2></div>
    <div class="tarifs-grid">
      <?php foreach ($forfaits as $cat => $data): ?>
      <div class="tcard rv">
        <div class="tcard-head"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><?= $icons[$data['ic']] ?></svg><?= $cat ?></div>
        <div class="tcard-body">
          <?php foreach ($data['items'] as [$nm,$de,$amt,$dur]): ?>
          <div class="trow">
            <div><span class="nm"><?= $nm ?></span><?php if ($de): ?><span class="desc"><?= $de ?></span><?php endif; ?></div>
            <div class="amt"><?= $amt ?><?php if ($dur): ?><small><?= $dur ?></small><?php endif; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- À LA CARTE -->
<section class="presta" style="padding-top:64px;padding-bottom:64px">
  <div class="wrap">
    <div class="sec-head rv"><p class="eyebrow">À la carte</p><h2>Prestation par prestation</h2></div>
    <div class="alacarte">
      <?php foreach ($carte as $grp => $rows): ?>
      <div class="tcard rv">
        <div class="tcard-head"><?= $grp ?></div>
        <div class="tcard-body">
          <?php foreach ($rows as [$nm,$amt]): ?>
          <div class="trow"><span class="nm" style="font-weight:600"><?= $nm ?></span><span class="amt"><?= $amt ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OFFRES -->
<section style="padding-top:64px">
  <div class="wrap">
    <div class="offres-band rv">
      <p class="eyebrow" style="color:var(--ochre-soft)">Bons plans</p>
      <h2 style="font-size:clamp(26px,3.2vw,36px)">Offres spéciales</h2>
      <div class="offres-list">
        <div class="offre"><div class="pct">−10 %</div><h4>Offre Privilège</h4><p>Sur un forfait coupe ou coloration, si votre rendez-vous suivant a lieu sous 5 semaines.</p></div>
        <div class="offre"><div class="pct">−5 %</div><h4>Offre Fidélité</h4><p>Sur un forfait coupe ou coloration, pour un rendez-vous entre 5 et 8 semaines.</p></div>
        <div class="offre"><div class="pct">−20 %</div><h4>Moins de 20 ans</h4><p>Réduction accordée aux jeunes de moins de 20 ans sur présentation d'un justificatif.</p></div>
      </div>
      <p style="color:var(--hero-muted);font-size:13px;margin-top:18px">Les offres ne sont pas cumulables.</p>
    </div>

    <div class="tarifs-note">
      <span><b>Tarifs TTC.</b></span>
      <span>Prix des forfaits basés sur un cheveu court ; supplément possible selon la longueur.</span>
    </div>

    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:30px">
      <a class="btn btn-primary" href="reservation.php">Réserver ma visite</a>
      <a class="btn btn-ghost" href="index.php#visite">Nous contacter</a>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
