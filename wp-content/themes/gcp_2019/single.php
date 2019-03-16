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

<header class="header header-half bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
      <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
      </div>
    </div>
  </div>
</header>

<section class="service-page-copy-wrapper article-copy">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <?php

        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_type() );

        endwhile; 

      ?>
    </div>
  </div>
</section>

<section class="mt-5 bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="col-3 mx-auto col-md-3 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h5>
            Guide to Successfully Sourcing Suppliers from China
            </h5>
            <hr>
            <p class="card-text">
            In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.
            </p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
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

<?php
//get_sidebar();
get_footer();
