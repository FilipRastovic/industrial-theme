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
?>

<header class="header header--noborder">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-5">
          <?php echo $case_studies_main_heading; ?>
        </h1>
        <?php echo $case_studies_main_paragraph; ?>
      </div>
      <div class="<?php echo $case_studies_main_image_style; ?> u-relative">
        <img class="img-abstract img-abstract--mt" src="<?php echo $case_studies_main_image['url']; ?>" alt="Case Study Img">
      </div>
    </div>
  </div>
</header>

<section class="cards case-studies">
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
      
        <div class="col-md-4">
          <?php get_template_part( 'template-parts/content', get_post_type() );?>
        </div>
  

      <?php endwhile;  ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>