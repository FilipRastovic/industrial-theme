<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcp_2019
 */

  $website_icon = get_field('website_icon');
  $navbar_brand_logo = get_field('navbar_brand_logo');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link rel="icon" type="image/png" href="<?php echo $website_icon['url']; ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="/">
    <img class="" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Logo">
  </a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
      'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>