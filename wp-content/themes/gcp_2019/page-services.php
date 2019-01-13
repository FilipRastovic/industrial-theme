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
$services_whitepaper_btn_text = get_field('services_whitepaper_btn_text');
$services_whitepaper_file_url = get_field('services_whitepaper_file_url');

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 

$next_service_url = get_field('next_service_url');
$next_service_label = get_field('next_service_label');

?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-5"><?php echo $services_main_heading; ?></h1>
        <?php echo $services_main_paragraph; ?>
      </div>
      <div class="<?php echo $services_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
    </div>
  </div>
</header> 

<section  data-aos="fade-up" class="service-copy">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="mb-3"><?php echo $services_second_heading; ?></h1>
        <?php echo $services_content; ?>
        Next service: <a href="<?php echo $next_service_url; ?>"><?php echo $next_service_label; ?></a>
      </div>
      <div class="col-md-4 offset-md-1">
        <div class="card card--whitepaper no-top-border">
          <div class="col-2 mx-auto col-md-6 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4><?php echo $services_whitepaper_title; ?></h4>
            <hr>
            <p class="card-text"><?php echo $services_whitepaper_paragraph; ?></p>
            <a download href="<?php echo $services_whitepaper_file_url; ?>" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $services_whitepaper_btn_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/featured-case-study'); ?>

<section class="whitepaper mb-50">
  <div class="container shadow padded">
    <div class="row">
      <div class="col-12 col-md-10">
        <h2><?php echo $services_request_consultation_heading; ?></h2>
      </div>
      <div class="col-2 d-none d-sm-none d-md-block">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/consultation.png" alt="Consultation Quote">
      </div>
      <div class="col-md-12">
        <p><?php echo $services_request_consultation_content; ?></p>
        <a href="" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $services_request_consultation_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>