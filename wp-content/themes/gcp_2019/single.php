<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gcp_2019
 */

get_header();
?>

<header class="header header--grey">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
        <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
        </div>
      </div>
    </div>
  </header>

<section class="learning-center-copy">
  <div class="container">
    <div class="row">
      <div class="col-md-7">

		<?php
		while ( have_posts() ) :the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();



		endwhile; // End of the loop.
		?>

    </div>

    <div class="col-md-4 offset-md-1">
      <div class="card card--whitepaper no-top-border">
        <div class="col-2 mx-auto col-md-6 offset-md-3 text-center">
          <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
        </div>
        <div class="card-body text-center">
          <h4>Guide to Successfully Sourcing Suppliers from China</h4>
          <hr>
          <p class="card-text">In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.</p>
          <!-- <a download href="<?php echo $services_whitepaper_file_url; ?>" class="btn btn-full btn-xl js-scroll-trigger">Download</a> -->
          <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//get_sidebar();
get_footer();
