<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
?>

<header class="masthead masthead--grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5">10-word mission statement for
          your learning center goes here
        </h2>
      </div>
    </div>
  </div>
</header>

<section class="learning-center-copy">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-10 order-2 order-md-1">
        <?php
      if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

          if( 1 == $wp_query->current_post ):
            echo '
            <section class="whitepaper">
              <div class="container shadow padded patterned-section">
                <div class="row">
                  <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5">
                    <img class="img-fluid" src="'; echo bloginfo('template_directory'); echo '/assets/img/whitepaper.png" alt="Whitepaper">
                  </div>
                  <div class="col-md-8 content-wrapper">
                    <h2>Whitepaper</h2>
                    <p>Etiam eu dui sit amet diam posuere finibus ac ut ipsum.
                      Vivamus pharetra in urna non molestie.
                      Duis id lorem ut lacus hendrerit sodales eu id urna.
                      Pellentesque pulvinar elit et feugiat posuere.
                    </p>
                    <a href="" class="btn btn-full btn-xl js-scroll-trigger">Download</a>
                  </div>
                </div>
              </div>
            </section>
              ';
          endif;

        endwhile;
      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
      ?>

      </div>
      <div class="col-md-3 col-lg-2 order-1 order-md-2">
        
        <?php wp_list_categories( array(
            'orderby' => 'name',
            'show_count' => true
        ) ); ?>
      
    </div>
      </div>
</section>

<?php get_footer(); ?>