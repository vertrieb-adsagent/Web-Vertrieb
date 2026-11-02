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
<section class="qb qb-dark">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Top Service und sehr angenehme Betreuung. Das Team war jederzeit hilfsbereit, freundlich und engagiert. Der ganze Ablauf war unkompliziert und professionell."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/atef-khelil.webp" alt="Atef Khelil" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>A</span></span><span class="v-text"><span class="v-name">Atef Khelil</span><span class="v-role">Inhaber Autohändler · swisscarmarket.ch</span></span></div>
  </div></div>
</section>

<!-- ════════ BEREICHE (Hub-Übersicht) ════════ -->
<style>
.bereiche-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.bereich-card{background:#fff;border:1px solid var(--bone-line);border-radius:18px;padding:40px 32px 36px;display:flex;flex-direction:column;text-decoration:none;color:var(--navy);position:relative;overflow:hidden;transition:transform .3s var(--ease),box-shadow .3s var(--ease),border-color .3s var(--ease)}
.bereich-card:hover{transform:translateY(-5px);box-shadow:0 12px 40px rgba(26,54,93,.12);border-color:rgba(26,54,93,.22)}
.bc-idx{font-family:var(--mono);font-size:12px;letter-spacing:.06em;color:var(--rot);margin-bottom:16px}
.bc-title{font-family:var(--serif);font-weight:400;font-size:1.75rem;letter-spacing:-.01em;margin-bottom:10px}
.bc-desc{font-size:.9375rem;color:var(--muted);line-height:1.6;flex:1}
.bc-arrow{display:inline-flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:50%;border:1px solid var(--bone-line);font-size:18px;color:var(--navy);margin-top:20px;transition:background .25s,color .25s,border-color .25s,transform .25s;align-self:flex-end}
.bereich-card:hover .bc-arrow{background:var(--rot);border-color:var(--rot);color:#fff;transform:translateX(4px)}
@media(max-width:860px){.bereiche-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:540px){.bereiche-grid{grid-template-columns:1fr;gap:16px}.bereich-card{padding:28px 24px 24px}}
</style>
<section class="bereiche" id="bereiche">
  <div class="container">
    <div class="sec-head reveal">
      <span class="eyebrow"><span class="dot"></span>Bereiche</span>
      <div>
        <h2 class="section-title">Alles, was Ihr <em>Wachstum braucht.</em></h2>
        <p class="section-intro" style="margin-top: 28px;">Sechs Bereiche, ein Ziel: messbarer Umsatz. Entdecken Sie unsere Kompetenzen im Detail.</p>
      </div>
    </div>

    <div class="bereiche-grid">
      <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">01</span>
        <h3 class="bc-title">Leistungen</h3>
        <p class="bc-desc">10 Leistungen für digitales Wachstum: von Branding und Google Ads bis Conversion-Optimierung.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/methodik/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">02</span>
        <h3 class="bc-title">Methodik</h3>
        <p class="bc-desc">Sechs datenbasierte Schritte: vom Tracking-Audit bis zur Kundenwert-Maximierung.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/fallstudien/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">03</span>
        <h3 class="bc-title">Fallstudien</h3>
        <p class="bc-desc">13 echte Kundenprojekte mit messbaren Resultaten aus Google Ads, Meta Ads und Leadgenerierung.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/vergleich/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">04</span>
        <h3 class="bc-title">Vergleich</h3>
        <p class="bc-desc">Klarton vs. andere Agentur vs. In-House Team: Spezialisierung, Transparenz und Kosten im Direktvergleich.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">05</span>
        <h3 class="bc-title">FAQ</h3>
        <p class="bc-desc">Antworten auf die häufigsten Fragen zu Kosten, Resultaten, Vertragslaufzeiten und Zusammenarbeit.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="bereich-card reveal">
        <span class="bc-idx">06</span>
        <h3 class="bc-title">Team</h3>
        <p class="bc-desc">Das Senior-Team hinter Klarton: sechs Spezialisten, sechs Domänen, ein gemeinsames Ziel.</p>
        <span class="bc-arrow" aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

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

    <div class="marke-refs">
      <article class="ref reveal">
        <div class="ref-cover"><img src="<?php echo $assets; ?>/clients/yp-projekt.webp" alt="YP Beauty Studio Wädenswil, Redesign von Klarton" loading="lazy"></div>
        <div class="ref-person">
          <img class="ref-ava" src="<?php echo $assets; ?>/people/yp-inhaberin.webp" alt="Yadira Perez, Inhaberin YP Beauty" loading="lazy">
          <span class="ref-meta"><span class="ref-name">Yadira Perez</span><span class="ref-role">Inhaberin · YP Beauty Wädenswil</span></span>
        </div>
        <span class="rk">Zuletzt umgesetzt</span>
        <h5>YP Beauty</h5>
        <p>Ganzheitliches Redesign für den Standort Wädenswil: exklusives Visual Branding aus Gold- und Cremetönen, ein Mobile-First-Erlebnis und automatisierte Buchung via Treatwell.</p>
        <div class="rstats"><span class="rstat"><b>+45%</b><span>Online-Termine</span></span><span class="rstat"><b>Top 3</b><span>Google Ranking</span></span></div>
      </article>
      <article class="ref reveal">
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
  </div>
</section>

<!-- ════════ ZITAT 2 ════════ -->
<section class="qb">
  <div class="container"><div class="qb-inner reveal">
    <div class="stars" aria-label="5 von 5 Sternen">★★★★★</div>
    <blockquote>"Klarton ist für uns ein wichtiger und zuverlässiger Partner, bei welchem der Support schnell und zielorientiert abläuft. Sehr professionell, empfehlenswert."</blockquote>
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/yadira-perez.jpg" alt="Yadira Perez" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>Y</span></span><span class="v-text"><span class="v-name">Yadira Perez</span><span class="v-role">Inhaberin · YP Beauty</span></span></div>
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
<section class="guarantee" id="garantie">
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

<!-- ════════ KUNDENBINDUNG / RETENTION ════════ -->
<section class="retention" id="kundenbindung">
  <div class="ret-bg" data-parallax="0.08" role="img" aria-label="Das Team von Klarton bei der Kaffeepause in Zürich" style="background-image:url('https://klarton.agency/wp-content/uploads/2026/09/Klarton-Team-Kaffe-Pause-scaled.jpeg')"></div>

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
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/jaroslaw-sajzew.webp" alt="Jaroslaw Sajzew" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>J</span></span><span class="v-text"><span class="v-name">Jaroslaw Sajzew</span><span class="v-role">CEO &amp; Founder · YAKWARY S.A.R.L.</span></span></div>
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
    <div class="who"><span class="v-mono"><img src="<?php echo $assets; ?>/people/villafloors.webp" alt="Villafloors" loading="lazy" onerror="this.remove()" onload="this.nextElementSibling.style.display='none'"><span>V</span></span><span class="v-text"><span class="v-name">Das Villafloors Team</span><span class="v-role">villafloors.ch · Bodenbelag Schweiz</span></span></div>
  </div></div>
</section>

<!-- ════════ AGENDA / BOOKING ════════ -->
<section class="agenda" id="kontakt">
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
        <iframe src="https://api.leadconnectorhq.com/widget/bookings/termin-buchung-RMctM" id="termin-buchung-RMctM" title="Kostenloses Erstgespräch buchen" style="width:100%;min-height:660px;border:0;display:block;background:#FAF7F2;" scrolling="no"></iframe>
      </div>
    </div>

    <div class="agenda-form reveal">
      <h3>Lieber schreiben? <em>Schreiben Sie uns.</em></h3>
      <p>Kein passender Termin dabei? Hinterlassen Sie uns eine Nachricht, wir melden uns innerhalb von 24 Stunden.</p>
      <iframe class="ghl-form-embed" src="https://api.leadconnectorhq.com/widget/form/dSYkpPkOObppoENNvbqk" style="width:100%;height:582px;border:none;border-radius:12px;margin-top:24px;background:#fff;" id="inline-dSYkpPkOObppoENNvbqk" data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-activation-type="alwaysActivated" data-deactivation-type="neverDeactivate" data-form-name="Form Klarton" data-height="582" data-layout-iframe-id="inline-dSYkpPkOObppoENNvbqk" data-form-id="dSYkpPkOObppoENNvbqk" title="Form Klarton"></iframe>
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/klarton-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
