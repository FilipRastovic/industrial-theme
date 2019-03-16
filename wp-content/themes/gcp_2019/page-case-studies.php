<?php
/**
 * Template Name: Case Studies
 *
 */

get_header();

$case_studies_main_heading = get_field('case_studies_main_heading');
$case_studies_main_paragraph = get_field('case_studies_main_paragraph'); 
?>

<header class="header header--centered header-third-of-normal-height">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
      <h1 class="mb-5"><?php echo $case_studies_main_heading; ?></h1>
      <p class=""><?php echo $case_studies_main_paragraph; ?></p>
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

<section class="mt-5 bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="col-3 mx-auto col-md-3 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4>
            Guide to Successfully Sourcing Suppliers from China
            </h4>
            <hr>
            <p class="card-text">
            In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.
            </p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>