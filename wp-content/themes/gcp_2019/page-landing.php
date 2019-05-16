<?php
/**
 * Template Name: Landing Page
 *
 */

$website_icon = get_field('website_icon');
$navbar_brand_logo = get_field('navbar_brand_logo');
$lp_main_heading = get_field('lp_main_heading'); 
$lp_main_paragraph = get_field('lp_main_paragraph');
$lp_second_heading = get_field('lp_second_heading');
$lp_content = get_field('lp_content');

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph');

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" type="image/png" href="assets/img/ico.png" />
  <?php wp_head(); ?>
  <style>
</style>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" role="navigation">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
        aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img class="" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Logo">
      </a>
    </div>
  </nav>

  <header class="header header--centered">
    <div class="polygon-shape header--dark"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-3">
            <?php echo $lp_main_heading; ?>
          </h2>
          <p class="">
            <?php echo $lp_main_paragraph; ?>
          </p>
        </div>
      </div>
    </div>
  </header>

  <section class="landing-page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-7 landing-page-content--left">
          <h3>
            <?php echo $lp_second_heading; ?>
          </h3>
			    <hr align="left">
          <?php  echo $lp_content; ?>

        </div>
        <div class="col-md-4 offset-md-1 mx-auto">
        <div class="card">
          <div class="col-4 mx-auto col-md-4 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h5>
              <?php echo $lp_form_heading; ?>
            </h5>
            <hr>
            <p class="card-text">
              <?php echo $lp_form_paragraph; ?>
            </p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=b1bf8f5d-7c79-4434-ac4d-510135075ae5]"); ?>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>