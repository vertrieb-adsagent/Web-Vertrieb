<?php $assets = get_stylesheet_directory_uri() . '/assets'; ?>
<!-- Custom Cursor (Desktop, wird per JS aktiviert) -->
<div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>

<!-- ════════ NAV ════════ -->
<nav class="top" id="nav">
  <div class="container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="Klarton Startseite"><img class="brand-logo" src="<?php echo $assets; ?>/logo-header.png" alt="Klarton" width="162" height="30"></a>
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Leistungen</a></li>
      <li><a href="<?php echo esc_url( home_url( '/methodik/' ) ); ?>">Methodik</a></li>
      <li><a href="<?php echo esc_url( home_url( '/vergleich/' ) ); ?>">Vergleich</a></li>
      <li><a href="<?php echo esc_url( home_url( '/fallstudien/' ) ); ?>">Fallstudien</a></li>
      <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Team</a></li>
    </ul>
    <a href="<?php echo esc_url( home_url( '/#kontakt' ) ); ?>" class="nav-cta" data-audit>Audit anfordern</a>
    <button class="nav-burger" id="navBurger" aria-label="Menü öffnen" aria-expanded="false" aria-controls="mobileMenu">
      <span class="nb-label" id="nbLabel">Menü</span>
      <span class="nb-lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>
</nav>

<!-- ════════ MOBILE DRAWER ════════ -->
<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
  <nav aria-label="Mobile Navigation">
    <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>" class="m-link">Leistungen <span class="mi">01</span></a>
    <a href="<?php echo esc_url( home_url( '/methodik/' ) ); ?>" class="m-link">Methodik <span class="mi">02</span></a>
    <a href="<?php echo esc_url( home_url( '/vergleich/' ) ); ?>" class="m-link">Vergleich <span class="mi">03</span></a>
    <a href="<?php echo esc_url( home_url( '/fallstudien/' ) ); ?>" class="m-link">Fallstudien <span class="mi">04</span></a>
    <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="m-link">FAQ <span class="mi">05</span></a>
    <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="m-link">Team <span class="mi">06</span></a>
    <a href="#kontakt" class="btn btn-primary m-cta" data-audit>Audit anfordern <span class="arr">&rarr;</span></a>
  </nav>
  <div class="m-foot">
    <span>Online Marketing Agentur · Zürich</span>
    <a href="mailto:vertrieb@klarton.agency">vertrieb@klarton.agency</a>
    <a href="tel:+41779503962">+41 77 950 39 62</a>
  </div>
</div>

<!-- ════════ AUDIT POPUP (Formular im Modal, vom Header-CTA geoeffnet) ════════ -->
<div class="audit-modal" id="auditModal" role="dialog" aria-modal="true" aria-label="Kostenloses Erstgespräch anfordern" aria-hidden="true">
  <div class="audit-modal-overlay" data-audit-close></div>
  <div class="audit-modal-box">
    <button class="audit-modal-close" type="button" data-audit-close aria-label="Schliessen">&times;</button>
    <aside class="audit-aside">
      <span class="eyebrow on-dark"><span class="dot"></span>Gratis Marketing-Audit</span>
      <h3 class="audit-h">Wo verschenkt Ihr Marketing gerade <em>Umsatz?</em></h3>
      <ul class="audit-points">
        <li><span class="ck">&#10003;</span> Wir decken Ihre grössten Budget-Lecks auf</li>
        <li><span class="ck">&#10003;</span> Konkretes Lead-Potenzial in Ihrer Region</li>
        <li><span class="ck">&#10003;</span> Klare Roadmap, unverbindlich und ohne Verkaufsdruck</li>
      </ul>
      <div class="audit-trust">Kostenlos &middot; unverbindlich &middot; Antwort in 24 Std.</div>
    </aside>
    <div class="audit-form-wrap">
      <iframe src="https://api.leadconnectorhq.com/widget/form/dSYkpPkOObppoENNvbqk" style="width:100%;height:582px;border:none;background:#fff;display:block;" id="popup-dSYkpPkOObppoENNvbqk" data-layout="{'id':'INLINE'}" data-form-name="Form Klarton" data-height="582" data-layout-iframe-id="popup-dSYkpPkOObppoENNvbqk" data-form-id="dSYkpPkOObppoENNvbqk" title="Audit anfordern"></iframe>
    </div>
  </div>
</div>
<script>
/* Auto-Trigger (18 s Delay oder Exit-Intent, einmal pro Sitzung).
   Klick-Handler und Esc werden von klarton.min.js verwaltet. */
(function(){
  var modal = document.getElementById('auditModal');
  if(!modal) return;
  var seen = function(){ try{ return sessionStorage.getItem('klarton_popup'); }catch(e){ return 0; } };
  var mark = function(){ try{ sessionStorage.setItem('klarton_popup','1'); }catch(e){} };
  var autoShow = function(){
    if(seen() || modal.classList.contains('open')) return;
    mark();
    modal.classList.add('open');
    modal.setAttribute('aria-hidden','false');
    document.body.style.overflow='hidden';
  };
  setTimeout(autoShow, 18000);
  document.addEventListener('mouseleave', function(e){ if(e.clientY <= 0) autoShow(); });
})();
</script>
