<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'page-legal' ); ?>>
<header class="legal-nav">
	<a class="legal-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Klarton<span>.</span></a>
</header>
<main class="legal-wrap">
<?php
while ( have_posts() ) {
	the_post();
	the_title( '<h1>', '</h1>' );
	echo '<div class="legal-content">';
	the_content();
	echo '</div>';
}
?>
	<a class="legal-back" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Zurück zur Startseite</a>
</main>
<?php wp_footer(); ?>
</body>
</html>
