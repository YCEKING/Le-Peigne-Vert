<!-- Bandeau de consentement cookies — conforme aux recommandations CNIL
     (refus aussi simple que l'acceptation, choix par finalité, pas de dépôt avant accord) -->
<div class="cc-banner" id="ccBanner" role="dialog" aria-live="polite" aria-label="Gestion des cookies">
  <h3>Nous respectons votre vie privée 🌿</h3>
  <p>Nous utilisons des cookies pour assurer le bon fonctionnement du site et, avec votre accord, pour mesurer l'audience et améliorer votre expérience. Vous pouvez tout accepter, tout refuser, ou choisir. En savoir plus : <a href="cookies.php">politique cookies</a>.</p>
  <div class="cc-actions">
    <button class="btn btn-primary" data-cc="all">Tout accepter</button>
    <button class="btn btn-ghost" data-cc="none">Tout refuser</button>
    <button class="btn-text" data-cc="prefs">Personnaliser</button>
  </div>
</div>

<div class="cc-modal" id="ccModal" role="dialog" aria-modal="true" aria-labelledby="ccTitle">
  <div class="cc-dialog">
    <h3 id="ccTitle">Vos préférences cookies</h3>
    <p>Activez ou désactivez chaque catégorie. Les cookies strictement nécessaires ne peuvent pas être désactivés.</p>

    <div class="cc-cat">
      <div><h4>Strictement nécessaires</h4><p>Indispensables : panier, session, sécurité, mémorisation de votre choix. Toujours actifs.</p></div>
      <button class="cc-switch" role="switch" aria-checked="true" disabled aria-label="Cookies nécessaires (toujours actifs)"></button>
    </div>
    <div class="cc-cat">
      <div><h4>Mesure d'audience</h4><p>Statistiques anonymisées pour comprendre l'usage du site et l'améliorer.</p></div>
      <button class="cc-switch" role="switch" aria-checked="false" data-cat="analytics" aria-label="Cookies de mesure d'audience"></button>
    </div>
    <div class="cc-cat">
      <div><h4>Marketing & réseaux sociaux</h4><p>Contenus personnalisés et partage vers Instagram / Facebook.</p></div>
      <button class="cc-switch" role="switch" aria-checked="false" data-cat="marketing" aria-label="Cookies marketing"></button>
    </div>

    <div class="cc-actions">
      <button class="btn btn-ghost" data-cc="none">Tout refuser</button>
      <button class="btn btn-primary" data-cc="save">Enregistrer mes choix</button>
    </div>
  </div>
</div>

<script>
(function(){
  var KEY='lpv_consent', banner=document.getElementById('ccBanner'), modal=document.getElementById('ccModal');
  function read(){try{return JSON.parse(localStorage.getItem(KEY));}catch(e){return null;}}
  function apply(c){
    // Point d'accroche : ne charger les scripts tiers qu'après consentement.
    if(c && c.analytics){/* TODO: init mesure d'audience (Matomo/GA) */}
    if(c && c.marketing){/* TODO: init pixels marketing */}
    window.dispatchEvent(new CustomEvent('cookie-consent',{detail:c}));
  }
  function save(c){c.date=new Date().toISOString();localStorage.setItem(KEY,JSON.stringify(c));
    banner.classList.remove('show');modal.classList.remove('show');apply(c);}
  function openBanner(){banner.classList.add('show');}
  function openPrefs(){
    var c=read()||{};
    modal.querySelectorAll('.cc-switch[data-cat]').forEach(function(s){
      s.setAttribute('aria-checked', c[s.dataset.cat] ? 'true':'false');});
    modal.classList.add('show');
  }
  window.openCookiePrefs=openPrefs; // réutilisé par le bouton de la page cookies.php
  document.addEventListener('click',function(e){
    var b=e.target.closest('[data-cc]'); if(!b) return;
    var a=b.dataset.cc;
    if(a==='all')  save({necessary:true,analytics:true,marketing:true});
    if(a==='none') save({necessary:true,analytics:false,marketing:false});
    if(a==='prefs')openPrefs();
    if(a==='save'){
      var c={necessary:true};
      modal.querySelectorAll('.cc-switch[data-cat]').forEach(function(s){c[s.dataset.cat]=s.getAttribute('aria-checked')==='true';});
      save(c);
    }
  });
  modal.querySelectorAll('.cc-switch[data-cat]').forEach(function(s){
    s.addEventListener('click',function(){this.setAttribute('aria-checked', this.getAttribute('aria-checked')==='true'?'false':'true');});
  });
  modal.addEventListener('click',function(e){if(e.target===modal)modal.classList.remove('show');});
  // Affichage initial : bandeau seulement si aucun choix mémorisé
  var existing=read();
  if(existing){apply(existing);} else {setTimeout(openBanner,600);}
})();
</script>
