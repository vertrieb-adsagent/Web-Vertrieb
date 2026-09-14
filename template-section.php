<?php
/*
Template Name: Klarton — Sektion
*/
if ( ! defined( 'ABSPATH' ) ) exit;

$slug    = ( isset( $post ) && is_object( $post ) ) ? $post->post_name : '';
$allowed = array( 'leistungen', 'methodik', 'vergleich', 'fallstudien', 'faq', 'team' );

$descs = array(
	'leistungen'  => 'Leistungen der Werbeagentur Klarton in Zürich: Google Ads, Meta Ads, SEA, Leadgenerierung, SEO, Branding und Conversion-Optimierung. Alles aus einer Hand.',
	'methodik'    => 'Die Klarton-Methodik in sechs Schritten: Tracking-Audit, Funnel-Architektur, Omnichannel-Skalierung und Automatisierung. Performance Marketing aus Zürich, datenbasiert auf Umsatz.',
	'vergleich'   => 'Werbeagentur Zürich im Vergleich: Klarton gegen andere Agentur und In-House Team. Zertifizierter Google und Meta Partner, CPA-Modell, kein Langzeitvertrag.',
	'fallstudien' => 'Fallstudien der Werbeagentur Klarton aus Zürich: echte Resultate mit Google Ads, Meta Ads und Leadgenerierung für Schweizer Unternehmen.',
	'faq'         => 'Häufige Fragen zur Werbeagentur Klarton in Zürich: Kosten, Resultate, Google Ads und Meta Ads, Vertragslaufzeiten und Leadgenerierung.',
	'team'        => 'Das Team von Klarton, der Performance Marketing Agentur aus Zürich. Spezialisten für Google Ads, Meta Ads, Funnel, UX und Sales.',
);
$meta_desc = isset( $descs[ $slug ] ) ? $descs[ $slug ] : '';

$rankmath_active = function_exists( 'rank_math' ) || defined( 'RANK_MATH_VERSION' );

$section_titles = array(
	'leistungen'  => 'Leistungen',
	'methodik'    => 'Methodik',
	'vergleich'   => 'Vergleich',
	'fallstudien' => 'Fallstudien',
	'faq'         => 'FAQ',
	'team'        => 'Team',
);
$page_title = isset( $section_titles[ $slug ] ) ? $section_titles[ $slug ] : '';

$nav_order = array( 'leistungen', 'methodik', 'vergleich', 'fallstudien', 'faq', 'team' );
$nav_idx   = array_search( $slug, $nav_order, true );
$prev_slug = ( false !== $nav_idx ) ? $nav_order[ ( $nav_idx - 1 + count( $nav_order ) ) % count( $nav_order ) ] : '';
$next_slug = ( false !== $nav_idx ) ? $nav_order[ ( $nav_idx + 1 ) % count( $nav_order ) ] : '';
$prev_title = isset( $section_titles[ $prev_slug ] ) ? $section_titles[ $prev_slug ] : '';
$next_title = isset( $section_titles[ $next_slug ] ) ? $section_titles[ $next_slug ] : '';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( $meta_desc && ! $rankmath_active ) : ?>
<meta name="description" content="<?php echo esc_attr( $meta_desc ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( 'klarton-subpage' ); ?>>

<?php get_template_part( 'template-parts/klarton-nav' ); ?>

<style>
.sub-hero{padding:140px 0 48px;background:var(--navy-ink)}
.sub-breadcrumb{display:flex;align-items:center;gap:12px;font-family:var(--mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase}
.sub-breadcrumb a{color:var(--muted-light);transition:color .2s}
.sub-breadcrumb a:hover{color:var(--bone)}
.sub-breadcrumb .sub-sep{color:var(--muted-light)}
.sub-breadcrumb .sub-cur{color:var(--bone)}
.sub-cta{text-align:center;padding:100px 0;background:var(--navy-deep);color:var(--bone)}
.sub-cta .section-title{color:var(--bone);margin:24px auto 16px}
.sub-cta p{color:var(--muted-light);max-width:48ch;margin:0 auto;font-size:1.0625rem;line-height:1.65}
.section-nav{border-top:1px solid var(--bone-line);padding:0;background:var(--bone)}
.section-nav .container{display:flex;justify-content:space-between}
.sn-link{display:flex;flex-direction:column;gap:4px;padding:32px 0;text-decoration:none;color:var(--navy);transition:color .2s;flex:1}
.sn-link:hover{color:var(--rot)}
.sn-link.sn-next{text-align:right;align-items:flex-end}
.sn-dir{font-family:var(--mono);font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:var(--muted)}
.sn-name{font-family:var(--serif);font-size:1.25rem}
@media(max-width:540px){.sn-name{font-size:1.05rem}.sub-hero{padding:120px 0 36px}}
</style>

<div class="sub-hero">
  <div class="container">
    <nav class="sub-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>
      <span class="sub-sep" aria-hidden="true">/</span>
      <span class="sub-cur"><?php echo esc_html( $page_title ); ?></span>
    </nav>
  </div>
</div>

<main>
<?php
if ( in_array( $slug, $allowed, true ) ) {
	get_template_part( 'template-parts/section', $slug );
} else {
	echo '<section style="padding:160px 0;text-align:center;"><div class="container"><h1 class="section-title">Klarton</h1></div></section>';
}
?>
</main>

<section class="sub-cta">
  <div class="container">
    <span class="eyebrow on-dark"><span class="dot"></span>Bereit für Wachstum?</span>
    <h2 class="section-title">Jetzt <em>starten.</em></h2>
    <p>Kostenloses Erstgespräch, unverbindlich und ohne Verkaufsdruck. Wir zeigen Ihnen, wo Ihr grösstes Potenzial liegt.</p>
    <a href="#kontakt" class="btn btn-primary" data-audit style="margin-top:32px;">Audit anfordern <span class="arr">&rarr;</span></a>
  </div>
</section>

<?php if ( $prev_slug && $next_slug ) : ?>
<nav class="section-nav" aria-label="Weitere Bereiche">
  <div class="container">
    <a href="<?php echo esc_url( home_url( '/' . $prev_slug . '/' ) ); ?>" class="sn-link sn-prev">
      <span class="sn-dir">&larr; Vorherige</span>
      <span class="sn-name"><?php echo esc_html( $prev_title ); ?></span>
    </a>
    <a href="<?php echo esc_url( home_url( '/' . $next_slug . '/' ) ); ?>" class="sn-link sn-next">
      <span class="sn-dir">Nächste &rarr;</span>
      <span class="sn-name"><?php echo esc_html( $next_title ); ?></span>
    </a>
  </div>
</nav>
<?php endif; ?>

<?php get_template_part( 'template-parts/klarton-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
