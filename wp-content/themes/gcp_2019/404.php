<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gcp_2019
 */

get_header();
?>

<header class="header h-100">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
      <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gcp_2019' ); ?></h1>
    </div>
  </div>
</header>

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
get_footer();
