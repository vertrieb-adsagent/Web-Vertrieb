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
<body <?php body_class( 'klarton-single' ); ?>>

<?php get_template_part( 'template-parts/klarton-nav' ); ?>

<style>
/* ── Single Post Hero ── */
.sp-hero{padding:140px 0 48px;background:var(--navy-ink)}
.sp-breadcrumb{display:flex;align-items:center;gap:12px;font-family:var(--mono);font-size:12px;letter-spacing:.06em;text-transform:uppercase;flex-wrap:wrap}
.sp-breadcrumb a{color:var(--muted-light);transition:color .2s}
.sp-breadcrumb a:hover{color:var(--bone)}
.sp-breadcrumb .sp-sep{color:var(--muted-light)}
.sp-breadcrumb .sp-cur{color:var(--bone)}

/* ── Post Content (Gutenberg — same open editor styling) ── */
.sp-content{padding:80px 0 100px;background:var(--bone);min-height:50vh}
.sp-content .container{max-width:820px}

.sp-meta{display:flex;align-items:center;gap:16px;font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;color:var(--muted);margin-bottom:32px;padding-bottom:24px;border-bottom:1px solid var(--bone-line)}
.sp-title{font-family:var(--serif);font-size:2.5rem;font-weight:400;color:var(--navy);line-height:1.2;margin:0 0 16px}

/* Gutenberg block defaults */
.sp-content h1,.sp-content h2,.sp-content h3,.sp-content h4,.sp-content h5,.sp-content h6{font-family:var(--serif);color:var(--navy);letter-spacing:-.01em;line-height:1.2;margin-top:1.8em;margin-bottom:.6em}
.sp-content h1{font-size:2.5rem;font-weight:400}
.sp-content h2{font-size:2rem;font-weight:400}
.sp-content h3{font-size:1.5rem;font-weight:400}
.sp-content h4{font-size:1.25rem;font-weight:500}
.sp-content p{font-size:1.0625rem;line-height:1.75;color:var(--navy);margin-bottom:1.2em}
.sp-content a{color:var(--rot);text-decoration:underline;text-underline-offset:3px;transition:color .2s}
.sp-content a:hover{color:var(--navy)}
.sp-content strong,.sp-content b{font-weight:600}

/* Lists */
.sp-content ul,.sp-content ol{font-size:1.0625rem;line-height:1.75;color:var(--navy);margin:0 0 1.4em 1.6em;padding:0}
.sp-content li{margin-bottom:.4em}
.sp-content li::marker{color:var(--rot)}

/* Images */
.sp-content img{max-width:100%;height:auto;border-radius:14px;margin:1.6em 0}
.sp-content figure{margin:2em 0}
.sp-content figcaption{font-family:var(--mono);font-size:12px;color:var(--muted);text-align:center;margin-top:8px}

/* Featured image */
.sp-featured{margin:0 0 40px;border-radius:14px;overflow:hidden}
.sp-featured img{width:100%;height:auto;display:block;border-radius:14px}

/* Blockquotes */
.sp-content blockquote{border-left:3px solid var(--rot);padding:16px 0 16px 28px;margin:2em 0;font-family:var(--serif);font-size:1.25rem;font-style:italic;color:var(--navy);line-height:1.5}
.sp-content blockquote p{font-family:inherit;font-size:inherit;line-height:inherit;margin-bottom:.4em}
.sp-content blockquote cite{display:block;font-family:var(--mono);font-size:12px;font-style:normal;color:var(--muted);margin-top:8px}

/* Separator/HR */
.sp-content hr{border:0;border-top:1px solid var(--bone-line);margin:2.4em 0}

/* Code */
.sp-content code{font-family:var(--mono);font-size:.9em;background:rgba(26,54,93,.06);padding:2px 6px;border-radius:4px}
.sp-content pre{background:var(--navy-ink);color:var(--bone);padding:24px;border-radius:12px;overflow-x:auto;margin:2em 0;font-size:.875rem;line-height:1.6}
.sp-content pre code{background:none;padding:0;color:inherit}

/* Tables */
.sp-content table{width:100%;border-collapse:collapse;margin:2em 0;font-size:.9375rem}
.sp-content th{font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;text-align:left;padding:12px 16px;border-bottom:2px solid var(--navy);color:var(--navy)}
.sp-content td{padding:12px 16px;border-bottom:1px solid var(--bone-line);color:var(--navy)}

/* Buttons */
.sp-content .wp-block-button .wp-block-button__link{display:inline-block;font-family:var(--body);font-weight:600;font-size:.875rem;letter-spacing:.02em;padding:14px 32px;border-radius:100px;text-decoration:none;transition:background .25s,color .25s,transform .25s}
.sp-content .wp-block-button:not(.is-style-outline) .wp-block-button__link{background:var(--rot);color:#fff}
.sp-content .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover{background:var(--navy);transform:translateY(-2px)}
.sp-content .wp-block-button.is-style-outline .wp-block-button__link{border:1.5px solid var(--navy);color:var(--navy);background:transparent}
.sp-content .wp-block-button.is-style-outline .wp-block-button__link:hover{background:var(--navy);color:#fff}

/* Columns */
.sp-content .wp-block-columns{gap:32px;margin:2em 0}
@media(max-width:600px){.sp-content .wp-block-columns{flex-direction:column!important}}

/* Cover block */
.sp-content .wp-block-cover{border-radius:14px;overflow:hidden;margin:2em 0}

/* Gallery */
.sp-content .wp-block-gallery{gap:12px;margin:2em 0}
.sp-content .wp-block-gallery img{border-radius:10px}

/* Wide / Full alignment */
.sp-content .alignwide{max-width:1080px;margin-left:auto;margin-right:auto;width:100%}
.sp-content .alignfull{max-width:100vw;margin-left:calc(50% - 50vw);margin-right:calc(50% - 50vw);width:100vw}
.sp-content .alignfull img{border-radius:0}

/* Video / Embed */
.sp-content .wp-block-embed,.sp-content .wp-block-video{margin:2em 0}
.sp-content .wp-block-embed iframe{border-radius:14px}

/* Group */
.sp-content .wp-block-group{margin:2em 0}
.sp-content .wp-block-group.has-background{padding:32px;border-radius:14px}

/* Back link */
.sp-back{display:inline-flex;align-items:center;gap:8px;font-family:var(--body);font-weight:600;font-size:.875rem;color:var(--rot);text-decoration:none;margin-top:48px;transition:gap .2s}
.sp-back:hover{gap:12px;color:var(--navy)}

/* CTA */
.sp-cta{text-align:center;padding:100px 0;background:var(--navy-deep);color:var(--bone)}
.sp-cta .section-title{color:var(--bone);margin:24px auto 16px}
.sp-cta p{color:var(--muted-light);max-width:48ch;margin:0 auto;font-size:1.0625rem;line-height:1.65}

@media(max-width:540px){
  .sp-hero{padding:120px 0 36px}
  .sp-content{padding:48px 0 64px}
  .sp-title{font-size:1.8rem}
  .sp-content h2{font-size:1.5rem}
}
</style>

<div class="sp-hero">
  <div class="container">
    <nav class="sp-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>
      <span class="sp-sep" aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>">Newsletter</a>
      <span class="sp-sep" aria-hidden="true">/</span>
      <span class="sp-cur"><?php the_title(); ?></span>
    </nav>
  </div>
</div>

<main class="sp-content">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="sp-meta">
      <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( 'j. F Y' ); ?></time>
    </div>

    <h1 class="sp-title"><?php the_title(); ?></h1>

    <?php if ( has_post_thumbnail() ) : ?>
    <div class="sp-featured">
      <?php the_post_thumbnail( 'full' ); ?>
    </div>
    <?php endif; ?>

    <?php the_content(); ?>

    <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>" class="sp-back"><span aria-hidden="true">&larr;</span> Alle Newsletter</a>

    <?php endwhile; ?>
  </div>
</main>

<section class="sp-cta">
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
