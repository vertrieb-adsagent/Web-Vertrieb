<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'style', 'script', 'navigation-widgets' ) );
} );

// Rechtsseiten sicherstellen (prueft bei jeder Aktivierung, ob alle drei existieren).
add_action( 'init', function () {
	// Pruefe ob Seiten wirklich existieren, nicht nur die Option
	$pages = array(
		'datenschutz' => 'Datenschutz',
		'impressum'   => 'Impressum',
		'agb'         => 'AGB',
	);
	$all_ok = true;
	foreach ( $pages as $slug => $title ) {
		if ( ! get_page_by_path( $slug ) ) {
			$all_ok = false;
			wp_insert_post( array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			) );
		}
	}
	if ( $all_ok ) {
		// Setze Option nur wenn alle Seiten vorhanden sind (1h Cache)
		set_transient( 'klarton_legal_ok', 1, HOUR_IN_SECONDS );
	}
} );

// Sektionsseiten sicherstellen (Leistungen, Methodik, etc. als eigene Seiten).
add_action( 'init', function () {
	$sections = array(
		'leistungen'  => 'Leistungen',
		'methodik'    => 'Methodik',
		'vergleich'   => 'Vergleich',
		'fallstudien' => 'Fallstudien',
		'faq'         => 'FAQ',
		'team'        => 'Team',
	);
	foreach ( $sections as $slug => $title ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			wp_insert_post( array(
				'post_title'    => $title,
				'post_name'     => $slug,
				'post_status'   => 'publish',
				'post_type'     => 'page',
				'post_content'  => '',
				'page_template' => 'template-section.php',
			) );
		} elseif ( get_page_template_slug( $page->ID ) !== 'template-section.php' ) {
			update_post_meta( $page->ID, '_wp_page_template', 'template-section.php' );
		}
	}
} );

// Google Search Console: Bestaetigungsdatei im Root ausliefern (ohne FTP-Zugriff).
// Google ruft https://klarton.agency/google5b5c73b8ed70311b.html auf; da die Datei
// physisch nicht existiert, leitet WordPress die Anfrage hierher weiter.
add_action( 'init', function () {
	$datei = 'google5b5c73b8ed70311b.html';
	$pfad  = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	if ( $datei !== $pfad ) {
		return;
	}
	if ( ! headers_sent() ) {
		status_header( 200 );
		nocache_headers();
		header( 'Content-Type: text/html; charset=UTF-8' );
		header( 'X-Robots-Tag: noindex' );
	}
	echo 'google-site-verification: ' . $datei;
	exit;
}, 0 );

// 404-Handler: alte URLs (z.B. /kontakt/, /leistungen/) per 301 auf Startseite
add_action( 'template_redirect', function () {
	if ( ! is_404() || is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		return;
	}
	$path = trim( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ), '/' );
	// Keine Dateien weiterleiten (fehlende Bilder, JS, CSS usw.)
	if ( pathinfo( $path, PATHINFO_EXTENSION ) ) {
		return;
	}
	wp_redirect( home_url( '/' ), 301 );
	exit;
} );

// Rechtsseiten aus Rank Math-Sitemap ausschliessen (noindex reicht nicht immer)
add_filter( 'rank_math/sitemap/entry', function ( $url, $object_type, $object ) {
	if ( 'post' === $object_type && ! empty( $object->post_name ) ) {
		if ( in_array( $object->post_name, array( 'datenschutz', 'impressum', 'agb' ), true ) ) {
			return false;
		}
	}
	return $url;
}, 10, 3 );

add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_style(
		'klarton-fonts',
		'https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Open+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'klarton',
		get_stylesheet_directory_uri() . '/assets/klarton.min.css',
		array(),
		'1.0.36'
	);

	// Einfache Seiten (Rechtstexte via page.php) brauchen kein Lenis/klarton.js/Formular-Script.
	$einfache_seite = is_page() && ! is_page_template() && ! is_front_page();

	if ( ! $einfache_seite ) {
		// Lenis (smooth scroll) cargado como dependencia, asi klarton.js lo encuentra como global.
		wp_enqueue_script(
			'lenis',
			'https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js',
			array(),
			'1.1.14',
			true
		);

		// GSAP + ScrollTrigger para animaciones de las Fallstudien-Cards
		wp_enqueue_script(
			'gsap',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
			array(),
			'3.12.5',
			true
		);
		wp_enqueue_script(
			'gsap-st',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
			array( 'gsap' ),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'klarton',
			get_stylesheet_directory_uri() . '/assets/klarton.min.js',
			array( 'lenis', 'gsap', 'gsap-st' ),
			'1.0.36',
			true // footer, despues del DOM
		);

		// Eingebettetes Formular (Popup-Modal + Inline-Formular unten)
		wp_enqueue_script(
			'klarton-formembed',
			'https://link.msgsndr.com/js/form_embed.js',
			array(),
			null,
			true
		);
	}
} );

// Google-Fonts nicht render-blocking laden (media=print -> all per onload).
add_filter( 'style_loader_tag', function ( $tag, $handle ) {
	if ( 'klarton-fonts' !== $handle ) {
		return $tag;
	}
	$async = str_replace( "media='all'", "media='print' onload=\"this.media='all'\"", $tag );
	return $async . '<noscript>' . $tag . '</noscript>';
}, 10, 2 );

// Preconnect Google Fonts + DNS-Prefetch fuer CDN/GHL (keine Preconnect-Warnung > 4).
add_filter( 'wp_resource_hints', function ( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	if ( 'dns-prefetch' === $relation ) {
		$hints[] = 'https://cdnjs.cloudflare.com';
		$hints[] = 'https://cdn.jsdelivr.net';
		$hints[] = 'https://link.msgsndr.com';
		$hints[] = 'https://api.leadconnectorhq.com';
	}
	return $hints;
}, 10, 2 );

// defer fuer CDN-Skripte (GSAP, Lenis, GHL-Formular) — reduziert Render-Blocking.
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	$defer = array( 'lenis', 'gsap', 'gsap-st', 'klarton-formembed' );
	if ( in_array( $handle, $defer, true ) && strpos( $tag, ' defer' ) === false ) {
		return str_replace( ' src=', ' defer src=', $tag );
	}
	return $tag;
}, 10, 2 );

// Preload des Hero-Bildes (responsiv) zur Verbesserung des LCP
add_action( 'wp_head', function () {
	if ( ! is_front_page() ) return;
	$a = get_stylesheet_directory_uri() . '/assets';
	echo '<link rel="preload" as="image" href="' . esc_url( $a . '/hero-team.webp' ) . '" media="(min-width: 701px)" fetchpriority="high">' . "\n";
	echo '<link rel="preload" as="image" href="' . esc_url( $a . '/klarton-team-mobile.webp' ) . '" media="(max-width: 700px)" fetchpriority="high">' . "\n";
}, 1 );

// Meta-Descriptions fuer die Sektion-Seiten (an Rank Math liefern, falls dort leer).
add_filter( 'rank_math/frontend/description', function ( $desc ) {
	if ( ! empty( $desc ) ) {
		return $desc;
	}
	if ( is_front_page() || is_home() ) {
		return 'Online Marketing Agentur in Zürich für Performance Marketing: Google Ads, Meta Ads, SEA, Leadgenerierung und SEO. Zertifizierter Google und Meta Partner, datenbasiert auf Umsatz und Leads.';
	}
	if ( ! is_page() ) {
		return $desc;
	}
	$map = array(
		'leistungen'  => 'Leistungen der Werbeagentur Klarton in Zürich: Google Ads, Meta Ads, SEA, Leadgenerierung, SEO, Branding und Conversion-Optimierung. Alles aus einer Hand.',
		'methodik'    => 'Die Klarton-Methodik in sechs Schritten: Tracking-Audit, Funnel-Architektur, Omnichannel-Skalierung und Automatisierung. Performance Marketing aus Zürich, datenbasiert auf Umsatz.',
		'vergleich'   => 'Werbeagentur Zürich im Vergleich: Klarton gegen andere Agentur und In-House Team. Zertifizierter Google und Meta Partner, CPA-Modell, kein Langzeitvertrag.',
		'fallstudien' => 'Fallstudien der Werbeagentur Klarton aus Zürich: echte Resultate mit Google Ads, Meta Ads und Leadgenerierung für Schweizer Unternehmen.',
		'faq'         => 'Häufige Fragen zur Werbeagentur Klarton in Zürich: Kosten, Resultate, Google Ads und Meta Ads, Vertragslaufzeiten und Leadgenerierung.',
		'team'        => 'Das Team von Klarton, der Performance Marketing Agentur aus Zürich. Spezialisten für Google Ads, Meta Ads, Funnel, UX und Sales.',
		'impressum'   => 'Impressum von Klarton, Online Marketing Agentur in Zürich. Anbieterin, Kontakt, UID und Haftungsausschluss.',
		'datenschutz' => 'Datenschutzerklärung von Klarton gemäss Schweizer Datenschutzgesetz (revDSG): Datenbearbeitung, Cookies, Formulare und Ihre Rechte.',
		'agb'         => 'Allgemeine Geschäftsbedingungen (AGB) von Klarton, Performance Marketing Agentur in Zürich.',
	);
	$slug = get_post_field( 'post_name', get_queried_object_id() );
	return isset( $map[ $slug ] ) ? $map[ $slug ] : $desc;
} );

// Favicon + theme-color im <head> (Rank Math liefert kein Favicon).
add_action( 'wp_head', function () {
	$a = get_stylesheet_directory_uri() . '/assets';
	echo '<meta name="theme-color" content="#0A1626">' . "\n";
	echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $a . '/favicon.svg' ) . '">' . "\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( $a . '/favicon-32.png' ) . '">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $a . '/apple-touch-icon.png' ) . '">' . "\n";
}, 2 );

// OG-/Twitter-Bild: auf der Startseite das Marken-Bild erzwingen (sonst zieht Rank Math ein Kundenfoto).
add_filter( 'rank_math/opengraph/facebook/image', function ( $image ) {
	if ( is_front_page() ) {
		return get_stylesheet_directory_uri() . '/assets/og-image.jpg';
	}
	return $image ? $image : get_stylesheet_directory_uri() . '/assets/og-image.jpg';
} );
add_filter( 'rank_math/opengraph/twitter/image', function ( $image ) {
	if ( is_front_page() ) {
		return get_stylesheet_directory_uri() . '/assets/og-image.jpg';
	}
	return $image ? $image : get_stylesheet_directory_uri() . '/assets/og-image.jpg';
} );

// Startseiten-Titel auf das Haupt-Keyword setzen (statt "Home - Klarton Agency").
add_filter( 'rank_math/frontend/title', function ( $title ) {
	return is_front_page() ? 'Werbeagentur Zürich · Performance Marketing & Google Ads | Klarton' : $title;
} );

// Rechtsseiten von der Indexierung ausschliessen (noindex), Crawl-Budget lenken.
add_filter( 'rank_math/frontend/robots', function ( $robots ) {
	if ( is_page( array( 'impressum', 'datenschutz', 'agb' ) ) ) {
		$robots['index']  = 'noindex';
		$robots['follow'] = 'follow';
	}
	return $robots;
} );

// FAQPage JSON-LD (nur Startseite) — zentral fuer GEO/AI-Overviews und Rich Results.
add_action( 'wp_head', function () {
	if ( ! is_front_page() && ! is_page( 'faq' ) ) {
		return;
	}
	$faqs = array(
		array( 'q' => 'Was macht eine Online Marketing Agentur in Zürich wie Klarton?', 'a' => 'Eine Online Marketing Agentur in Zürich wie Klarton plant, schaltet und optimiert Ihre Online-Werbung end-to-end. Konkret übernehmen wir Performance Marketing über Google Ads, Meta Ads (Facebook und Instagram), SEA und SEO, gekoppelt mit Leadgenerierung und Conversion-Optimierung. Als zertifizierte Google und Meta Partner steuern wir Ihr Budget datenbasiert auf messbaren Umsatz, nicht auf Klicks, mit Echtzeit-Reporting und server-seitigem Tracking (revDSG-konform).' ),
		array( 'q' => 'Brauche ich eine Performance Marketing Agentur oder einen Google Ads Spezialisten in Zürich?', 'a' => 'Für planbares Wachstum lohnt sich beides aus einer Hand. Ein einzelner Google Ads Spezialist in Zürich deckt einen Kanal ab. Eine Performance Marketing Agentur in Zürich wie Klarton verbindet Google Ads, Meta Ads, SEA und Leadgenerierung zu einem synchronisierten System und optimiert alles auf CPA und Umsatz. So vermeiden Sie Streuverluste und haben einen festen Ansprechpartner statt einer Hotline.' ),
		array( 'q' => 'Was kostet eine professionelle Google Ads Agentur in Zürich?', 'a' => 'Die Investition setzt sich aus zwei Komponenten zusammen: Ihrem direkt an Google fliessenden Werbebudget und unserer Management-Pauschale als Performance Marketing Agentur. Für eine ganzheitliche Betreuung inklusive kontinuierlicher Conversion-Optimierung (CRO) und fehlerfreiem Daten-Tracking liegen die Betreuungsgebühren in Zürich meist zwischen CHF 690 und CHF 2\'500 pro Monat. Im kostenlosen Erstgespräch erstellen wir ein transparentes Angebot.' ),
		array( 'q' => 'Wie schnell sehe ich erste Resultate durch die Skalierung?', 'a' => 'Dank unserer eingespielten Omnichannel-Prozesse sehen unsere Kunden in der Regel bereits innerhalb von 2 bis 3 Wochen nach dem offiziellen Kampagnenstart erste vorqualifizierte Anfragen oder Verkäufe. Die ersten 4 bis 6 Wochen nutzen wir intensiv für algorithmische Optimierungen, um Ihr Budget anschliessend maximal profitabel zu skalieren.' ),
		array( 'q' => 'Sollte mein Unternehmen auf Google Ads oder Meta Ads setzen?', 'a' => 'Das hängt primär von Ihrem Geschäftsmodell ab: Eine exakt ausgerichtete Google Ads Kampagne fängt Nutzer ab, die bereits eine aktive Kaufabsicht zeigen. Meta Ads hingegen wecken über visuelles Storytelling auf Facebook und Instagram gezielt eine neue Nachfrage. Die erfolgreichsten Schweizer Brands kombinieren beide Kanäle.' ),
		array( 'q' => 'Gibt es bei Klarton lange, starre Vertragslaufzeiten?', 'a' => 'Nein. Wir arbeiten mit einer initialen Mindestlaufzeit von nur 3 Monaten, da fundierte Algorithmen und conversion-starke Systeme eine kurze Test- und Lernphase benötigen. Danach ist die Zusammenarbeit jederzeit monatlich kündbar. Bei uns gibt es keine Knebelverträge oder versteckte Retainer-Fallen.' ),
		array( 'q' => 'Lohnt sich eine professionelle Leadgenerierungs-Agentur auch bei kleineren Budgets?', 'a' => 'Ja, gerade bei kompakteren Budgets ist professionelle Unterstützung entscheidend. Wenn jeder Franken zählt, darf kein Budget durch falsches Targeting oder fehlerhafte Tracking-Pixel verschwendet werden. Wir empfehlen ein minimales monatliches Medienbudget von CHF 500, um den Plattform-Algorithmen genügend Datenbasis zu liefern.' ),
		array( 'q' => 'Wie viel operativen Aufwand habe ich während der Zusammenarbeit?', 'a' => 'Praktisch keinen. Als Ihr strategischer Wachstumspartner übernehmen wir die vollständige Verantwortung: von der Zielgruppenanalyse über conversion-starkes Copywriting, hochkonvertierende Landingpages und revDSG-konformes Server-Side-Tracking bis zur täglichen Kampagnen-Optimierung und CRM-Anbindung. Sie konzentrieren sich auf Ihr Kerngeschäft.' ),
	);
	$items = array();
	foreach ( $faqs as $f ) {
		$items[] = array(
			'@type'          => 'Question',
			'name'           => $f['q'],
			'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $f['a'] ),
		);
	}
	$ld = array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $items );
	echo '<script type="application/ld+json">' . wp_json_encode( $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}, 21 );

// LocalBusiness JSON-LD (strukturierte Daten fuer lokale SEO).
add_action( 'wp_head', function () {
	$services = array( 'Google Ads', 'Meta Ads', 'SEA', 'LinkedIn Ads', 'Leadgenerierung', 'Lokale SEO', 'Conversion-Optimierung', 'Branding', 'Marketing-Automatisierung' );
	$offers = array();
	foreach ( $services as $svc ) {
		$offers[] = array(
			'@type'       => 'Offer',
			'itemOffered' => array( '@type' => 'Service', 'name' => $svc, 'areaServed' => array( '@type' => 'City', 'name' => 'Zürich' ) ),
		);
	}
	$ld = array(
		'@context'      => 'https://schema.org',
		'@type'         => 'ProfessionalService',
		'@id'           => home_url( '/#organization' ),
		'name'          => 'Klarton',
		'alternateName' => 'Werbeagentur Zürich',
		'slogan'        => 'Performance Marketing in klarem Ton.',
		'description'   => 'Online Marketing Agentur in Zürich für Performance Marketing: Google Ads, Meta Ads, SEA, Leadgenerierung und SEO. Zertifizierter Google und Meta Partner.',
		'url'           => home_url( '/' ),
		'logo'          => get_stylesheet_directory_uri() . '/assets/og-image.jpg',
		'image'         => get_stylesheet_directory_uri() . '/assets/og-image.jpg',
		'telephone'     => '+41779503962',
		'email'         => 'vertrieb@klarton.agency',
		'priceRange'    => 'CHF 690 - CHF 2\'500',
		'foundingDate'  => '2021',
		'areaServed'    => array(
			array( '@type' => 'City', 'name' => 'Zürich' ),
			array( '@type' => 'City', 'name' => 'Zug' ),
			array( '@type' => 'City', 'name' => 'Winterthur' ),
			array( '@type' => 'Country', 'name' => 'Schweiz' ),
		),
		'address'       => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Zürich',
			'addressRegion'   => 'ZH',
			'addressCountry'  => 'CH',
		),
		'openingHoursSpecification' => array(
			array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ), 'opens' => '09:00', 'closes' => '18:00' ),
			array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Saturday', 'opens' => '10:00', 'closes' => '14:00' ),
		),
		'contactPoint'  => array(
			'@type'             => 'ContactPoint',
			'telephone'         => '+41779503962',
			'email'             => 'vertrieb@klarton.agency',
			'contactType'       => 'sales',
			'areaServed'        => 'CH',
			'availableLanguage' => array( 'German', 'English' ),
		),
		'hasOfferCatalog' => array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Performance Marketing Leistungen',
			'itemListElement' => $offers,
		),
		'knowsAbout'    => array( 'Google Ads', 'Meta Ads', 'SEA', 'Leadgenerierung', 'SEO', 'Conversion-Optimierung', 'Branding', 'Performance Marketing', 'Werbeagentur Zürich' ),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}, 20 );
