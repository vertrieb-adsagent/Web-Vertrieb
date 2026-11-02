<?php
/**
 * Vorfuss: der dunkle Abschlussblock vor dem Footer.
 * Liegt per position:sticky unter der Seite und wird beim Scrollen freigelegt.
 *
 * Video: sobald eine Datei in der Mediathek liegt, die URL hier eintragen
 * oder per Filter setzen. Ohne Video zeigt die Karte das Zuercher Bueromotiv
 * mit einer ruhigen Kamerafahrt.
 */
$assets   = get_stylesheet_directory_uri() . '/assets';
$vf_video = apply_filters( 'klarton_vorfuss_video', '' );

$leistungen = array(
	'Branding', 'Rebranding', 'Leadgenerierung', 'Google Ads & SEA', 'Meta Ads',
	'Lokale SEO & GEO', 'LinkedIn Ads B2B', 'Marketing-Automatisierung',
	'CRM & Daten-Infrastruktur', 'Conversion-Optimierung & UX',
);
?>
<section class="vorfuss" aria-labelledby="vorfuss-titel">
  <div class="container">

    <div class="vf-kopf">

      <!-- Karte mit Bewegtbild -->
      <a class="vf-karte" href="<?php echo esc_url( home_url( '/fallstudien/' ) ); ?>">
        <span class="vf-karte-bild">
<?php if ( $vf_video ) : ?>
          <video class="vf-video" autoplay muted loop playsinline preload="metadata"
                 poster="<?php echo esc_url( $assets . '/lounge-900.webp' ); ?>">
            <source src="<?php echo esc_url( $vf_video ); ?>" type="video/mp4">
          </video>
<?php else : ?>
          <img class="vf-standbild" src="<?php echo esc_url( $assets . '/lounge-900.webp' ); ?>"
               srcset="<?php echo esc_url( $assets . '/lounge-600.webp' ); ?> 600w, <?php echo esc_url( $assets . '/lounge-900.webp' ); ?> 900w"
               sizes="(max-width: 860px) 100vw, 300px"
               alt="Das Team von Klarton im Büro in Zürich" loading="lazy" width="900" height="600">
<?php endif; ?>
        </span>
        <span class="vf-karte-tag"><span class="dot" aria-hidden="true"></span>Zürich &amp; DACH</span>
        <span class="vf-karte-fuss">
          <span class="vf-karte-txt">Fallstudien<br>ansehen</span>
          <span class="vf-pfeil" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
          </span>
        </span>
      </a>

      <!-- Titel und Vertrauenspunkte -->
      <div class="vf-mitte">
        <h2 id="vorfuss-titel">Bereit für das Marketing,<br>das Sie <em>verdient haben.</em></h2>
        <ul class="vf-pillen">
          <li><span class="dot" aria-hidden="true"></span>247&nbsp;% Ø ROI-Steigerung</li>
          <li><span class="dot" aria-hidden="true"></span>1'000+ Leads in 2025</li>
          <li><span class="dot" aria-hidden="true"></span>Google &amp; Meta Partner</li>
        </ul>
      </div>

      <!-- Navigation -->
      <nav class="vf-nav" aria-label="Weitere Seiten">
        <ul class="vf-nav-spalte">
          <li><a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Leistungen</a></li>
          <li><a href="<?php echo esc_url( home_url( '/methodik/' ) ); ?>">Methodik</a></li>
          <li><a href="<?php echo esc_url( home_url( '/fallstudien/' ) ); ?>">Fallstudien</a></li>
          <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Team</a></li>
        </ul>
        <ul class="vf-nav-spalte">
          <li><a href="https://www.instagram.com/klarton.agency/" target="_blank" rel="noopener">Instagram <span class="vf-ex" aria-hidden="true">&#8599;</span></a></li>
          <li><a href="https://wa.me/message/7YNJMOAMNJ54P1" target="_blank" rel="noopener">WhatsApp <span class="vf-ex" aria-hidden="true">&#8599;</span></a></li>
          <li><a href="mailto:vertrieb@klarton.agency">E-Mail <span class="vf-ex" aria-hidden="true">&#8599;</span></a></li>
          <li><a href="tel:+41434306084">Anrufen <span class="vf-ex" aria-hidden="true">&#8599;</span></a></li>
        </ul>
      </nav>

    </div>

    <div class="vf-unten">
      <ul class="vf-orte">
        <li><span class="dot" aria-hidden="true"></span>Zürich, Schweiz</li>
        <li><span class="dot" aria-hidden="true"></span>Deutschschweiz &amp; DACH</li>
        <li><span class="dot" aria-hidden="true"></span>Remote in der ganzen Schweiz</li>
      </ul>

      <a class="vf-kreis" href="#kontakt" data-audit aria-label="Kostenloses Erstgespräch anfordern">
        <svg class="vf-kreis-text" viewBox="0 0 120 120" aria-hidden="true">
          <defs><path id="vfKreisPfad" d="M60,60 m-44,0 a44,44 0 1,1 88,0 a44,44 0 1,1 -88,0"></path></defs>
          <text><textPath href="#vfKreisPfad" startOffset="0">Erstgespräch · kostenlos · unverbindlich · </textPath></text>
        </svg>
        <span class="vf-kreis-pfeil" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </span>
      </a>
    </div>

  </div>

  <!-- Laufband mit allen Leistungen -->
  <div class="laufband" aria-hidden="true">
    <div class="lb-reihe">
      <div class="lb-spur">
<?php for ( $i = 0; $i < 2; $i++ ) : ?>
<?php foreach ( $leistungen as $l ) : ?>
        <span class="lb-pille"><span class="lb-punkt"></span><?php echo esc_html( $l ); ?></span>
<?php endforeach; ?>
<?php endfor; ?>
      </div>
    </div>
    <div class="lb-reihe lb-reihe--rueck">
      <div class="lb-spur">
<?php for ( $i = 0; $i < 2; $i++ ) : ?>
<?php foreach ( array_reverse( $leistungen ) as $l ) : ?>
        <span class="lb-pille"><span class="lb-punkt"></span><?php echo esc_html( $l ); ?></span>
<?php endforeach; ?>
<?php endfor; ?>
      </div>
    </div>
  </div>
  <p class="sr-only">Unsere Leistungen: <?php echo esc_html( implode( ', ', $leistungen ) ); ?>.</p>
</section>
