<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
$learning_center_heading = get_field('learning_center_heading', get_option('page_for_posts'));
$learning_center_paragraph = get_field('learning_center_paragraph', get_option('page_for_posts'));
$services_whitepaper_title = get_field('services_whitepaper_title');
$services_whitepaper_paragraph = get_field('services_whitepaper_paragraph');


?>

<header class="header header--centered header-half">
  <div class="polygon-shape header--dark"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
      <h2 class="mb-3"><? echo $learning_center_heading; ?></h2>
	  <p><?php echo $learning_center_paragraph; ?></p>
      </div>
    </div>
  </div>
</header>

<section class="learning-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 order-2 order-md-1 ml-auto">
        <?php
      if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

          if( 1 < $wp_query->current_post && ( $wp_query->current_post % 3 == 0  ) ) : ?>
           
            <section class="blog-form-wrapper">
              <div class="container shadow padded">
                <div class="row">
                  <div class="col-4 offset-4 col-md-3 offset-md-1 mb-5">
                    <img class="" src="<?php echo bloginfo('template_directory') . '/assets/img/whitepaper.png'?>" alt="Whitepaper">
                  </div>
                  <div class="col-md-8 content-wrapper">
                    <h4><?php _e( 'Guide to Successfully Sourcing Suppliers from China', 'gcp_2019' ); ?></h4>
                    <p><?php _e( 'In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.', 'gcp_2019' ); ?></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contact-form-modal"><?php _e( 'Download Guide' , 'gcp_2019' ); ?></button>
                  </div>
                </div>
              </div>
            </section>
        <?php  endif;

        endwhile;
      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
      ?>

      </div>
		
      <div class="col-md-3 order-1 order-md-2 mb-3">
        
        <div class="card p-2">
        <?php wp_list_categories( array(
              'orderby' => 'name',
              'show_count' => true
          ) ); ?>
        </div>
        
      </div>
      </div>
</section>

<div class="modal fade" id="contact-form-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php _e( 'Guide to Successfully Sourcing Suppliers from China', 'gcp_2019' ); ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-12 content-wrapper">
            <p><?php _e( 'In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.', 'gcp_2019' ); ?></p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>