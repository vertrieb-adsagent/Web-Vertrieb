const reduceMotionGlobal = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ── Nav scroll state ──
  const nav = document.getElementById('nav');
  const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ── (1) Lenis Smooth-Scroll mit Inertia ──
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({ lerp: 0.1, smoothWheel: true, wheelMultiplier: 1 });
    const rafLoop = (time) => { lenis.raf(time); requestAnimationFrame(rafLoop); };
    requestAnimationFrame(rafLoop);
  }
  // Anker-Links sauber scrollen (mit Offset für die fixe Nav)
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href');
      if (!id || id === '#') return;
      if (id === '#kontakt') return; // einheitliches Popup uebernimmt alle Konversions-CTAs
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      if (lenis) lenis.scrollTo(target, { offset: -80 });
      else target.scrollIntoView({ behavior: reduceMotionGlobal ? 'auto' : 'smooth' });
    });
  });

  // ── Hero Parallax: Foto bewegt sich langsamer und blendet ins dunkle Design ──
  const heroBg = document.getElementById('heroBg');
  const heroEl = document.querySelector('.hero');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (heroBg && heroEl && !reduceMotion) {
    let ticking = false;
    const parallax = () => {
      const y = window.scrollY;
      const h = heroEl.offsetHeight || window.innerHeight;
      // Foto driftet langsamer als der Inhalt (echtes Parallax), begrenzt auf den Overflow
      const shift = Math.min(y * 0.4, h * 0.18);
      // Bild bleibt präsent (kokto-Stil); erst im letzten Drittel weiches Ausblenden
      const fade = y < h * 0.6 ? 1 : Math.max(0.12, 1 - (y - h * 0.6) / (h * 0.45));
      heroBg.style.transform = 'translate3d(0,' + shift + 'px,0) scale(1.04)';
      heroBg.style.opacity = fade.toFixed(3);
      ticking = false;
    };
    const requestParallax = () => {
      if (!ticking) { window.requestAnimationFrame(parallax); ticking = true; }
    };
    window.addEventListener('scroll', requestParallax, { passive: true });
    parallax();
  }

  // ── In-Frame Parallax für Landscape-Bilder (data-parallax) ──
  const parEls = document.querySelectorAll('[data-parallax]');
  if (parEls.length && !reduceMotion) {
    let parTick = false;
    const runPar = () => {
      const vh = window.innerHeight;
      parEls.forEach(el => {
        const frame = el.parentElement;
        const r = frame.getBoundingClientRect();
        if (r.bottom < 0 || r.top > vh) return; // nur im Viewport rechnen
        const factor = parseFloat(el.dataset.parallax) || 0.12;
        // -1 (Rahmen unten) .. +1 (Rahmen oben), 0 = mittig
        const progress = ((r.top + r.height / 2) - vh / 2) / (vh / 2 + r.height / 2);
        const shift = -progress * (r.height * factor);
        el.style.transform = 'translate3d(0,' + shift.toFixed(1) + 'px,0)';
      });
      parTick = false;
    };
    window.addEventListener('scroll', () => { if (!parTick) { requestAnimationFrame(runPar); parTick = true; } }, { passive: true });
    window.addEventListener('resize', runPar);
    runPar();
  }

  // ── Scroll-Fade für Bänder (data-fade): läuft auch im reduced-motion Modus ──
  const fadeEls = document.querySelectorAll('[data-fade]');
  if (fadeEls.length) {
    let fTick = false;
    const runFade = () => {
      const vh = window.innerHeight;
      fadeEls.forEach(el => {
        const frame = el.parentElement;
        const r = frame.getBoundingClientRect();
        if (r.bottom < 0 || r.top > vh) return;
        const progress = ((r.top + r.height / 2) - vh / 2) / (vh / 2 + r.height / 2);
        el.style.opacity = (1 - Math.min(1, Math.abs(progress)) * 0.72).toFixed(3);
      });
      fTick = false;
    };
    window.addEventListener('scroll', () => { if (!fTick) { requestAnimationFrame(runFade); fTick = true; } }, { passive: true });
    window.addEventListener('resize', runFade);
    runFade();
  }

  // ── Reveal on scroll ──
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); revealObserver.unobserve(e.target); } });
  }, { threshold: 0.12 });
  // (2) Stagger: gestaffelter Delay für .reveal-Geschwister im selben Container
  document.querySelectorAll('.reveal').forEach(el => {
    if (el.parentElement) {
      const sibs = [...el.parentElement.children].filter(c => c.classList.contains('reveal'));
      if (sibs.length > 1) {
        const i = sibs.indexOf(el);
        el.style.transitionDelay = (Math.min(i, 8) * 0.07).toFixed(2) + 's';
      }
    }
    revealObserver.observe(el);
  });

  // ── Counter animation ──
  const fmt = (n, sep) => sep ? n.toLocaleString('de-CH').replace(/’|,|\./g, "'") : String(n);
  const runCounter = (el) => {
    const target = parseInt(el.dataset.target, 10);
    const sep = el.dataset.sep === '1';
    const dur = 1600; const start = performance.now();
    const tick = (now) => {
      const p = Math.min((now - start) / dur, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = fmt(Math.round(target * eased), sep);
      if (p < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const el = e.target;
        if (reduce) { el.textContent = fmt(parseInt(el.dataset.target, 10), el.dataset.sep === '1'); }
        else runCounter(el);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.6 });
  document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

  // ── FAQ accordion ──
  document.querySelectorAll('.faq-item').forEach(item => {
    const q = item.querySelector('.faq-q');
    const a = item.querySelector('.faq-a');
    q.addEventListener('click', () => {
      const open = item.classList.toggle('open');
      q.setAttribute('aria-expanded', open ? 'true' : 'false');
      a.style.maxHeight = open ? a.scrollHeight + 'px' : '0';
    });
  });

  // ── Services showcase: sync hovered/focused row with left stage ──
  const svcIndex = document.getElementById('svcIndex');
  if (svcIndex) {
    const rows = svcIndex.querySelectorAll('.svc');
    const layers = document.querySelectorAll('.svc-stage .svc-layer');
    const setActive = (i) => {
      rows.forEach((r, n) => r.classList.toggle('active', n === i));
      layers.forEach((l, n) => l.classList.toggle('active', n === i));
    };
    rows.forEach((row, i) => {
      row.addEventListener('mouseenter', () => setActive(i));
      row.addEventListener('focus', () => setActive(i));
    });
  }

  // ── Fallstudien carousel ──
  const track = document.getElementById('casesTrack');
  const prevBtn = document.getElementById('casesPrev');
  const nextBtn = document.getElementById('casesNext');
  const curEl = document.getElementById('caseCur');
  if (track && prevBtn && nextBtn) {
    const cards = track.querySelectorAll('.case');
    const total = cards.length;
    document.getElementById('caseTot').textContent = String(total).padStart(2, '0');
    const step = () => cards[0].getBoundingClientRect().width + 20;
    const update = () => {
      const idx = Math.round(track.scrollLeft / step());
      curEl.textContent = String(Math.min(idx + 1, total)).padStart(2, '0');
      prevBtn.disabled = track.scrollLeft <= 10;
      nextBtn.disabled = track.scrollLeft >= track.scrollWidth - track.clientWidth - 10;
    };
    prevBtn.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
    nextBtn.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
    track.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
    window.addEventListener('resize', update);
    update();
  }

  // ── Mobile Drawer (Hamburger) ──
  const burger = document.getElementById('navBurger');
  const mobileMenu = document.getElementById('mobileMenu');
  if (burger && mobileMenu) {
    const nbLabel = document.getElementById('nbLabel');
    const setOpen = (open) => {
      mobileMenu.classList.toggle('open', open);
      document.body.classList.toggle('menu-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      burger.setAttribute('aria-label', open ? 'Menü schliessen' : 'Menü öffnen');
      mobileMenu.setAttribute('aria-hidden', open ? 'false' : 'true');
      document.body.style.overflow = open ? 'hidden' : '';
      if (nbLabel) nbLabel.textContent = open ? 'Schliessen' : 'Menü';
      if (lenis) { open ? lenis.stop() : lenis.start(); }
      if (open) { const first = mobileMenu.querySelector('a'); if (first) first.focus(); }
    };
    burger.addEventListener('click', () => setOpen(!mobileMenu.classList.contains('open')));
    mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setOpen(false)));
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) { setOpen(false); burger.focus(); }
    });
    // schliesst sich, wenn auf Desktop-Breite zurückgewechselt wird
    window.addEventListener('resize', () => { if (window.innerWidth > 1024 && mobileMenu.classList.contains('open')) setOpen(false); });
  }

  // ── Audit-Popup (Modal mit Formular, vom Header-CTA) ──
  const auditModal = document.getElementById('auditModal');
  if (auditModal) {
    const openAudit = (e) => { if (e) e.preventDefault(); const aif = auditModal.querySelector('iframe[data-src]'); if (aif && !aif.src) aif.src = aif.dataset.src; auditModal.classList.add('open'); auditModal.setAttribute('aria-hidden', 'false'); document.body.style.overflow = 'hidden'; if (lenis) lenis.stop(); };
    const closeAudit = () => { auditModal.classList.remove('open'); auditModal.setAttribute('aria-hidden', 'true'); document.body.style.overflow = ''; if (lenis) lenis.start(); };
    document.querySelectorAll('[data-audit], a[href="#kontakt"]').forEach(el => el.addEventListener('click', openAudit));
    auditModal.querySelectorAll('[data-audit-close]').forEach(el => el.addEventListener('click', closeAudit));
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && auditModal.classList.contains('open')) closeAudit(); });
  }

  // ── Kontaktformular ──
  // TODO: Klarton-Endpoint (Webhook / CRM) eintragen, dann ist das Formular live.
  const FORM_ENDPOINT = "";
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    const cfMsg = document.getElementById('cfMsg');
    const cfBtn = document.getElementById('cfSubmit');
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      cfMsg.className = 'form-msg';
      cfMsg.textContent = '';
      if (!contactForm.checkValidity()) { contactForm.reportValidity(); return; }
      if (!FORM_ENDPOINT) {
        cfMsg.textContent = 'Das Formular wird gerade aufgeschaltet. Bitte buchen Sie solange direkt einen Termin im Kalender oben.';
        cfMsg.classList.add('err');
        return;
      }
      const data = Object.fromEntries(new FormData(contactForm).entries());
      const original = cfBtn.innerHTML;
      cfBtn.disabled = true; cfBtn.textContent = 'Wird gesendet...';
      try {
        const res = await fetch(FORM_ENDPOINT, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) });
        if (!res.ok) throw new Error('Request failed');
        contactForm.reset();
        cfMsg.textContent = '✓ Danke, Ihre Nachricht ist angekommen. Wir melden uns innerhalb von 24 Stunden.';
        cfMsg.classList.add('ok');
      } catch (err) {
        cfMsg.textContent = 'Es gab ein Problem beim Senden. Bitte versuchen Sie es erneut oder buchen Sie direkt einen Termin.';
        cfMsg.classList.add('err');
      } finally {
        cfBtn.disabled = false; cfBtn.innerHTML = original;
      }
    });
  }

  // ── (3) Titel-Rise: Section-Titel steigt aus einer Maske (bleibt bei Reduced Motion aktiv) ──
  {
    const titleObs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); titleObs.unobserve(e.target); } });
    }, { threshold: 0.25 });
    document.querySelectorAll('.section-title').forEach(t => {
      const inner = document.createElement('span');
      inner.className = 'ttl-inner';
      while (t.firstChild) inner.appendChild(t.firstChild);
      t.appendChild(inner);
      t.classList.add('ttl-mask');
      titleObs.observe(t);
    });
  }

  // ── (11) Clip-Reveal für grosse Bilder (Service + Retention) ──
  if (!reduceMotionGlobal) {
    const clipImgs = document.querySelectorAll('.ret-media img, .svc-layer img');
    if (clipImgs.length) {
      const clipObs = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); clipObs.unobserve(e.target); } });
      }, { threshold: 0.12 });
      clipImgs.forEach(img => { img.classList.add('clip-reveal'); clipObs.observe(img); });
    }
  }

  // ── (9) Magnetic Buttons ──
  if (!reduceMotionGlobal && window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.btn-primary').forEach(btn => {
      const strength = 0.25;
      btn.addEventListener('mousemove', (e) => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - (r.left + r.width / 2)) * strength;
        const y = (e.clientY - (r.top + r.height / 2)) * strength;
        btn.style.transform = 'translate(' + x.toFixed(1) + 'px,' + y.toFixed(1) + 'px)';
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
    });
  }

  // ── (12) Custom Cursor (nur Desktop, hover-fähig) ──
  const cursorRing = document.getElementById('cursorRing');
  if (cursorRing && !reduceMotionGlobal && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    let cx = window.innerWidth / 2, cy = window.innerHeight / 2, rx = cx, ry = cy, shown = false;
    window.addEventListener('mousemove', (e) => {
      cx = e.clientX; cy = e.clientY;
      if (!shown) { shown = true; cursorRing.classList.add('active'); }
    }, { passive: true });
    const cursorLoop = () => {
      rx += (cx - rx) * 0.18; ry += (cy - ry) * 0.18;
      cursorRing.style.transform = 'translate(' + rx.toFixed(1) + 'px,' + ry.toFixed(1) + 'px) translate(-50%,-50%)';
      requestAnimationFrame(cursorLoop);
    };
    requestAnimationFrame(cursorLoop);
    const grow = () => cursorRing.classList.add('grow');
    const shrink = () => cursorRing.classList.remove('grow');
    document.querySelectorAll('a, button, .svc, .case, .faq-q, input, textarea').forEach(el => {
      el.addEventListener('mouseenter', grow);
      el.addEventListener('mouseleave', shrink);
    });
    document.addEventListener('mouseleave', () => cursorRing.classList.remove('active'));
    document.addEventListener('mouseenter', () => cursorRing.classList.add('active'));
  }
