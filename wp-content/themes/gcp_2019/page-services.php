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
$services_header_image = get_field('services_header_image');


$services_second_heading = get_field('services_second_heading');
$services_content = get_field('services_content');

$services_whitepaper_title = get_field('services_whitepaper_title');
$services_whitepaper_paragraph = get_field('services_whitepaper_paragraph');

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph');

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 

?>

<header class="header header--centered header-half">
  <div class="polygon-shape homepage-hero-img" style="background-image: url(<?php echo $services_header_image['url']; ?> );"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb-3">
          <?php echo $services_main_heading; ?>
        </h2>
       <p class="mb-3">
          <?php echo $services_main_paragraph; ?>
		  </p>
      </div>
    </div>
  </div>
</header>

<section class="service-copy">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-page-copy-wrapper">
          <h3 class="mb-3"><?php echo $services_second_heading; ?></h3>
			<hr>
          <?php echo $services_content; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="col-3 mx-auto col-md-3 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4>
              <?php echo $lp_form_heading; ?>
            </h4>
            <hr>
            <p class="card-text">
              <?php echo $lp_form_paragraph; ?>
            </p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/featured-case-study'); ?>

<section class="mt-55">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>
          <?php echo $services_request_consultation_heading; ?>
        </h2>
      </div>
      <div class="col-12 text-center">
        <p class="mx-auto">
          <?php echo $services_request_consultation_content; ?>
        </p>
        <a id="#services-bot-form-cta" href="<?php _e( '/request-consultation', 'gcp_2019'); ?>" class="btn">
          <?php echo $services_request_consultation_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>