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

/* ── Newsletter Archive Listing ── */
.nl-archive{padding:80px 0 100px;background:var(--bone);min-height:50vh}
.nl-archive .container{max-width:920px}

.nl-grid{display:grid;gap:32px}

.nl-card{background:#fff;border-radius:16px;overflow:hidden;transition:transform .3s,box-shadow .3s;display:flex;flex-direction:column}
.nl-card:hover{transform:translateY(-4px);box-shadow:0 12px 40px rgba(10,22,38,.10)}
.nl-card-img{width:100%;aspect-ratio:16/9;object-fit:cover;display:block}
.nl-card-body{padding:32px}
.nl-card-date{font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;color:var(--muted);margin-bottom:12px}
.nl-card-title{font-family:var(--serif);font-size:1.5rem;color:var(--navy);line-height:1.3;margin:0 0 12px}
.nl-card-title a{color:inherit;text-decoration:none;transition:color .2s}
.nl-card-title a:hover{color:var(--rot)}
.nl-card-excerpt{font-size:.9375rem;line-height:1.7;color:var(--navy);opacity:.8;margin:0 0 20px}
.nl-card-link{display:inline-flex;align-items:center;gap:6px;font-family:var(--body);font-weight:600;font-size:.875rem;color:var(--rot);text-decoration:none;transition:gap .2s}
.nl-card-link:hover{gap:10px}

/* Pagination */
.nl-pagination{display:flex;justify-content:center;align-items:center;gap:8px;margin-top:56px;font-family:var(--mono);font-size:14px}
.nl-pagination a,.nl-pagination span{display:inline-flex;align-items:center;justify-content:center;min-width:40px;height:40px;padding:0 12px;border-radius:8px;text-decoration:none;transition:background .2s,color .2s}
.nl-pagination a{color:var(--navy);background:rgba(10,22,38,.05)}
.nl-pagination a:hover{background:var(--rot);color:#fff}
.nl-pagination .current{background:var(--navy);color:#fff}

/* Empty state */
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
  .nl-archive{padding:48px 0 64px}
  .nl-card-body{padding:24px}
  .nl-card-title{font-size:1.25rem}
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

<main class="nl-archive">
  <div class="container">
    <?php
    $paged = max( 1, get_query_var( 'paged' ) );
    $nl_query = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 9,
      'paged'          => $paged,
      'post_status'    => 'publish',
    ) );

    if ( $nl_query->have_posts() ) :
    ?>
    <div class="nl-grid">
      <?php while ( $nl_query->have_posts() ) : $nl_query->the_post(); ?>
      <article class="nl-card reveal">
        <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large', array( 'class' => 'nl-card-img', 'loading' => 'lazy' ) ); ?>
          </a>
        <?php endif; ?>
        <div class="nl-card-body">
          <time class="nl-card-date" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( 'j. F Y' ); ?></time>
          <h2 class="nl-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php if ( has_excerpt() || get_the_content() ) : ?>
            <p class="nl-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 28, '...' ); ?></p>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="nl-card-link">Weiterlesen <span aria-hidden="true">&rarr;</span></a>
        </div>
      </article>
      <?php endwhile; ?>
    </div>

    <?php
    $total_pages = $nl_query->max_num_pages;
    if ( $total_pages > 1 ) :
    ?>
    <nav class="nl-pagination" aria-label="Newsletter Seiten">
      <?php
      echo paginate_links( array(
        'total'     => $total_pages,
        'current'   => $paged,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
      ) );
      ?>
    </nav>
    <?php endif; ?>

    <?php wp_reset_postdata(); else : ?>
    <div class="nl-empty reveal">
      <span class="eyebrow"><span class="dot"></span>Demnächst</span>
      <h2>Der Klarton <em>Newsletter.</em></h2>
      <p>Wöchentliche Insights zu Performance Marketing, Google Ads und Wachstumsstrategien. Direkt aus der Praxis, ohne Buzzwords.</p>
      <a href="#kontakt" class="btn btn-primary" data-audit style="margin-top:32px;">Audit anfordern <span class="arr">&rarr;</span></a>
    </div>
    <?php endif; ?>
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
