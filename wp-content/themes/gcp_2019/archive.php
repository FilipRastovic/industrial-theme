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
      <div class="order-2 order-md-1 col-md-2">
        <h4 class="mb-3">Filter by category</h4>
        <ul class="list-group">
          <li class="list-group-item active">Vivamus pharetra</li>
          <li class="list-group-item">In urna non</li>
          <li class="list-group-item">Duis id lorem</li>
          <li class="list-group-item">Ut lacus</li>
          <li class="list-group-item">Hendrerit sodales</li>
          <li class="list-group-item">Eu id urna</li>
          <li class="list-group-item">Pellentesque pulvinar</li>
          <li class="list-group-item">Elit et feugiat</li>
        </ul>
        <h4 class="mb-3">Filter by type</h4>
        <ul class="list-group">
          <li class="list-group-item">Article</li>
          <li class="list-group-item">White paper</li>
          <li class="list-group-item">Video</li>
          <li class="list-group-item">Calculator</li>
          <li class="list-group-item">Webinar</li>
        </ul>
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>
  </div>
</section>

<?php get_footer(); ?>