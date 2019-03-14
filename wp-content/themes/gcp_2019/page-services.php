<?php
/**
 * Template Name: Services Page
 *
 */

get_header();

$services_main_heading = get_field('services_main_heading');
$services_main_paragraph = get_field('services_main_paragraph');
$services_main_image = get_field('services_main_image');
$services_main_image_style = get_field('services_main_image_style');

$services_second_heading = get_field('services_second_heading');
$services_content = get_field('services_content');



$services_whitepaper_title = get_field('services_whitepaper_title');
$services_whitepaper_paragraph = get_field('services_whitepaper_paragraph');

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph');

?>

<header class="header header-third-of-normal-height">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-3">
          <?php echo $services_main_heading; ?>
        </h1>
        <?php echo $services_main_paragraph; ?>
      </div>
      <div class="d-flex flex-wrap align-items-center <?php echo $services_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
    </div>
  </div>
</header>

<section class="service-copy">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="service-page-copy-wrapper">
          <h1 class="mb-3">
              <?php echo $services_second_heading; ?>
            </h1>
            <?php echo $services_content; ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
          <div class="new-form-wrapper">
              <h4 class="text-center">
                <?php echo $lp_form_heading; ?>
              </h4>
              <hr>
              <p class=" text-center">
                <?php echo $lp_form_paragraph; ?>
              </p>
              <?php echo do_shortcode("[hubspot type=form portal=4643163 id=b1bf8f5d-7c79-4434-ac4d-510135075ae5]"); ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/featured-case-study'); ?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
          <div class="card card--whitepaper no-top-border">
            <div class="col-3 mx-auto col-md-3 offset-md-3 text-center">
              <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
            </div>
            <div class="card-body text-center">
              <h4>
                <?php echo $services_whitepaper_title; ?>
              </h4>
              <hr>
              <p class="card-text">
                <?php echo $services_whitepaper_paragraph; ?>
              </p>
              <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>