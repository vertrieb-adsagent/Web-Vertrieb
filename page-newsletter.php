<?php
/*
Template Name: Klarton — Newsletter
*/
if ( ! defined( 'ABSPATH' ) ) exit;
$assets = get_stylesheet_directory_uri() . '/assets';

$rankmath_active = function_exists( 'rank_math' ) || defined( 'RANK_MATH_VERSION' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( ! $rankmath_active ) : ?>
<meta name="description" content="Klarton Newsletter: wöchentliche Insights zu Performance Marketing, Google Ads, Meta Ads und Wachstumsstrategien für Schweizer Unternehmen.">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( 'klarton-newsletter' ); ?>>

<?php get_template_part( 'template-parts/klarton-nav' ); ?>

<style>
/* ── Newsletter Hero ── */
.nl-hero{padding:140px 0 48px;background:var(--navy-ink)}
.nl-breadcrumb{display:flex;align-items:center;gap:12px;font-family:var(--mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase}
.nl-breadcrumb a{color:var(--muted-light);transition:color .2s}
.nl-breadcrumb a:hover{color:var(--bone)}
.nl-breadcrumb .nl-sep{color:var(--muted-light)}
.nl-breadcrumb .nl-cur{color:var(--bone)}

/* ── Gutenberg Content Area (open editor like Astra) ── */
.nl-content{padding:80px 0 100px;background:var(--bone);min-height:50vh}
.nl-content .container{max-width:820px}

/* Gutenberg block defaults */
.nl-content h1,.nl-content h2,.nl-content h3,.nl-content h4,.nl-content h5,.nl-content h6{font-family:var(--serif);color:var(--navy);letter-spacing:-.01em;line-height:1.2;margin-top:1.8em;margin-bottom:.6em}
.nl-content h1{font-size:2.5rem;font-weight:400}
.nl-content h2{font-size:2rem;font-weight:400}
.nl-content h3{font-size:1.5rem;font-weight:400}
.nl-content h4{font-size:1.25rem;font-weight:500}
.nl-content p{font-size:1.0625rem;line-height:1.75;color:var(--navy);margin-bottom:1.2em}
.nl-content a{color:var(--rot);text-decoration:underline;text-underline-offset:3px;transition:color .2s}
.nl-content a:hover{color:var(--navy)}
.nl-content strong,.nl-content b{font-weight:600}
.nl-content em i{font-style:italic}

/* Lists */
.nl-content ul,.nl-content ol{font-size:1.0625rem;line-height:1.75;color:var(--navy);margin:0 0 1.4em 1.6em;padding:0}
.nl-content li{margin-bottom:.4em}
.nl-content li::marker{color:var(--rot)}

/* Images */
.nl-content img{max-width:100%;height:auto;border-radius:14px;margin:1.6em 0}
.nl-content figure{margin:2em 0}
.nl-content figcaption{font-family:var(--mono);font-size:12px;color:var(--muted);text-align:center;margin-top:8px}

/* Blockquotes */
.nl-content blockquote{border-left:3px solid var(--rot);padding:16px 0 16px 28px;margin:2em 0;font-family:var(--serif);font-size:1.25rem;font-style:italic;color:var(--navy);line-height:1.5}
.nl-content blockquote p{font-family:inherit;font-size:inherit;line-height:inherit;margin-bottom:.4em}
.nl-content blockquote cite{display:block;font-family:var(--mono);font-size:12px;font-style:normal;color:var(--muted);margin-top:8px}

/* Separator/HR */
.nl-content hr{border:0;border-top:1px solid var(--bone-line);margin:2.4em 0}

/* Code */
.nl-content code{font-family:var(--mono);font-size:.9em;background:rgba(26,54,93,.06);padding:2px 6px;border-radius:4px}
.nl-content pre{background:var(--navy-ink);color:var(--bone);padding:24px;border-radius:12px;overflow-x:auto;margin:2em 0;font-size:.875rem;line-height:1.6}
.nl-content pre code{background:none;padding:0;color:inherit}

/* Tables (Gutenberg) */
.nl-content table{width:100%;border-collapse:collapse;margin:2em 0;font-size:.9375rem}
.nl-content th{font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;text-align:left;padding:12px 16px;border-bottom:2px solid var(--navy);color:var(--navy)}
.nl-content td{padding:12px 16px;border-bottom:1px solid var(--bone-line);color:var(--navy)}

/* Buttons (Gutenberg) */
.nl-content .wp-block-button .wp-block-button__link{display:inline-block;font-family:var(--body);font-weight:600;font-size:.875rem;letter-spacing:.02em;padding:14px 32px;border-radius:100px;text-decoration:none;transition:background .25s,color .25s,transform .25s}
.nl-content .wp-block-button:not(.is-style-outline) .wp-block-button__link{background:var(--rot);color:#fff}
.nl-content .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover{background:var(--navy);transform:translateY(-2px)}
.nl-content .wp-block-button.is-style-outline .wp-block-button__link{border:1.5px solid var(--navy);color:var(--navy);background:transparent}
.nl-content .wp-block-button.is-style-outline .wp-block-button__link:hover{background:var(--navy);color:#fff}

/* Columns */
.nl-content .wp-block-columns{gap:32px;margin:2em 0}
@media(max-width:600px){.nl-content .wp-block-columns{flex-direction:column!important}}

/* Cover block */
.nl-content .wp-block-cover{border-radius:14px;overflow:hidden;margin:2em 0}

/* Gallery */
.nl-content .wp-block-gallery{gap:12px;margin:2em 0}
.nl-content .wp-block-gallery img{border-radius:10px}

/* Wide / Full alignment */
.nl-content .alignwide{max-width:1080px;margin-left:auto;margin-right:auto;width:100%}
.nl-content .alignfull{max-width:100vw;margin-left:calc(50% - 50vw);margin-right:calc(50% - 50vw);width:100vw}
.nl-content .alignfull img{border-radius:0}

/* Video */
.nl-content .wp-block-embed,.nl-content .wp-block-video{margin:2em 0}
.nl-content .wp-block-embed iframe{border-radius:14px}

/* Group / Container block */
.nl-content .wp-block-group{margin:2em 0}
.nl-content .wp-block-group.has-background{padding:32px;border-radius:14px}

/* Spacer */
.nl-content .wp-block-spacer{margin:0}

/* Empty state (no content yet) */
.nl-empty{text-align:center;padding:80px 0}
.nl-empty .eyebrow{display:inline-flex}
.nl-empty h2{font-family:var(--serif);font-size:2rem;color:var(--navy);margin:24px 0 16px}
.nl-empty p{color:var(--muted);max-width:48ch;margin:0 auto;font-size:1.0625rem;line-height:1.65}

/* Newsletter CTA */
.nl-cta{text-align:center;padding:100px 0;background:var(--navy-deep);color:var(--bone)}
.nl-cta .section-title{color:var(--bone);margin:24px auto 16px}
.nl-cta p{color:var(--muted-light);max-width:48ch;margin:0 auto;font-size:1.0625rem;line-height:1.65}

@media(max-width:540px){
  .nl-hero{padding:120px 0 36px}
  .nl-content{padding:48px 0 64px}
  .nl-content h1{font-size:1.8rem}
  .nl-content h2{font-size:1.5rem}
}
</style>

<div class="nl-hero">
  <div class="container">
    <nav class="nl-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>
      <span class="nl-sep" aria-hidden="true">/</span>
      <span class="nl-cur">Newsletter</span>
    </nav>
  </div>
</div>

<main class="nl-content">
  <div class="container">
    <?php
    while ( have_posts() ) : the_post();
      $content = get_the_content();
      $content = apply_filters( 'the_content', $content );
      $content = str_replace( ']]>', ']]&gt;', $content );
      if ( trim( $content ) ) :
        echo $content;
      else :
    ?>
    <div class="nl-empty reveal">
      <span class="eyebrow"><span class="dot"></span>Demnächst</span>
      <h2>Der Klarton <em>Newsletter.</em></h2>
      <p>Wöchentliche Insights zu Performance Marketing, Google Ads und Wachstumsstrategien. Direkt aus der Praxis, ohne Buzzwords.</p>
      <a href="#kontakt" class="btn btn-primary" data-audit style="margin-top:32px;">Audit anfordern <span class="arr">&rarr;</span></a>
    </div>
    <?php
      endif;
    endwhile;
    ?>
  </div>
</main>

<section class="nl-cta">
  <div class="container">
    <span class="eyebrow on-dark"><span class="dot"></span>Bereit für Wachstum?</span>
    <h2 class="section-title">Jetzt <em>starten.</em></h2>
    <p>Kostenloses Erstgespräch, unverbindlich und ohne Verkaufsdruck. Wir zeigen Ihnen, wo Ihr grösstes Potenzial liegt.</p>
    <a href="#kontakt" class="btn btn-primary" data-audit style="margin-top:32px;">Audit anfordern <span class="arr">&rarr;</span></a>
  </div>
</section>

<?php get_template_part( 'template-parts/klarton-footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
