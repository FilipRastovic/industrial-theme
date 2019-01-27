<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
?>

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
      </div>
    </div>
  </div>
</header>

<section class="learning-center-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="order-2 order-md-1 col-md-4 col-lg-2">

        <?php wp_list_categories( array(
            'orderby' => 'name',
            'show_count' => true
        ) ); ?>

      </div>
      <div class="order-1 order-md-2 col-md-7">



        <?php if ( have_posts() ) : ?>




        <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

      </div>
      <div class="col-md-3 col-lg-2 offset-lg-1 order-3">
        <div class="card no-top-border">
          <div class="col-md-6 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepaper.png"
              alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4>White Paper</h4>
            <hr>
            <p class="card-text">Download our latest whitepaper by filling out the form bellow</p>
              <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>