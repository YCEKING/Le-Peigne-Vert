<?php
/* ---------- Traitement de la demande de réservation ---------- */
$SALON_EMAIL = 'bonjour@lepeignevert.fr'; // TODO: remplacer par l'e-mail réel du salon

$fields = ['prenom','nom','tel','email','prestation','date','moment','client','message','consent'];
$v = array_fill_keys($fields, '');
$errors = [];
$done = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($fields as $k) { $v[$k] = trim((string)($_POST[$k] ?? '')); }
  $honeypot = trim((string)($_POST['website'] ?? '')); // piège anti-bot

  if ($honeypot !== '') {
    $done = true; // bot silencieux : on simule le succès sans rien traiter
  } else {
    if ($v['prenom'] === '')                      $errors['prenom'] = 'Indiquez votre prénom.';
    if ($v['nom'] === '')                         $errors['nom'] = 'Indiquez votre nom.';
    if (!preg_match('/^[0-9 +().\-]{6,20}$/', $v['tel'])) $errors['tel'] = 'Numéro de téléphone invalide.';
    if (!filter_var($v['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Adresse e-mail invalide.';
    if ($v['prestation'] === '')                  $errors['prestation'] = 'Choisissez une prestation.';
    if ($v['date'] === '')                        $errors['date'] = 'Choisissez une date souhaitée.';
    elseif ($v['date'] < date('Y-m-d'))           $errors['date'] = 'La date doit être aujourd’hui ou après.';
    if ($v['consent'] !== 'on')                   $errors['consent'] = 'Merci d’accepter le traitement de vos données.';

    if (!$errors) {
      $body = "Nouvelle demande de réservation — Le Peigne Vert\n\n"
            . "Prénom       : {$v['prenom']}\n"
            . "Nom          : {$v['nom']}\n"
            . "Téléphone    : {$v['tel']}\n"
            . "E-mail       : {$v['email']}\n"
            . "Prestation   : {$v['prestation']}\n"
            . "Date souhaitée: {$v['date']}\n"
            . "Moment       : " . ($v['moment'] ?: 'Peu importe') . "\n"
            . "Déjà client·e: " . ($v['client'] ?: 'Non précisé') . "\n\n"
            . "Message :\n" . ($v['message'] ?: '—') . "\n";
      $subject = 'Réservation — ' . $v['prenom'] . ' ' . $v['nom'] . ' (' . $v['date'] . ')';
      $headers = "From: Le Peigne Vert <no-reply@lepeignevert.com>\r\n"
               . 'Reply-To: ' . $v['email'] . "\r\n"
               . "Content-Type: text/plain; charset=UTF-8\r\n";

      @mail($SALON_EMAIL, $subject, $body, $headers); // Hostinger achemine via son serveur mail

      // Trace hors racine web (dossier data/ protégé)
      $log = date('c') . "\t" . str_replace(["\t","\r","\n"], ' ', implode(' | ', $v)) . "\n";
      @file_put_contents(__DIR__ . '/../data/reservations.log', $log, FILE_APPEND | LOCK_EX);

      $done = true;
    }
  }
}

function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function has($errors,$k){ return isset($errors[$k]) ? ' err-f' : ''; }

$title  = 'Réserver votre visite | salon de coiffure végétal | Le Peigne Vert';
$desc   = 'Réservez votre rendez-vous au salon Le Peigne Vert à Orléans : coupe, coloration végétale, soins. Formulaire de demande de réservation en ligne.';
$active = 'contact';
$prestations = ['Coupe & coiffure','Coloration végétale','Mèches / Balayage / Ombré','Soins & massage',
  'Coupe homme','Coiffure de cérémonie / mariage','Cure anti-chute','Conseil / diagnostic','Autre'];
include 'partials/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <nav class="crumb"><a href="index.php">Accueil</a><span>/</span>Réserver</nav>
    <h1>Réserver votre visite</h1>
    <p>Envoyez-nous votre demande : nous vous recontactons rapidement pour confirmer le créneau qui vous convient.</p>
  </div>
</section>

<div class="wrap rez">
  <?php if ($done): ?>
    <div class="rez-success rv in">
      <div class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 12.5l5 5L20 6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <h2>Demande envoyée, merci&nbsp;!</h2>
      <p>Nous avons bien reçu votre demande de réservation. L'équipe du Peigne Vert vous recontacte très vite pour confirmer votre rendez-vous.</p>
      <p>Un imprévu&nbsp;? Appelez-nous au <b>06 75 71 79 78</b>.</p>
      <div class="actions">
        <a class="btn btn-primary" href="index.php">Retour à l'accueil</a>
        <a class="btn btn-ghost" href="boutique.php">Découvrir la boutique</a>
      </div>
    </div>
  <?php else: ?>
    <form class="form-card rv in" method="post" action="reservation.php#form" id="form" novalidate>
      <h2>Votre demande de rendez-vous</h2>
      <p class="sub">Les champs marqués d'un <span style="color:var(--ochre)">*</span> sont obligatoires.</p>

      <?php if ($errors): ?>
        <div class="form-alert err">Certains champs doivent être corrigés ci-dessous.</div>
      <?php endif; ?>

      <!-- piège anti-bot (ne pas remplir) -->
      <div class="hp" aria-hidden="true"><label>Ne pas remplir<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

      <div class="form-grid">
        <div class="field<?= has($errors,'prenom') ?>">
          <label for="prenom">Prénom <span class="req">*</span></label>
          <input id="prenom" name="prenom" type="text" value="<?= e($v['prenom']) ?>" required>
          <?php if(isset($errors['prenom'])): ?><span class="err"><?= $errors['prenom'] ?></span><?php endif; ?>
        </div>
        <div class="field<?= has($errors,'nom') ?>">
          <label for="nom">Nom <span class="req">*</span></label>
          <input id="nom" name="nom" type="text" value="<?= e($v['nom']) ?>" required>
          <?php if(isset($errors['nom'])): ?><span class="err"><?= $errors['nom'] ?></span><?php endif; ?>
        </div>
        <div class="field<?= has($errors,'tel') ?>">
          <label for="tel">Téléphone <span class="req">*</span></label>
          <input id="tel" name="tel" type="tel" value="<?= e($v['tel']) ?>" placeholder="06 12 34 56 78" required>
          <?php if(isset($errors['tel'])): ?><span class="err"><?= $errors['tel'] ?></span><?php endif; ?>
        </div>
        <div class="field<?= has($errors,'email') ?>">
          <label for="email">E-mail <span class="req">*</span></label>
          <input id="email" name="email" type="email" value="<?= e($v['email']) ?>" placeholder="vous@exemple.fr" required>
          <?php if(isset($errors['email'])): ?><span class="err"><?= $errors['email'] ?></span><?php endif; ?>
        </div>
        <div class="field<?= has($errors,'prestation') ?>">
          <label for="prestation">Prestation souhaitée <span class="req">*</span></label>
          <select id="prestation" name="prestation" required>
            <option value="">— Choisir —</option>
            <?php foreach ($prestations as $p): ?>
              <option value="<?= e($p) ?>"<?= $v['prestation']===$p?' selected':'' ?>><?= e($p) ?></option>
            <?php endforeach; ?>
          </select>
          <?php if(isset($errors['prestation'])): ?><span class="err"><?= $errors['prestation'] ?></span><?php endif; ?>
        </div>
        <div class="field<?= has($errors,'date') ?>">
          <label for="date">Date souhaitée <span class="req">*</span></label>
          <input id="date" name="date" type="date" min="<?= date('Y-m-d') ?>" value="<?= e($v['date']) ?>" required>
          <?php if(isset($errors['date'])): ?><span class="err"><?= $errors['date'] ?></span><?php endif; ?>
        </div>
        <div class="field">
          <label for="moment">Moment de la journée</label>
          <select id="moment" name="moment">
            <?php foreach (['Peu importe','Matin','Midi','Après-midi','Fin de journée'] as $m): ?>
              <option value="<?= e($m) ?>"<?= $v['moment']===$m?' selected':'' ?>><?= e($m) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="field">
          <label>Déjà venu·e au salon ?</label>
          <div class="radio-row">
            <label><input type="radio" name="client" value="Oui"<?= $v['client']==='Oui'?' checked':'' ?>> Oui</label>
            <label><input type="radio" name="client" value="Non"<?= $v['client']==='Non'?' checked':'' ?>> Non</label>
          </div>
        </div>
        <div class="field full">
          <label for="message">Votre message (facultatif)</label>
          <textarea id="message" name="message" placeholder="Longueur de cheveux, effet recherché, contraintes d'horaires…"><?= e($v['message']) ?></textarea>
        </div>
        <div class="field full<?= has($errors,'consent') ?>">
          <label class="consent">
            <input type="checkbox" name="consent" value="on"<?= $v['consent']==='on'?' checked':'' ?> required>
            <span>J'accepte que mes données soient utilisées pour traiter ma demande de réservation, conformément à la <a href="confidentialite.php">politique de confidentialité</a>. <span class="req">*</span></span>
          </label>
          <?php if(isset($errors['consent'])): ?><span class="err"><?= $errors['consent'] ?></span><?php endif; ?>
        </div>
      </div>

      <div class="form-actions">
        <button class="btn btn-primary" type="submit">Envoyer ma demande</button>
      </div>
    </form>
  <?php endif; ?>

  <aside class="rez-aside">
    <div class="aside-instant">
      <h3>Réservation instantanée</h3>
      <p>Vous préférez choisir votre créneau en direct ? Réservez en ligne via notre agenda, 7j/7.</p>
      <a class="btn btn-primary" href="https://booking.wavy.pro/lepeignevert" target="_blank" rel="noopener" style="width:100%;justify-content:center">Ouvrir l'agenda en ligne</a>
    </div>
    <div class="aside-card">
      <h3>Le salon</h3>
      <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11Z" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.4"/></svg><div><b>Adresse</b><span>62 Boulevard de Châteaudun, 45000 Orléans</span></div></div>
      <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M5 5l4 1 1.5 4-2 1.5a11 11 0 0 0 5 5l1.5-2 4 1.5 1 4a2 2 0 0 1-2 2C11 22 3 14 3 6a2 2 0 0 1 2-2Z" stroke-linejoin="round"/></svg><div><b>Téléphone</b><span>06 75 71 79 78</span></div></div>
      <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3.5 2" stroke-linecap="round"/></svg><div><b>Horaires</b><span>Lun–Ven 9h–19h (mer & jeu 20h)<br>Sam 8h30–17h30 · Dim fermé</span></div></div>
    </div>
  </aside>
</div>

<?php include 'partials/footer.php'; ?>
