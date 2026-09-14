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
<body <?php body_class(); ?>>
<main style="max-width:760px;margin:0 auto;padding:80px 24px;font-family:'Open Sans',sans-serif;color:#1A365D;">
<?php
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); the_title( '<h1>', '</h1>' ); the_content(); }
} else {
	echo '<h1>Klarton</h1><p>Seite nicht gefunden.</p>';
}
?>
</main>
<?php wp_footer(); ?>
</body>
</html>
