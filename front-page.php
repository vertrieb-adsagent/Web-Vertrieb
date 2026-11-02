<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$assets = get_stylesheet_directory_uri() . '/assets';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ════════ INTRO OVERLAY (Rebranding-Bridge) ════════ -->
<div id="klarton-intro" aria-hidden="true">
  <div class="ki-scene">
    <div class="ki-reveal">
      <div class="ki-eq"><span></span><span></span><span></span><span></span><span></span></div>
      <div class="ki-wordmark">Klarton<span class="ki-pt">.</span><span class="ki-ag">agency</span></div>
      <div class="ki-tagline">Gleiches Team. Klarer Ton.</div>
    </div>
    <div class="ki-door ki-top"></div>
    <div class="ki-door ki-bottom"></div>
    <div class="ki-hook"><p>Aus Ads Agent wird <span class="ki-pt">Klarton.</span></p></div>
  </div>
</div>
<script>
(function(){
  var o=document.getElementById('klarton-intro'); if(!o) return;
  if(sessionStorage.getItem('ki')){ o.remove(); return; }
  sessionStorage.setItem('ki','1');
  var reduce=window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  document.body.classList.add('ki-lock');
  setTimeout(function(){
    o.classList.add('ki-done');
    document.body.classList.remove('ki-lock');
    setTimeout(function(){ if(o.parentNode) o.parentNode.removeChild(o); }, 700);
  }, reduce ? 1800 : 4200);
})();
</script>

<?php get_template_part( 'template-parts/klarton-nav' ); ?>

<!-- ════════ HERO ════════ -->
<div class="seite">

<header class="hero">
  <div class="hero-bg" id="heroBg" aria-hidden="true" style="background-image:url('https://klarton.agency/wp-content/uploads/2026/09/Klarton-Agency-Team-scaled.jpeg')"></div>
  <div class="container hero-inner">
    <div class="hero-eyebrow">
      <span class="eyebrow on-dark"><span class="dot"></span>Google, Meta &amp; LinkedIn Ads <span class="count">/ Zürich &amp; Schweiz</span></span>
    </div>
    <h1>
      <span class="line h1-kicker"><span>Werbeagentur Zürich.</span></span>
      <span class="line"><span>Richtig gemacht.</span></span>
      <span class="line"><span>Messbar <em>verkauft.</em></span></span>
    </h1>
    <div class="hero-lower">
      <p class="hero-sub">Google, Meta und LinkedIn Ads für Schweizer Unternehmen, die Kunden statt Klicks wollen.</p>
      <div class="hero-right">
        <div class="eq big" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        <div class="hero-actions">
          <a href="#kontakt" class="btn btn-primary" data-audit>Kostenloses Erstgespräch buchen <span class="arr">&rarr;</span></a>
          <a href="#cases" class="btn btn-ghost">Ergebnisse ansehen</a>
        </div>
        <div class="hero-badges">
          <img class="hero-badge" src="<?php echo $assets; ?>/partners/google-partner.webp" alt="Google Partner Premier 2024" width="222" height="180" loading="lazy" decoding="async">
          <img class="hero-badge" src="<?php echo $assets; ?>/partners/meta-partner.webp" alt="Meta Business Partner" width="339" height="180" loading="lazy" decoding="async">
          <span class="meta-text">Aus Zürich</span>
        </div>
      </div>
    </div>
  </div>
  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Google Partner</span><span>Meta Partner</span><span>LinkedIn Ads</span><span>revDSG-konform</span><span>Server-Side Tracking</span><span>Kunden statt Klicks</span><span>Onboarding in 48 Stunden</span><span>Messbar verkauft</span>
      <span>Google Partner</span><span>Meta Partner</span><span>LinkedIn Ads</span><span>revDSG-konform</span><span>Server-Side Tracking</span><span>Kunden statt Klicks</span><span>Onboarding in 48 Stunden</span><span>Messbar verkauft</span>
    </div>
  </div>
</header>

<!-- ════════ MANIFESTO ════════ -->
<section class="manifesto" style="padding-bottom: 0;">
  <div class="container">
    <div>
      <span class="eyebrow"><span class="dot"></span>Unsere Haltung</span>
      <div class="lead-line"></div>
    </div>
    <blockquote class="reveal">Sie wollen keine Werbung. Sie wollen <b>Wachstum.</b></blockquote>
  </div>
</section>

<!-- ════════ STATS ════════ -->
<section class="stats">
  <div class="container">
    <div class="stats-grid reveal">
      <div class="stat">
        <span class="stat-idx">(01)</span>
        <div class="stat-num"><span class="counter" data-target="247">0</span><span class="u">%</span></div>
        <div class="stat-label">Ø ROI-Steigerung</div>
      </div>
      <div class="stat">
        <span class="stat-idx">(02)</span>
        <div class="stat-num"><span class="counter" data-target="1000" data-sep="1">0</span><span class="u">+</span></div>
        <div class="stat-label">Qualifizierte Leads in 2025</div>
      </div>
      <div class="stat">
        <span class="stat-idx">(03)</span>
        <div class="stat-num"><span class="counter" data-target="500">0</span>K<span class="u"> CHF</span></div>
        <div class="stat-label">Verwaltetes Budget</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ ZITAT 1 ════════ -->
<section class="qb qb-dark sec-hell">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Top Service und sehr angenehme Betreuung. Das Team war jederzeit hilfsbereit, freundlich und engagiert. Der ganze Ablauf war unkompliziert und professionell."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/atef-khelil.webp" alt="Atef Khelil, Inhaber Swiss Carmarket und Kunde von Klarton" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>A</span></span><span class="v-text"><span class="v-name">Atef Khelil</span><span class="v-role">Inhaber Autohändler · swisscarmarket.ch</span></span></div>
  </div></div>
</section>

<!-- ════════ EIN TEAM. EIN WORKFLOW. ════════ -->
<section class="workflow" aria-labelledby="workflow-titel">
  <div class="container">
    <div class="wf-kopfzeile reveal">
      <span class="eyebrow"><span class="dot"></span>So arbeiten wir</span>
      <h2 class="section-title" id="workflow-titel">Ein Team. Ein Workflow. <em>Null Reibung.</em></h2>
    </div>
    <div class="wf-grid">

      <a class="wf-karte wf-team reveal" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">
        <div class="wf-band" aria-hidden="true"><div class="wf-spur">
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/alberto-holguin.webp" alt="Alberto Holguín, Founder und CEO bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Alberto Holguín</strong><span>Founder &amp; CEO</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/lautaro-weis.webp" alt="Lautaro Weis, Funnel-Architektur bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Lautaro Weis</strong><span>Funnel-Architektur</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/jack-troncos.webp" alt="Jack Troncos, UX/UI Design bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Jack Troncos</strong><span>UX/UI Design</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/mike-mueller.webp" alt="Mike Müller, Operations bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Mike Müller</strong><span>Operations</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/alberto-holguin.webp" alt="Alberto Holguín, Founder und CEO bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Alberto Holguín</strong><span>Founder &amp; CEO</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/lautaro-weis.webp" alt="Lautaro Weis, Funnel-Architektur bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Lautaro Weis</strong><span>Funnel-Architektur</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/jack-troncos.webp" alt="Jack Troncos, UX/UI Design bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Jack Troncos</strong><span>UX/UI Design</span></figcaption></figure>
            <figure class="wf-kopf"><img src="<?php echo $assets; ?>/team/mike-mueller.webp" alt="Mike Müller, Operations bei Klarton" loading="lazy" decoding="async" width="200" height="240"><figcaption><strong>Mike Müller</strong><span>Operations</span></figcaption></figure>
        </div></div>
        <div class="wf-text">
          <h3>Feste Gesichter, keine Fluktuation.</h3>
          <p>Dieselben Leute von der Strategie bis zum Reporting. Sie erklären Ihr Geschäft einmal, nicht bei jedem Wechsel neu.</p>
          <span class="wf-link">Team kennenlernen <span class="arr">&rarr;</span></span>
        </div>
      </a>

      <article class="wf-karte wf-uhr reveal">
        <div class="wf-phone">
          <span class="wf-datum" id="wfDatum">Heute</span>
          <span class="wf-zeit" id="wfZeit">--:--</span>
          <ul class="wf-noti">
            <li style="--verzug: 0s"><span class="wf-punkt" aria-hidden="true"></span><span class="wf-ntext"><strong>Neue Anfrage</strong><span>Bodenbelag, 180 m², Bern</span></span></li>
            <li style="--verzug: 2.6s"><span class="wf-punkt" aria-hidden="true"></span><span class="wf-ntext"><strong>Neue Anfrage</strong><span>Kieferorthopädie, Zürich</span></span></li>
            <li style="--verzug: 5.2s"><span class="wf-punkt" aria-hidden="true"></span><span class="wf-ntext"><strong>Termin gebucht</strong><span>Erstgespräch, Donnerstag</span></span></li>
          </ul>
        </div>
        <div class="wf-text">
          <h3>Jede Anfrage landet sofort im System.</h3>
          <p>Formular, Anruf oder WhatsApp: Der Lead ist erfasst, bewertet und zugewiesen, bevor jemand von Hand etwas abtippt.</p>
        </div>
      </article>

      <article class="wf-karte wf-chart reveal">
        <div class="wf-zahl">
          <span class="wf-label">Abgeschlossene Projekte</span>
          <strong>13</strong>
          <div class="wf-balken" aria-hidden="true">
              <span style="--h: 34%; --verzug: 0s"></span>
              <span style="--h: 41%; --verzug: 0.07s"></span>
              <span style="--h: 38%; --verzug: 0.14s"></span>
              <span style="--h: 52%; --verzug: 0.21000000000000002s"></span>
              <span style="--h: 47%; --verzug: 0.28s"></span>
              <span style="--h: 61%; --verzug: 0.35000000000000003s"></span>
              <span style="--h: 55%; --verzug: 0.42000000000000004s"></span>
              <span style="--h: 68%; --verzug: 0.49000000000000005s"></span>
              <span style="--h: 72%; --verzug: 0.56s"></span>
              <span style="--h: 64%; --verzug: 0.6300000000000001s"></span>
              <span style="--h: 79%; --verzug: 0.7000000000000001s"></span>
              <span style="--h: 86%; --verzug: 0.77s"></span>
              <span style="--h: 92%; --verzug: 0.8400000000000001s"></span>
          </div>
        </div>
        <div class="wf-text">
          <h3>Dokumentiert, nicht behauptet.</h3>
          <p>Jedes Projekt mit Namen, Branche und Resultat. Nachlesbar in den Fallstudien, nicht nur auf dieser Seite.</p>
        </div>
      </article>

    </div>
  </div>
  <script>
  (function(){
    var z=document.getElementById('wfZeit'), d=document.getElementById('wfDatum');
    if(!z||!d) return;
    var tage=['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'];
    var monate=['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'];
    function tick(){
      var n=new Date();
      z.textContent=String(n.getHours()).padStart(2,'0')+':'+String(n.getMinutes()).padStart(2,'0');
      d.textContent=tage[n.getDay()]+', '+n.getDate()+'. '+monate[n.getMonth()];
    }
    function planen(){
      tick();
      var n=new Date();
      setTimeout(planen, (60 - n.getSeconds()) * 1000 - n.getMilliseconds());
    }
    planen();
    document.addEventListener('visibilitychange', function(){ if(!document.hidden) tick(); });
  })();
  </script>
</section>

<!-- ════════ LEISTUNGEN (Showcase, dieselbe Sektion wie auf /leistungen/) ════════ -->
<?php get_template_part( 'template-parts/section-leistungen' ); ?>

<!-- ════════ MARKENSYSTEM / DELIVERABLES ════════ -->
<section class="marke" id="markensystem">
  <div class="container">
    <div class="sec-head reveal">
      <span class="eyebrow"><span class="dot"></span>Markensystem <span class="count">· Premium</span></span>
      <div>
        <h2 class="section-title">Was Sie bei <em>Branding erhalten.</em></h2>
        <p class="section-intro" style="margin-top: 28px;">Branding ist bei uns kein blosses Logo, sondern ein vollständiges System. Greifbare Assets, die Ihr Team sofort einsetzen kann, von der Strategie bis zur letzten Vorlage.</p>
      </div>
    </div>

    <div class="marke-grid">
      <article class="del span6 reveal"><div class="dn">01</div><h4>Brand-Strategie</h4><p>Positionierung, Naming, Markenwerte und Tonalität. Das Fundament, auf dem jede weitere Entscheidung aufbaut.</p></article>
      <article class="del span6 reveal"><div class="dn">02</div><h4>Logo-Suite</h4><p>Primär- und Sekundärlogo, Bildmarke, Favicon und alle Varianten für jeden Anwendungsfall.</p></article>
      <article class="del span4 reveal"><div class="dn">03</div><h4>Farbsystem</h4><p>Definierte Palette mit klaren Anwendungsregeln für Web, Print und Social.</p></article>
      <article class="del span4 reveal"><div class="dn">04</div><h4>Typografie</h4><p>Schrift-Hierarchie und Pairing, konsistent über alle Touchpoints hinweg.</p></article>
      <article class="del span4 reveal"><div class="dn">05</div><h4>Brandbook</h4><p>Vollständige Richtlinien in einem Dokument. Niemand im Team muss mehr raten.</p></article>
      <article class="del span8 reveal"><div class="dn">06</div><h4>Templates &amp; Assets</h4><p>Einsatzfertige Vorlagen für Social Media, Landingpages, Präsentationen und Print. Die Marke wird sofort arbeitsfähig.</p></article>
      <article class="del span4 reveal" style="display:flex; flex-direction:column; justify-content:center; align-items:flex-start; gap:18px;">
        <div class="eq" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        <h4 style="margin:0;">Alles in klarem Ton.</h4>
        <a href="#kontakt" class="svc-cta" style="color:var(--rot)">Markenprojekt starten <span class="arr">&rarr;</span></a>
      </article>
    </div>

    <!-- Referenz-Karussell -->
    <div class="marke-refs" style="position:relative;overflow:hidden;">
      <div class="ref-carousel" id="refCarousel" style="display:flex;gap:32px;transition:transform .5s cubic-bezier(.22,1,.36,1);will-change:transform;">
        <article class="ref reveal" style="min-width:100%;flex:0 0 100%;">
          <div class="ref-cover"><img src="<?php echo $assets; ?>/clients/villafloors-projekt.webp" alt="Villafloors Bern, Metallicboden aus einem Projekt von Klarton" loading="lazy" width="880" height="495"></div>
          <div class="ref-person">
            <img class="ref-ava" src="<?php echo $assets; ?>/people/villafloors.webp" alt="Das Villafloors Team" loading="lazy" width="220" height="220">
            <span class="ref-meta"><span class="ref-name">Das Villafloors Team</span><span class="ref-role">Bodenbelag Premium · Bern</span></span>
          </div>
          <span class="rk">Zuletzt umgesetzt</span>
          <h5>Villafloors</h5>
          <p>Relaunch für den Premium-Bodenbelag aus Bern: eine Website, die das Handwerk zeigt, dazu Meta Ads, ein sauberer Funnel und ein CRM, das keine Anfrage mehr liegen lässt.</p>
          <div class="rstats"><span class="rstat"><b>10</b><span>Leads pro Woche</span></span><span class="rstat"><b>Von 0</b><span>in kürzester Zeit</span></span></div>
        </article>
        <article class="ref reveal" style="min-width:100%;flex:0 0 100%;">
          <div class="ref-cover"><img src="<?php echo $assets; ?>/clients/medita-projekt.webp" alt="Medita Studio Zürich, neues Branding und Website von Klarton" loading="lazy" width="880" height="495"></div>
          <div class="ref-person">
            <img class="ref-ava" src="<?php echo $assets; ?>/people/medita-studio.webp" alt="Medita Studio Zürich" loading="lazy" width="220" height="220">
            <span class="ref-meta"><span class="ref-name">Medita Studio</span><span class="ref-role">Körpertherapie · Zürich HB</span></span>
          </div>
          <span class="rk">Zuletzt umgesetzt</span>
          <h5>Medita Studio</h5>
          <p>Neupositionierung mit eigenem Branding: ruhige Bildsprache, klare Sprache und eine Terminbuchung, die rund um die Uhr ohne Rückfrage läuft. Sichtbar gemacht über Google SEO und Meta Ads.</p>
          <div class="rstats"><span class="rstat"><b>15+</b><span>Anfragen pro Woche</span></span><span class="rstat"><b>24/7</b><span>Online-Buchung</span></span></div>
        </article>
        <article class="ref reveal" style="min-width:100%;flex:0 0 100%;">
          <div class="ref-cover"><img src="<?php echo $assets; ?>/clients/yp-projekt.webp" alt="YP Beauty Studio Wädenswil, Redesign von Klarton" loading="lazy"></div>
          <div class="ref-person">
            <img class="ref-ava" src="<?php echo $assets; ?>/people/yp-inhaberin.webp" alt="Yadira Perez, Inhaberin YP Beauty" loading="lazy">
            <span class="ref-meta"><span class="ref-name">Yadira Perez</span><span class="ref-role">Inhaberin · YP Beauty Wädenswil</span></span>
          </div>
          <span class="rk">Zuletzt umgesetzt</span>
          <h5>YP Beauty</h5>
          <p>Komplettes Redesign für den Standort Wädenswil: exklusives Visual Branding aus Gold- und Cremetönen, ein Mobile-First-Erlebnis und automatisierte Buchung via Treatwell.</p>
          <div class="rstats"><span class="rstat"><b>+45%</b><span>Online-Termine</span></span><span class="rstat"><b>Top 3</b><span>Google Ranking</span></span></div>
        </article>
        <article class="ref reveal" style="min-width:100%;flex:0 0 100%;">
          <div class="ref-cover"><img src="<?php echo $assets; ?>/clients/officekiel-projekt.webp" alt="Office Kiel, Relaunch und B2B-Positionierung von Klarton" loading="lazy"></div>
          <div class="ref-person">
            <img class="ref-ava" src="<?php echo $assets; ?>/people/office-kiel.webp" alt="Inna Kiel, Office Kiel" loading="lazy">
            <span class="ref-meta"><span class="ref-name">Inna Kiel</span><span class="ref-role">Office Kiel</span></span>
          </div>
          <span class="rk">Zuletzt umgesetzt</span>
          <h5>Office Kiel</h5>
          <p>Digitale Transformation vom lokalen Anbieter zum Branchenführer: strategischer Relaunch, klare B2B-Positionierung und eine Website, die heute der stärkste Vertriebskanal ist.</p>
          <div class="rstats"><span class="rstat"><b>+150%</b><span>Sichtbarkeit</span></span><span class="rstat"><b>Top 3</b><span>Google Ranking</span></span></div>
        </article>
      </div>
      <div style="display:flex;justify-content:center;align-items:center;gap:16px;margin-top:32px;">
        <button class="ref-prev" aria-label="Vorheriges Projekt" style="width:48px;height:48px;border-radius:50%;border:1px solid var(--bone-line);background:#fff;color:var(--navy);font-size:20px;cursor:pointer;display:inline-flex;align-items:center;justify-content:center;transition:background .25s,color .25s,border-color .25s;">&larr;</button>
        <div class="ref-dots" style="display:flex;gap:8px;">
          <span class="ref-dot active" data-slide="0" style="width:10px;height:10px;border-radius:50%;background:var(--rot);cursor:pointer;transition:background .3s;"></span>
          <span class="ref-dot" data-slide="1" style="width:10px;height:10px;border-radius:50%;background:var(--bone-line);cursor:pointer;transition:background .3s;"></span>
          <span class="ref-dot" data-slide="2" style="width:10px;height:10px;border-radius:50%;background:var(--bone-line);cursor:pointer;transition:background .3s;"></span>
          <span class="ref-dot" data-slide="3" style="width:10px;height:10px;border-radius:50%;background:var(--bone-line);cursor:pointer;transition:background .3s;"></span>
        </div>
        <button class="ref-next" aria-label="Nächstes Projekt" style="width:48px;height:48px;border-radius:50%;border:1px solid var(--bone-line);background:#fff;color:var(--navy);font-size:20px;cursor:pointer;display:inline-flex;align-items:center;justify-content:center;transition:background .25s,color .25s,border-color .25s;">&rarr;</button>
      </div>
    </div>
    <script>
    (function(){
      var track=document.getElementById('refCarousel');
      if(!track) return;
      var slides=track.children, idx=0, total=slides.length;
      var dots=document.querySelectorAll('.ref-dot');
      function go(n){
        idx=((n%total)+total)%total;
        track.style.transform='translateX(-'+idx*100+'%)';
        dots.forEach(function(d,i){d.style.background=i===idx?'var(--rot)':'var(--bone-line)';});
      }
      document.querySelector('.ref-prev').addEventListener('click',function(){go(idx-1);});
      document.querySelector('.ref-next').addEventListener('click',function(){go(idx+1);});
      dots.forEach(function(d){d.addEventListener('click',function(){go(+d.dataset.slide);});});
      var auto=setInterval(function(){go(idx+1);},5000);
      track.closest('.marke-refs').addEventListener('mouseenter',function(){clearInterval(auto);});
      track.closest('.marke-refs').addEventListener('mouseleave',function(){auto=setInterval(function(){go(idx+1);},5000);});
      var sx=0,mx=false;
      track.addEventListener('touchstart',function(e){sx=e.touches[0].clientX;mx=true;},{passive:true});
      track.addEventListener('touchmove',function(e){if(!mx)return;var d=e.touches[0].clientX-sx;if(Math.abs(d)>40){go(d>0?idx-1:idx+1);mx=false;}},{passive:true});
      track.addEventListener('touchend',function(){mx=false;},{passive:true});
    })();
    </script>
  </div>
</section>

<!-- ════════ E-COMMERCE (Teaser zur Unterseite) ════════ -->
<section class="shopteaser" id="ecommerce-teaser" aria-labelledby="shopteaser-titel">
  <div class="container">
    <div class="st-grid">
      <div class="st-text reveal">
        <span class="eyebrow"><span class="dot"></span>E-Commerce</span>
        <h2 class="section-title" id="shopteaser-titel">Wir bauen Ihren Shop. <em>Und führen ihn weiter.</em></h2>
        <p>Shopify, WooCommerce, Shopware oder Magento: Wir richten den Shop ein, verbinden Zahlung, Versand und Lager, und übernehmen danach den Betrieb. Der Produktfeed geht sauber an Google Merchant Center, damit Shopping und Performance Max Ihre Artikel dort zeigen, wo gesucht wird.</p>
        <a href="<?php echo esc_url( home_url( '/ecommerce/' ) ); ?>" class="svc-cta st-cta">E-Commerce im Detail <span class="arr">&rarr;</span></a>
      </div>
      <ul class="st-logos reveal" aria-label="Shop-Plattformen, auf denen Klarton arbeitet">
        <li><img src="<?php echo $assets; ?>/plattformen/shopify.webp" alt="Shopify Onlineshop, von Klarton aufgebaut und betreut" loading="lazy" decoding="async" width="400" height="150"></li>
        <li><img src="<?php echo $assets; ?>/plattformen/woocommerce.webp" alt="WooCommerce Onlineshop für WordPress, von Klarton betreut" loading="lazy" decoding="async" width="400" height="150"></li>
        <li><img src="<?php echo $assets; ?>/plattformen/shopware.webp" alt="Shopware Onlineshop für den DACH-Raum, von Klarton betreut" loading="lazy" decoding="async" width="400" height="150"></li>
        <li><img src="<?php echo $assets; ?>/plattformen/magento.webp" alt="Magento Onlineshop für grosse Sortimente, von Klarton betreut" loading="lazy" decoding="async" width="400" height="150"></li>
        <li><img src="<?php echo $assets; ?>/plattformen/gambio.webp" alt="Gambio Onlineshop, von Klarton übernommen und betreut" loading="lazy" decoding="async" width="400" height="150"></li>
        <li><img src="<?php echo $assets; ?>/plattformen/wix.webp" alt="Wix Onlineshop für kleine Sortimente, von Klarton betreut" loading="lazy" decoding="async" width="400" height="150"></li>
      </ul>
    </div>
  </div>
</section>

<!-- ════════ ZITAT 2 ════════ -->
<section class="qb">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Klarton ist für uns ein wichtiger und zuverlässiger Partner, bei welchem der Support schnell und zielorientiert abläuft. Sehr professionell, empfehlenswert."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/yadira-perez.jpg" alt="Yadira Perez, Inhaberin YP Beauty in Wädenswil" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>Y</span></span><span class="v-text"><span class="v-name">Yadira Perez</span><span class="v-role">Inhaberin · YP Beauty</span></span></div>
  </div></div>
</section>

<!-- ════════ FOUNDER QUOTE ════════ -->
<section class="founder" id="founder">
  <div class="container">
    <div class="founder-photo reveal">
      <img src="<?php echo $assets; ?>/people/founder-alberto.webp?v=135" alt="Alberto Holguín, Founder und CEO von Klarton" loading="lazy">
    </div>
    <div class="founder-body reveal">
      <p class="founder-q"><span class="fq-mark" aria-hidden="true">&ldquo;</span>Bei Klarton bekommt jedes Projekt unsere volle Aufmerksamkeit. Keine Vorlagen, kein &bdquo;gut genug&ldquo;. Nur <b>Fokus, Substanz und Sorgfalt</b>, bis es stimmt.</p>
      <p class="founder-sub">Seit über 8 Jahren baue ich Wachstumssysteme für echte Unternehmen. Gelernt habe ich dabei: Vertrauen, Klarheit und Qualität zählen mehr als Buzzwords.</p>
      <div class="founder-divider"></div>
      <div class="founder-name">Alberto Holguín</div>
      <div class="founder-role">Founder &amp; CEO</div>
    </div>
  </div>
</section>

<!-- ════════ GARANTIE ════════ -->
<section class="guarantee sec-hell" id="garantie">
  <div class="container">
    <div class="g-head reveal">
      <span class="eyebrow on-dark"><span class="dot"></span>Unsere Garantie</span>
      <h2>Kein Risiko. <em>Nur Resultate.</em></h2>
      <p>Wir arbeiten nur mit Kunden, bei denen wir überzeugt sind, Ergebnisse zu liefern. Faire Laufzeiten, volle Transparenz und ein klarer Fokus auf messbaren Umsatz. Sie bleiben, weil es funktioniert.</p>
    </div>
    <div class="g-grid">
      <div class="g-card reveal">
        <div class="gi">01 / Fair</div>
        <h4>Faire Laufzeit</h4>
        <p>Kurze Mindestlaufzeit für eine saubere Lern- und Optimierungsphase, danach jederzeit monatlich kündbar. Keine versteckten Retainer-Fallen.</p>
      </div>
      <div class="g-card reveal">
        <div class="gi">02 / Transparent</div>
        <h4>100% Transparenz</h4>
        <p>Echtzeit-Reporting und revDSG-konformes Server-Side Tracking. Sie sehen jederzeit genau, was mit Ihrem Budget passiert.</p>
      </div>
      <div class="g-card reveal">
        <div class="gi">03 / Fair</div>
        <h4>CPA-Modell verfügbar</h4>
        <p>Bei qualifizierten Projekten zahlen Sie für Resultate, nicht für Versprechen. Wachstum statt fixer Kosten.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════ VERGLEICH (Teaser zur Unterseite) ════════ -->
<section class="vgteaser" aria-labelledby="vgteaser-titel">
  <div class="container">
    <div class="vg-kopf reveal">
      <span class="eyebrow"><span class="dot"></span>Klarton vs. Alternativen</span>
      <h2 class="section-title" id="vgteaser-titel">Agentur, Inhouse <em>oder wir?</em></h2>
      <p>Die ehrliche Gegenüberstellung. Nicht jede Zeile spricht für uns, und genau darum lohnt sich der Blick.</p>
    </div>
    <div class="vg-tabelle reveal">
      <table>
        <caption class="sr-only">Klarton im Vergleich zu einer anderen Agentur und einem eigenen Team</caption>
        <thead><tr><td></td><th scope="col" class="vg-wir">Klarton</th><th scope="col">Andere Agentur</th><th scope="col">In-House</th></tr></thead>
        <tbody>
          <tr><th scope="row">Kein Langzeitvertrag</th><td class="vg-wir" data-spalte="Klarton"><span class="vg-ja" title="ja">&#10003;</span></td><td data-spalte="Andere Agentur"><span class="vg-nein" title="nein">&minus;</span></td><td data-spalte="In-House"><span class="vg-ja" title="ja">&#10003;</span></td></tr>
          <tr><th scope="row">CPA-Modell, Sie zahlen für Resultate</th><td class="vg-wir" data-spalte="Klarton"><span class="vg-ja" title="ja">&#10003;</span></td><td data-spalte="Andere Agentur"><span class="vg-nein" title="nein">&minus;</span></td><td data-spalte="In-House"><span class="vg-nein" title="nein">&minus;</span></td></tr>
          <tr><th scope="row">Zertifiziert bei Google und Meta</th><td class="vg-wir" data-spalte="Klarton"><span class="vg-ja" title="ja">&#10003;</span></td><td data-spalte="Andere Agentur"><span class="vg-teils" title="teilweise">&#176;</span></td><td data-spalte="In-House"><span class="vg-nein" title="nein">&minus;</span></td></tr>
          <tr><th scope="row">Direkter Ansprechpartner statt Hotline</th><td class="vg-wir" data-spalte="Klarton"><span class="vg-ja" title="ja">&#10003;</span></td><td data-spalte="Andere Agentur"><span class="vg-nein" title="nein">&minus;</span></td><td data-spalte="In-House"><span class="vg-ja" title="ja">&#10003;</span></td></tr>
          <tr><th scope="row">Onboarding in 48 Stunden</th><td class="vg-wir" data-spalte="Klarton"><span class="vg-ja" title="ja">&#10003;</span></td><td data-spalte="Andere Agentur"><span class="vg-nein" title="nein">&minus;</span></td><td data-spalte="In-House"><span class="vg-nein" title="nein">&minus;</span></td></tr>
        </tbody>
      </table>
    </div>
    <a href="<?php echo esc_url( home_url( '/vergleich/' ) ); ?>" class="svc-cta vg-cta reveal">Ganzen Vergleich ansehen <span class="arr">&rarr;</span></a>
  </div>
</section>

<!-- ════════ KUNDENBINDUNG / RETENTION ════════ -->
<section class="retention" id="kundenbindung">
  <div class="ret-bg" data-parallax="0.08" role="img" aria-label="Beratungsgespräch bei Klarton in Zürich: gemeinsame Auswertung der Kampagnenzahlen am Laptop"></div>

  <div class="ret-content">
    <span class="eyebrow on-dark reveal"><span class="dot"></span>Kundenbindung</span>
    <h2 class="section-title">Kunden bleiben aus <em>gutem Grund.</em></h2>
    <p class="ret-sub reveal">Echtes Feedback, langfristige Partnerschaften und Resultate, auf die wir stolz sind.</p>

    <div class="ret-points">
      <div class="rp reveal">
        <span class="rp-no">01</span>
        <div><div class="rp-h">Klare Kommunikation</div><div class="rp-d">Ehrliche Einschätzungen statt Marketing-Sprech. Sie wissen jederzeit, woran Sie sind.</div></div>
      </div>
      <div class="rp reveal">
        <span class="rp-no">02</span>
        <div><div class="rp-h">Messbare Resultate</div><div class="rp-d">Jeder investierte Franken ist im Echtzeit-Reporting nachvollziehbar. Keine Blackbox.</div></div>
      </div>
      <div class="rp reveal">
        <span class="rp-no">03</span>
        <div><div class="rp-h">Partnerschaft auf Augenhöhe</div><div class="rp-d">Ein fester Ansprechpartner, der Ihr Geschäft versteht. Keine Hotline, keine Wartezeit.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ ZITAT 3 ════════ -->
<section class="qb qb-bone">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Wenn Sie jemanden suchen, der Ihre Idee in einen leistungsstarken Online-Shop verwandelt, ist Klarton die richtige Agentur. Das Shopify-Know-how und die Fähigkeit, optimierte Shops für den Verkauf zu erstellen, sind herausragend. Absolute Empfehlung."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/jaroslaw-sajzew.webp" alt="Jaroslaw Sajzew, CEO von Yakwary und Kunde von Klarton" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>J</span></span><span class="v-text"><span class="v-name">Jaroslaw Sajzew</span><span class="v-role">CEO &amp; Founder · YAKWARY S.A.R.L.</span></span></div>
  </div></div>
</section>

<!-- ════════ TEAM-BAND (Landscape-Parallax mit Scroll-Fade) ════════ -->
<section class="teamband" aria-label="Das Team von Klarton in Zürich">
  <div class="tb-bg" data-parallax="0.10" data-fade role="img" aria-label="Das Team von Klarton, Werbeagentur Zürich" style="background-image:url('https://klarton.agency/wp-content/uploads/2026/09/Klarton-Team-scaled.jpeg')"></div>
  <div class="tb-inner">
    <span class="eyebrow on-dark reveal"><span class="dot"></span>Menschen statt Versprechen</span>
    <h2 class="section-title reveal">Hinter jeder Zahl steht <em>ein Mensch.</em></h2>
    <p class="tb-sub reveal">Ein eingespieltes Team aus Zürich, das Ihr Wachstum mit der gleichen Sorgfalt behandelt wie das eigene. Persönlich erreichbar, ehrlich im Urteil, verbindlich im Resultat.</p>
  </div>
</section>

<!-- ════════ ZITAT 4 ════════ -->
<section class="qb">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Der Relaunch und die darauffolgenden Meta Ads Kampagnen waren ein voller Erfolg. Von null auf 10 Leads pro Woche in kürzester Zeit, das hat unsere Erwartungen übertroffen."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/villafloors.webp" alt="Das Villafloors Team, Bodenbelag Premium aus Bern" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>V</span></span><span class="v-text"><span class="v-name">Das Villafloors Team</span><span class="v-role">villafloors.ch · Bodenbelag Schweiz</span></span></div>
  </div></div>
</section>

<!-- ════════ AGENDA / BOOKING ════════ -->
<section class="agenda sec-hell" id="kontakt">
  <div class="container">
    <div class="agenda-grid">
      <div class="agenda-copy reveal">
        <span class="eyebrow on-dark"><span class="dot"></span>Ihr nächster Schritt</span>
        <h2 style="margin-top: 24px;">30 Minuten. <em>Klare Antworten.</em> Mehr Umsatz.</h2>
        <p>Wir analysieren Ihr Marketing-Setup und zeigen Ihnen konkret, wo Budget verloren geht und wie Sie es in profitable Abschlüsse verwandeln. Unverbindlich und ohne Verkaufsdruck.</p>
        <ul class="agenda-list">
          <li><span class="ck">&#10003;</span> Aufdeckung der 3 grössten Budget-Lecks in Ihren aktuellen Kampagnen</li>
          <li><span class="ck">&#10003;</span> Exakte Schätzung des ungenutzten Lead-Volumens in Ihrer Region</li>
          <li><span class="ck">&#10003;</span> Glasklare Roadmap für Conversion-Optimierung und messbare Umsatzsteigerung</li>
          <li><span class="ck">&#10003;</span> Verbindliche Rückmeldung innerhalb von 24 Stunden</li>
        </ul>
        <div class="agenda-meta">30 Min · kostenlos · unverbindlich · keine Verpflichtung</div>
      </div>
      <div class="agenda-cal reveal">
                <iframe src="https://api.leadconnectorhq.com/widget/booking/ewsFHEwaztVoA7RMljvL" id="ewsFHEwaztVoA7RMljvL" title="Kostenloses Erstgespräch buchen" style="width:100%;min-height:720px;border:0;display:block;background:transparent;" scrolling="no"></iframe>
      </div>
    </div>


    <div class="kontakt-faq reveal">
      <div class="kf-links">
        <span class="eyebrow"><span class="dot"></span>Kontakt &amp; FAQ</span>
        <span class="kf-bild"><img src="<?php echo $assets; ?>/team-kennenlernen.webp" alt="Das Team von Klarton Agency im Büro in Zürich, Performance Marketing für Schweizer Unternehmen" loading="lazy" decoding="async" width="900" height="506"></span>
        <h3>Lernen wir uns <em>kennen.</em></h3>
        <p>Erzählen Sie uns von Ihrem Vorhaben. Direkter Draht zum Gründer, ehrliche Einschätzung, klarer nächster Schritt. Unverbindlich und kostenlos.</p>
        <a href="#kontakt" class="btn btn-primary" data-audit>Erstgespräch buchen <span class="arr">&rarr;</span></a>
        <a href="#kontakt" class="btn btn-ghost kf-zweit" data-audit>Anfrage senden <span class="arr">&rarr;</span></a>
      </div>
      <div class="kf-rechts">
        <h3 class="kf-titel">Häufig gestellte Fragen</h3>
        <div class="faq-list kf-liste">
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Was macht eine Online Marketing Agentur in Zürich wie Klarton?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Wir planen, schalten und optimieren Ihre Kampagnen auf Google und Meta, bauen die Funnels dahinter und melden zurück, was jeder Franken gebracht hat.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Was kostet eine professionelle Google Ads Agentur in Zürich?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Die Betreuung startet bei CHF 740 im Monat, das Komplettpaket liegt bei CHF 2'250. Dazu kommt Ihr Werbebudget, das zu hundert Prozent bei Google bleibt.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Wie schnell sehe ich erste Resultate?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Erste Anfragen kommen meist in den ersten zwei Wochen. Belastbare Zahlen zur Steuerung haben wir nach vier bis sechs Wochen.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Google Ads oder Meta Ads?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Das hängt davon ab, ob nach Ihnen gesucht wird oder ob Sie Nachfrage erst wecken müssen. Im Erstgespräch sagen wir Ihnen, womit Sie anfangen sollten.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Gibt es lange Vertragslaufzeiten?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Nein. Kurze Mindestlaufzeit für eine saubere Lernphase, danach monatlich kündbar.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-q" aria-expanded="false">Wie viel Aufwand habe ich dabei?<span class="faq-plus" aria-hidden="true"></span></button>
            <div class="faq-a"><div class="faq-a-inner">Rund dreissig Minuten im Monat. Den Rest machen wir, Sie entscheiden nur über Budget und Richtung.</div></div>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="svc-cta kf-alle">Alle Fragen ansehen <span class="arr">&rarr;</span></a>
      </div>
    </div>
  </div>
</section>


</div><!-- /.seite -->

<?php get_template_part( 'template-parts/klarton-vorfuss' ); ?>

<?php get_template_part( 'template-parts/klarton-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
