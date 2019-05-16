<?php
/**
 * Template Name: Case Studies
 *
 */

get_header();

$case_studies_main_heading = get_field('case_studies_main_heading');
$case_studies_main_paragraph = get_field('case_studies_main_paragraph'); 

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph'); 


?>

<header class="header header--centered">
<div class="polygon-shape header--dark"></div>
   <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="mb-3"><?php echo $case_studies_main_heading; ?></h2>
      <p><?php echo $case_studies_main_paragraph; ?></p>
      </div>
    </div>
  </div>
</header>

<section class="case-studies">
  <div class="container">
    <div class="row row-eq-height">
      <?php
      $loop = new WP_Query( array(
          'post_type' => 'case_study',
          'posts_per_page' => 999,
          'paged'=>$paged
        )
      );
      ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
        <div class="col-md-4 mb-5">
          <?php get_template_part( 'template-parts/content', get_post_type() );?>
        </div>
      <?php endwhile;  ?>
    </div>
  </div>
</section>

<section class="mt-55">
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

<?php get_footer(); ?>