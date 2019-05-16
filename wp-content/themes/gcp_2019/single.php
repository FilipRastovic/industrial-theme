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

<header class="header header--centered header-half">
  <div class="polygon-shape header--dark"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
      <?php the_title( '<h2 class="entry-title" style="color:white">', '</h2>' );?>
      </div>
    </div>
  </div>
</header>

<section class="service-page-copy-wrapper article-copy">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12">
      <?php

        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_type() );

        endwhile; 

      ?>
    </div>
  </div>
</section>

<section class="whitepaper self-assessment pb-30 bg-grey">
  <div class="container ">
    <div class="row">
      <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5 text-center">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>//assets/img/whitepaper.png" alt="Whitepaper">
      </div>
      <div class="col-md-8 content-wrapper">
        <h2>
          <?php _e( 'Guide to Successfully Sourcing Suppliers from China', 'gcp_2019' ); ?>
        </h2>
        <p>
        <?php _e( 'In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.', 'gcp_2019' ); ?>
        </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contact-form-modal"><?php _e( 'Download Guide' , 'gcp_2019' ); ?></button>
      </div>
    </div>
  </div>
</section>

<section class="latest-posts-links">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="latest-posts-links-box">
          <h3 class="mb-2">Case Studies</h3>
            <hr align="left">
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
            <hr align="left">
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

<?php
//get_sidebar();
get_footer();
