<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
$learning_center_heading = get_field('learning_center_heading');
$services_whitepaper_title = get_field('services_whitepaper_title');
$services_whitepaper_paragraph = get_field('services_whitepaper_paragraph');
?>

<header class="masthead masthead--grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5"><? echo get_the_title(); ?>
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

          if( 1 == $wp_query->current_post || ( $wp_query->current_post > 1 && $wp_query->current_post % 2  ) ):
            echo '
            <section class="whitepaper">
              <div class="container shadow padded patterned-section">
                <div class="row">
                  <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5">
                    <img class="img-fluid" src="'; echo bloginfo('template_directory'); echo '/assets/img/whitepaper.png" alt="Whitepaper">
                  </div>
                  <div class="col-md-8 content-wrapper">
                    <h2>Guide to Successfully Sourcing Suppliers from China</h2>
                    <p>In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.
                    </p>
                   '; echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]");
                   echo '
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