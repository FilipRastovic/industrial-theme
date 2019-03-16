<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
?>

<header class="header header-half bg-grey">
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

<section class="learning-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto">

        <?php if ( have_posts() ) : ?>

        <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

      </div>
      <div class="col-md-3">
        
        <div class="card p-2">
        <?php wp_list_categories( array(
              'orderby' => 'name',
              'show_count' => true
          ) ); ?>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section class="latest-posts-links bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="latest-posts-links-box">
          <h3 class="mb-2">Case Studies</h3>
            <hr class="mx-auto">
            <ul class="list-unstyled">
              <?php
              $args = array( 'post_type'=>'case_study', 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li class="mx-auto"> ' . '
                <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
              </li> ';
              }
            ?>
            </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="latest-posts-links-box">
          <h3 class="mb-2">Latest posts</h3>
            <hr class="mx-auto">
            <ul class="list-unstyled">
              <?php
              $args = array( 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li class="mx-auto"> ' . '
                <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
              </li> ';
              }
            ?>
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>