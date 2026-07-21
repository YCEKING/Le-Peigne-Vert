<footer>
  <div class="wrap">
    <div class="foot">
      <div>
        <div class="foot-logo"><img src="assets/img/logo.png" alt="Le Peigne Vert"></div>
        <p class="tag">Salon de coiffure végétal &amp; boutique naturelle. La beauté écoresponsable, à Orléans et chez vous.</p>
        <form class="news" onsubmit="return false" aria-label="Newsletter"><input type="email" placeholder="Votre e-mail" aria-label="E-mail"><button type="submit">OK</button></form>
      </div>
      <div><h4>Horaires d'ouverture</h4>
        <ul class="hours">
          <li><span>Lun – Mar</span><b>9h – 19h</b></li>
          <li><span>Mer – Jeu</span><b>9h – 20h</b></li>
          <li><span>Vendredi</span><b>9h – 19h</b></li>
          <li><span>Samedi</span><b>8h30 – 17h30</b></li>
          <li><span>Dimanche</span><b class="closed">Fermé</b></li>
        </ul>
      </div>
      <div><h4>Le Salon</h4><ul>
        <li><a href="index.php#salon">Notre histoire</a></li>
        <li><a href="index.php#prestations">Prestations</a></li>
        <li><a href="tarifs.php">Tarifs</a></li>
        <li><a href="reservation.php">Réserver</a></li>
        <li><a href="index.php#visite">Nous trouver</a></li>
      </ul></div>
      <div><h4>Boutique</h4><ul>
        <li><a href="boutique.php">Routines &amp; coffrets</a></li>
        <li><a href="boutique.php">Shampoings &amp; soins</a></li>
        <li><a href="boutique.php">Coloration végétale</a></li>
        <li><a href="boutique.php">Diagnostic capillaire</a></li>
      </ul></div>
      <div><h4>Informations légales</h4><ul>
        <li><a href="mentions-legales.php">Mentions légales</a></li>
        <li><a href="cgv.php">CGV</a></li>
        <li><a href="confidentialite.php">Confidentialité</a></li>
        <li><a href="cookies.php">Politique cookies</a></li>
        <li><a href="livraison-retours.php">Livraison &amp; Retours</a></li>
      </ul></div>
    </div>
    <div class="foot-bottom">
      <div>© <?= date('Y') ?> Le Peigne Vert — 62 Boulevard de Châteaudun, 45000 Orléans · 06 75 71 79 78</div>
      <a class="made-by" href="https://lunyce.fr" target="_blank" rel="noopener" aria-label="Site conçu par Lunyce">
        <span>Conçu par</span>
        <svg class="lunyce-mark" viewBox="0 0 1500 1500" role="img" aria-hidden="true">
          <defs><linearGradient id="lunyceGrad" x1="0" y1="1" x2="1" y2="0">
            <stop offset="0" stop-color="#7C5CFF"/><stop offset="1" stop-color="#38D9E0"/>
          </linearGradient></defs>
          <g transform="translate(0,1500) scale(0.1,-0.1)" fill="currentColor" stroke="none">
            <path d="M3880 7500 l0 -6000 1125 0 1125 0 0 6000 0 6000 -1125 0 -1125 0 0 -6000z"/>
            <path fill="url(#lunyceGrad)" d="M7583 6953 c-37 -41 -118 -152 -210 -288 -418 -625 -661 -1367 -690 -2113 l-6 -162 470 0 c399 1 470 3 470 15 0 8 -3 12 -6 11 -3 -2 -5 566 -5 1262 1 697 2 1267 4 1267 1 0 3 8 5 18 4 24 -2 22 -32 -10z"/>
            <path d="M6670 2625 l0 -1125 2065 0 2065 0 0 1125 0 1125 -2065 0 -2065 0 0 -1125z"/>
          </g>
        </svg>
        <b>Lunyce</b>
      </a>
      <div class="socials">
        <a href="https://www.instagram.com/lepeignevert_coiffeur/" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.3"/><circle cx="17" cy="7" r="1"/></svg></a>
        <a href="https://www.facebook.com/lepeignevert" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 8h2V5h-2a3 3 0 0 0-3 3v2H9v3h2v6h3v-6h2l1-3h-3V8a1 1 0 0 1 1-1Z" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
  </div>
</footer>

<script>
  (function(){
    var root=document.documentElement, btn=document.getElementById('theme');
    if(btn){btn.addEventListener('click',function(){
      var cur=root.getAttribute('data-theme')||'light';
      var next=cur==='dark'?'light':'dark';
      root.setAttribute('data-theme',next);
      try{localStorage.setItem('lpv_theme',next);}catch(e){}
    });}
    if('IntersectionObserver' in window){
      var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}});},{threshold:.12});
      document.querySelectorAll('.rv:not(.in)').forEach(function(el){io.observe(el);});
    } else {document.querySelectorAll('.rv').forEach(function(el){el.classList.add('in');});}
    document.querySelectorAll('.chips').forEach(function(group){
      group.querySelectorAll('.chip').forEach(function(c){c.addEventListener('click',function(){
        group.querySelectorAll('.chip').forEach(function(s){s.classList.remove('on');});this.classList.add('on');});});
    });
    document.querySelectorAll('.fchip').forEach(function(c){c.addEventListener('click',function(){this.classList.toggle('on');});});
    document.querySelectorAll('.thumbs').forEach(function(t){
      var main=t.parentNode.querySelector('.main-img img');
      t.querySelectorAll('button').forEach(function(b){b.addEventListener('click',function(){
        t.querySelectorAll('button').forEach(function(x){x.classList.remove('on');});this.classList.add('on');
        if(main){main.src=this.querySelector('img').src;}});});
    });
    document.querySelectorAll('.qty').forEach(function(q){
      var inp=q.querySelector('input');
      q.querySelectorAll('button').forEach(function(b){b.addEventListener('click',function(){
        var v=parseInt(inp.value)||1;v+=(this.dataset.d==='+'?1:-1);if(v<1)v=1;inp.value=v;});});
    });
    // Panier (drawer) : gestion d'articles + bouton flottant
    (function(){
      var KEY='lpv_cart_items';
      var fab=document.getElementById('cartFab');
      var fabCount=fab?fab.querySelector('.cart-fab-count'):null;
      var dots=document.querySelectorAll('.cart .dot');
      var drawer=document.getElementById('cartDrawer');
      var overlay=document.getElementById('cartOverlay');
      var itemsEl=document.getElementById('cartItems');
      var totalEl=document.getElementById('cartTotal');
      var headCount=document.getElementById('cartHeadCount');
      var foot=document.getElementById('cartFoot');
      function read(){try{return JSON.parse(localStorage.getItem(KEY))||[];}catch(e){return [];}}
      function write(a){try{localStorage.setItem(KEY,JSON.stringify(a));}catch(e){}}
      function count(a){return a.reduce(function(s,i){return s+i.qty;},0);}
      function total(a){return a.reduce(function(s,i){return s+i.price*i.qty;},0);}
      function euro(n){return n.toFixed(2).replace('.',',')+' €';}
      function esc(s){return String(s).replace(/[&<>"]/g,function(c){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c];});}
      function badges(){
        var n=count(read());
        dots.forEach(function(d){d.textContent=n;d.style.display=n>0?'':'none';});
        if(fabCount)fabCount.textContent=n;
        if(fab)fab.classList.toggle('show',n>0);
        if(headCount)headCount.textContent=n>0?' · '+n+' article'+(n>1?'s':''):'';
      }
      function renderDrawer(){
        if(!itemsEl)return;
        var a=read();
        if(!a.length){
          itemsEl.innerHTML='<div class="cart-empty"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 7h13l-1.2 9.2a2 2 0 0 1-2 1.8H8.9a2 2 0 0 1-2-1.7L5.5 5.5A1 1 0 0 0 4.5 5H3" stroke-linecap="round" stroke-linejoin="round"/></svg><b>Votre panier est vide</b><span>Découvrez nos routines et soins végétaux.</span><a class="btn btn-primary" href="boutique.php">Voir la boutique</a></div>';
          if(foot)foot.classList.add('hide');return;
        }
        if(foot)foot.classList.remove('hide');
        itemsEl.innerHTML=a.map(function(i){
          return '<div class="cart-item" data-id="'+esc(i.id)+'">'+(i.img?'<img src="'+esc(i.img)+'" alt="">':'')+
            '<div class="ci-body"><div class="ci-top"><span class="ci-name">'+esc(i.name)+'</span>'+
            '<button class="ci-rm" data-rm aria-label="Retirer"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 7h16M9 7V5h6v2M7 7l1 12a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2l1-12"/></svg></button></div>'+
            '<div class="ci-bottom"><span class="ci-qty"><button data-d="-" aria-label="Moins">−</button><span>'+i.qty+'</span><button data-d="+" aria-label="Plus">+</button></span>'+
            '<span class="ci-line">'+euro(i.price*i.qty)+'</span></div></div></div>';
        }).join('');
        if(totalEl)totalEl.textContent=euro(total(a));
      }
      function refresh(){badges();renderDrawer();}
      function openD(){if(!drawer)return;drawer.classList.add('show');overlay.classList.add('show');drawer.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';}
      function closeD(){if(!drawer)return;drawer.classList.remove('show');overlay.classList.remove('show');drawer.setAttribute('aria-hidden','true');document.body.style.overflow='';}
      function toast(msg){var t=document.createElement('div');t.className='cart-toast';t.textContent=msg;document.body.appendChild(t);requestAnimationFrame(function(){t.classList.add('show');});setTimeout(function(){t.classList.remove('show');setTimeout(function(){t.remove();},300);},1600);}
      function addItem(p){
        var a=read();var ex=a.filter(function(i){return i.id===p.id;})[0];
        if(ex)ex.qty++;else a.push({id:p.id,name:p.name,price:p.price,img:p.img,qty:1});
        write(a);refresh();
        if(fab){fab.classList.remove('bump');void fab.offsetWidth;fab.classList.add('bump');}
        openD();
      }
      function setQty(id,d){var a=read();a.forEach(function(i){if(i.id===id)i.qty+=d;});write(a.filter(function(i){return i.qty>0;}));refresh();}
      function removeItem(id){write(read().filter(function(i){return i.id!==id;}));refresh();}
      document.querySelectorAll('[data-add]').forEach(function(b){
        b.addEventListener('click',function(e){e.preventDefault();
          addItem({id:b.dataset.id||b.dataset.name,name:b.dataset.name||'Produit',price:parseFloat(b.dataset.price)||0,img:b.dataset.img||''});
        });
      });
      document.querySelectorAll('.cart, #cartFab').forEach(function(el){el.addEventListener('click',function(e){e.preventDefault();openD();});});
      var cc=document.getElementById('cartClose');if(cc)cc.addEventListener('click',closeD);
      if(overlay)overlay.addEventListener('click',closeD);
      var cont=document.getElementById('cartContinue');if(cont)cont.addEventListener('click',closeD);
      document.addEventListener('keydown',function(e){if(e.key==='Escape')closeD();});
      if(itemsEl)itemsEl.addEventListener('click',function(e){
        var row=e.target.closest('.cart-item');if(!row)return;var id=row.dataset.id;
        if(e.target.closest('[data-rm]'))removeItem(id);
        else{var q=e.target.closest('[data-d]');if(q)setQty(id,q.dataset.d==='+'?1:-1);}
      });
      var chk=document.getElementById('cartCheckout');if(chk)chk.addEventListener('click',function(){toast('Paiement en ligne bientôt disponible');});
      refresh();
    })();

    // Filtres repliables (boutique, mobile)
    var ft=document.querySelector('.filter-toggle');
    if(ft){ft.addEventListener('click',function(){
      var f=document.getElementById('shopFilters');var open=f.classList.toggle('open');
      ft.setAttribute('aria-expanded',open?'true':'false');
    });}
    // Menu latéral (drawer) collections
    var burger=document.getElementById('burger'), drawer=document.getElementById('drawer'),
        ov=document.getElementById('drawerOverlay'), close=document.getElementById('drawerClose');
    function openD(){drawer.classList.add('show');ov.classList.add('show');drawer.setAttribute('aria-hidden','false');
      burger.setAttribute('aria-expanded','true');document.body.style.overflow='hidden';}
    function closeD(){drawer.classList.remove('show');ov.classList.remove('show');drawer.setAttribute('aria-hidden','true');
      burger.setAttribute('aria-expanded','false');document.body.style.overflow='';}
    if(burger){burger.addEventListener('click',openD);close.addEventListener('click',closeD);ov.addEventListener('click',closeD);
      document.addEventListener('keydown',function(e){if(e.key==='Escape')closeD();});}
  })();
</script>

<?php include __DIR__ . '/cookie-consent.php'; ?>
</body>
</html>
