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

<header class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5">H1 Title of article goes 
              right here</h2>
        </div>
      </div>
    </div>
  </header>

<section class="learning-center-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 offset-md-2">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </div>
    <div class="col-md-3 col-lg-2 offset-lg-1 order-3">
        <div class="card no-top-border">
          <div class="col-md-6 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4>White Paper Title</h4>
            <hr>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a href="" class="btn btn-full btn-xl btn-white js-scroll-trigger">Download</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//get_sidebar();
get_footer();
