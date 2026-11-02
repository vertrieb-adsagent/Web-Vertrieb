<?php $assets = get_stylesheet_directory_uri() . "/assets"; ?>
<style>
.case.case-w{padding:0;overflow:hidden;display:flex;flex-direction:column;background:#fff;border:1px solid rgba(250,247,242,.18);border-radius:18px;box-shadow:0 2px 10px rgba(26,54,93,.08);transition:box-shadow .3s,transform .3s,border-color .3s}
.case.case-w:hover{transform:translateY(-4px);box-shadow:0 10px 36px rgba(0,0,0,.22);border-color:rgba(250,247,242,.28)}
.case-thumb{position:relative;overflow:hidden;aspect-ratio:16/9;background:#1a2a3e;flex-shrink:0;border-radius:18px 18px 0 0}
.case-thumb img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s cubic-bezier(.25,.46,.45,.94)}
.case-thumb::after{content:'';position:absolute;inset:0;background:linear-gradient(175deg,transparent 55%,rgba(0,0,0,.28) 100%);pointer-events:none;z-index:1}
.case.case-w:hover .case-thumb img{transform:scale(1.07)}
.cth-link{display:block;position:absolute;inset:0;z-index:2}
.cth-label{position:absolute;bottom:10px;left:12px;z-index:3;font-family:var(--mono);font-size:10px;letter-spacing:.06em;text-transform:lowercase;color:rgba(255,255,255,.88);background:rgba(0,0,0,.42);padding:3px 8px;border-radius:4px;backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px)}
.case-body{padding:22px 26px 26px;display:flex;flex-direction:column;flex:1}
.case-body h3{font-family:var(--serif);font-weight:400;font-size:1.45rem;color:var(--bone);letter-spacing:-.01em;margin-bottom:14px}
.case-body dl{flex:1;display:grid;grid-template-columns:auto 1fr;gap:8px 14px}
.case-body dt{font-family:var(--mono);font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:var(--muted-light)}
.case-body dd{font-size:.88rem;color:var(--bone);text-align:right}
.case-body dd.res{color:var(--rot);font-weight:600}
.case-ext{display:inline-flex;align-items:center;gap:7px;margin-top:18px;padding:9px 16px;border:1px solid var(--line-dark);border-radius:8px;font-family:var(--mono);font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:var(--bone);text-decoration:none;transition:background .22s,border-color .22s,gap .22s;align-self:flex-start;line-height:1}
.case-ext:hover{background:rgba(250,247,242,.08);border-color:var(--bone);gap:10px}
.case-ext svg{width:11px;height:11px;flex-shrink:0}
@media(max-width:760px){.case.case-w{flex:0 0 82vw}.case-body{padding:18px 20px 22px}}
</style>
<section class="cases sec-dark" id="fallstudien">
  <div class="container">
    <div class="sec-head reveal">
      <span class="eyebrow on-dark"><span class="dot"></span>Fallstudien <span class="count">(13)</span></span>
      <div>
        <h2 class="section-title">Resultate, die <em>klar messbar</em> sind.</h2>
        <p class="section-intro" style="margin-top: 28px;">Echte Schweizer Unternehmen, echte Zahlen. Jede Kampagne mit datenbasiertem Setup und nachvollziehbarem ROI. Wählen Sie eine Fallstudie für die Details.</p>
      </div>
    </div>

    <div class="cases-carousel reveal">
      <div class="cases-track" id="casesTrack">

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://villafloors.ch/'); ?>?w=760" alt="Villafloors Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://villafloors.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Villafloors Webseite öffnen"></a>
            <span class="cth-label">villafloors.ch</span>
          </div>
          <div class="case-body">
            <h3>Villafloors</h3>
            <dl>
              <dt>Branche</dt><dd>Bodenbelag Premium</dd>
              <dt>Standort</dt><dd>Bern, CH</dd>
              <dt>Leistungen</dt><dd>Meta Ads · Funnel · CRM</dd>
              <dt>Resultat</dt><dd class="res">10 Leads pro Woche</dd>
            </dl>
            <a href="https://villafloors.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://www.vitalneurocenter.ch/'); ?>?w=760" alt="Vital Neurocenter Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://www.vitalneurocenter.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Vital Neurocenter Webseite öffnen"></a>
            <span class="cth-label">vitalneurocenter.ch</span>
          </div>
          <div class="case-body">
            <h3>Vital Neurocenter</h3>
            <dl>
              <dt>Branche</dt><dd>Neurologie · Medizin</dd>
              <dt>Standort</dt><dd>Zürich Bellevue</dd>
              <dt>Leistungen</dt><dd>Google Ads · SEO · GMB</dd>
              <dt>Resultat</dt><dd class="res">High-Ticket Patienten</dd>
            </dl>
            <a href="https://www.vitalneurocenter.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://dacostarenovation.ch/'); ?>?w=760" alt="Da Costa Renovation Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://dacostarenovation.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Da Costa Renovation Webseite öffnen"></a>
            <span class="cth-label">dacostarenovation.ch</span>
          </div>
          <div class="case-body">
            <h3>Da Costa Renovation</h3>
            <dl>
              <dt>Branche</dt><dd>Renovation · Umbau</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Website · Google Ads · Local SEO</dd>
              <dt>Resultat</dt><dd class="res">Neue Auftragsanfragen</dd>
            </dl>
            <a href="https://dacostarenovation.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://www.swisscarmarket.ch/'); ?>?w=760" alt="Swiss Carmarket Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://www.swisscarmarket.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Swiss Carmarket Webseite öffnen"></a>
            <span class="cth-label">swisscarmarket.ch</span>
          </div>
          <div class="case-body">
            <h3>Swiss Carmarket</h3>
            <dl>
              <dt>Branche</dt><dd>Autohandel</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Meta Ads · Google Ads · CPA</dd>
              <dt>Resultat</dt><dd class="res">Verkaufssteigerung</dd>
            </dl>
            <a href="https://www.swisscarmarket.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://ypbeauty.ch/'); ?>?w=760" alt="YP Beauty Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://ypbeauty.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="YP Beauty Webseite öffnen"></a>
            <span class="cth-label">ypbeauty.ch</span>
          </div>
          <div class="case-body">
            <h3>YP Beauty</h3>
            <dl>
              <dt>Branche</dt><dd>Beauty Studio</dd>
              <dt>Standort</dt><dd>Wädenswil</dd>
              <dt>Leistungen</dt><dd>Website · Treatwell · Local SEO</dd>
              <dt>Resultat</dt><dd class="res">Lokale Marktdominanz</dd>
            </dl>
            <a href="https://ypbeauty.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://venicemed.ch/'); ?>?w=760" alt="Venice Med Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://venicemed.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Venice Med Webseite öffnen"></a>
            <span class="cth-label">venicemed.ch</span>
          </div>
          <div class="case-body">
            <h3>Venice Med</h3>
            <dl>
              <dt>Branche</dt><dd>Ästhetische Medizin</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Meta Ads · Funnel · CRM</dd>
              <dt>Resultat</dt><dd class="res">Premium Patienten</dd>
            </dl>
            <a href="https://venicemed.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://beautyfacelift.ch/'); ?>?w=760" alt="Beauty Face Lift Zürich Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://beautyfacelift.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Beauty Face Lift Zürich Webseite öffnen"></a>
            <span class="cth-label">beautyfacelift.ch</span>
          </div>
          <div class="case-body">
            <h3>Beauty Face Lift Zürich</h3>
            <dl>
              <dt>Branche</dt><dd>Ästhetik &amp; Beauty</dd>
              <dt>Standort</dt><dd>Zürich</dd>
              <dt>Leistungen</dt><dd>Website · Meta Ads · Local SEO</dd>
              <dt>Resultat</dt><dd class="res">Konstante Buchungen</dd>
            </dl>
            <a href="https://beautyfacelift.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://yakwary.com/de-ch'); ?>?w=760" alt="Yakwary Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://yakwary.com/de-ch" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Yakwary Webseite öffnen"></a>
            <span class="cth-label">yakwary.com</span>
          </div>
          <div class="case-body">
            <h3>Yakwary</h3>
            <dl>
              <dt>Branche</dt><dd>E-Commerce</dd>
              <dt>Standort</dt><dd>International</dd>
              <dt>Leistungen</dt><dd>Shopify · Google Shopping · Ads</dd>
              <dt>Resultat</dt><dd class="res">Shop-Launch erfolgreich</dd>
            </dl>
            <a href="https://yakwary.com/de-ch" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://bergumzuege.ch/'); ?>?w=760" alt="Berg Umzüge Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://bergumzuege.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Berg Umzüge Webseite öffnen"></a>
            <span class="cth-label">bergumzuege.ch</span>
          </div>
          <div class="case-body">
            <h3>Berg Umzüge</h3>
            <dl>
              <dt>Branche</dt><dd>Umzüge · Logistik</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Google Ads · CRO · Lead-Management</dd>
              <dt>Resultat</dt><dd class="res">15 Anfragen pro Woche</dd>
            </dl>
            <a href="https://bergumzuege.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://www.loyalkosmetik.ch/'); ?>?w=760" alt="Loyal Kosmetik Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://www.loyalkosmetik.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Loyal Kosmetik Webseite öffnen"></a>
            <span class="cth-label">loyalkosmetik.ch</span>
          </div>
          <div class="case-body">
            <h3>Loyal Kosmetik</h3>
            <dl>
              <dt>Branche</dt><dd>Kosmetik · Beauty</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Social Media · Branding · Reputation</dd>
              <dt>Resultat</dt><dd class="res">Erstklassige Bewertung</dd>
            </dl>
            <a href="https://www.loyalkosmetik.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://www.maatstudiopilates.com/'); ?>?w=760" alt="MAAT Pilates Studio Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://www.maatstudiopilates.com/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="MAAT Pilates Studio Webseite öffnen"></a>
            <span class="cth-label">maatstudiopilates.com</span>
          </div>
          <div class="case-body">
            <h3>MAAT Pilates Studio</h3>
            <dl>
              <dt>Branche</dt><dd>Pilates · Sport &amp; Wellness</dd>
              <dt>Standort</dt><dd>Zürich</dd>
              <dt>Leistungen</dt><dd>Meta Ads · Creative-Strategie · Local Lead-Gen</dd>
              <dt>Resultat</dt><dd class="res">Kursauslastung gesichert</dd>
            </dl>
            <a href="https://www.maatstudiopilates.com/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://www.zentralumzug.ch/'); ?>?w=760" alt="Zentral Umzug Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://www.zentralumzug.ch/" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Zentral Umzug Webseite öffnen"></a>
            <span class="cth-label">zentralumzug.ch</span>
          </div>
          <div class="case-body">
            <h3>Zentral Umzug</h3>
            <dl>
              <dt>Branche</dt><dd>Umzüge · Logistik</dd>
              <dt>Standort</dt><dd>Zürich</dd>
              <dt>Leistungen</dt><dd>Google Ads · Conversion-Optimierung · Selling Forms</dd>
              <dt>Resultat</dt><dd class="res">Konstanter Lead-Strom</dd>
            </dl>
            <a href="https://www.zentralumzug.ch/" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

        <article class="case case-w">
          <div class="case-thumb">
            <img src="https://s.wordpress.com/mshots/v1/<?php echo rawurlencode('https://studio7.ch/index.html'); ?>?w=760" alt="Studio 7 Website Vorschau" loading="lazy" width="760" height="428">
            <a href="https://studio7.ch/index.html" target="_blank" rel="noopener noreferrer" class="cth-link" aria-label="Studio 7 Webseite öffnen"></a>
            <span class="cth-label">studio7.ch</span>
          </div>
          <div class="case-body">
            <h3>Studio 7</h3>
            <dl>
              <dt>Branche</dt><dd>Kreativstudio · Design</dd>
              <dt>Standort</dt><dd>Schweiz</dd>
              <dt>Leistungen</dt><dd>Website Redesign · Local SEO · Google Ads</dd>
              <dt>Resultat</dt><dd class="res">Online-Sichtbarkeit vervielfacht</dd>
            </dl>
            <a href="https://studio7.ch/index.html" target="_blank" rel="noopener noreferrer" class="case-ext">Webseite besuchen <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </article>

      </div>

      <div class="carousel-controls">
        <div class="car-progress"><b id="caseCur">01</b> / <span id="caseTot">13</span></div>
        <div class="car-buttons">
          <button class="car-btn" id="casesPrev" aria-label="Vorherige Fallstudie">&larr;</button>
          <button class="car-btn" id="casesNext" aria-label="Nächste Fallstudie">&rarr;</button>
        </div>
      </div>
    </div>
  </div>
</section>
