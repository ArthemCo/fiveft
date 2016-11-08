<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= get_template_directory_uri(); ?>/assets/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/assets/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/assets/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#000000">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

</head>
<?php $light_theme = get_theme_mod('hero_theme') === true ? 'light-theme' : 'dark-theme'; ?>
<body <?php body_class($light_theme); ?> id="bod">

	<?php if (get_theme_mod('hero_layout_toggle') !== true) {
		get_template_part( 'parts/nav' );
	}?>
