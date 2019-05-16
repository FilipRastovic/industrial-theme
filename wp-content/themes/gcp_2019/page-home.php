<?php
/**
 * Template Name: Home Page
 *
 */

get_header();
$home_main_heading = get_field('home_main_heading');

$home_cta_first_paragraph = get_field('home_cta_first_paragraph');
$home_cta_first_btn_text  = get_field('home_cta_first_btn_text'); 

$backgroundImage = get_field('backgroundImage');

$our_expertice_section_heading = get_field('our_expertice_section_heading');
$our_expertise_section_image = get_field('our_expertise_section_image');
$our_expertise_section_paragraph = get_field('our_expertise_section_paragraph');


$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_subheading = get_field('home_featured_case_study_subheading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');
$featured_case_study_url = get_field('featured_case_study_url');

$has_shadow_1 = get_field('has_shadow_1');




?>

<header class="header header--centered">
  <div class="polygon-shape homepage-hero-img" style="background-image: url(<?php echo $backgroundImage['url']; ?> );"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="">
          <?php echo $home_main_heading; ?>
        </h1>
       <p class="">
          <?php echo $home_cta_first_paragraph; ?>
		  </p>
        <a class="btn" href="/who-we-help">
          <?php echo $home_cta_first_btn_text; ?>
        </a>
      </div>
    </div>
  </div>
</header>

<section class="our-expertise">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-right">
        <img class="img-fluid <?php if ( $has_shadow_1 ) { echo 'shadowed'; } ?>" src="<?php echo $our_expertise_section_image['url']; ?>" alt="Our Experice Image">
      </div>
      <div class="col-md-8">
        <h3><?php echo $our_expertice_section_heading; ?></h3>
        <p><?php echo $our_expertise_section_paragraph; ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/companies-hire-us'); ?>

<section class="featured-case-study">
  <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="mb-2">Featured Case Study</h3>
      <hr>
      <p class="mx-auto p{max-width:700px;width:700px;}"><?php echo $home_featured_case_study_subheading; ?></p>
		<br>
		<br>
    </div>
      <div class="col-6 col-md-4 mx-auto mb-3">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img">
      </div>
      <div class="col-12 col-md-8">
        <h4 class="mb-4"><?php echo $home_featured_case_study_heading; ?></h4>
        <p class=""><?php echo $home_featured_case_study_text; ?></p>
        <a href="<?php echo $featured_case_study_url; ?>" class="btn btn-full btn-xl js-scroll-trigger">
          <?php echo $home_featured_case_study_btn_text; ?>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="latest-posts-links bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="latest-posts-links-box mx-auto">
          <h3 class="mb-2"><?php _e( 'Case Studies', 'industrial-theme' ); ?></h3>
            <hr align='left'>
            <ul class="list-unstyled">
              <?php
              $args = array( 'post_type'=>'case_study', 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li class=""> ' . '
                <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
              </li> ';
              }
            ?>
            </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="latest-posts-links-box mx-auto">
          <h3 class="mb-2"><?php _e( 'Latest posts', 'industrial-theme' ); ?></h3>
            <hr align='left'>
            <ul class="list-unstyled">
              <?php
              $args = array( 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li class=""> ' . '
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