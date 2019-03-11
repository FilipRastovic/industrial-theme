<?php
/**
 * Template Name: Case Studies
 *
 */

get_header();

$case_studies_main_heading = get_field('case_studies_main_heading');
$case_studies_main_paragraph = get_field('case_studies_main_paragraph'); 
$case_studies_main_image_style = get_field('case_studies_main_image_style');
$case_studies_main_image = get_field('case_studies_main_image');

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph');
?>

<header class="header header-half header--noborder bg-grey">
  <div class="polygon-shape homepage-hero-img"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="">
        <?php echo $case_studies_main_heading; ?>
        </h1>
        <p class="">
        <?php echo $case_studies_main_paragraph; ?>
        </p>
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

<section id="services-bot-form" class="form-section bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
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
</section>

<?php get_footer(); ?>