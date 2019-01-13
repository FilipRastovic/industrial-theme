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

<header class="masthead masthead--grey">
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
          <h4>White Paper Title</h4>
          <hr>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          <a download href="<?php echo $services_whitepaper_file_url; ?>" class="btn btn-full btn-xl js-scroll-trigger">Download</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//get_sidebar();
get_footer();
