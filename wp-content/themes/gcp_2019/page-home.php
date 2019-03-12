<?php
/**
 * Template Name: Home Page
 *
 */

get_header();
$home_main_heading = get_field('home_main_heading');

$home_cta_first_paragraph = get_field('home_cta_first_paragraph');
$home_cta_first_btn_text  = get_field('home_cta_first_btn_text'); 

$home_suppliers_heading = get_field('home_suppliers_heading');
$home_suppliers_content = get_field('home_suppliers_content');
$home_supplier_brand_1 = get_field('home_supplier_brand_1');
$home_supplier_brand_2 = get_field('home_supplier_brand_2'); 
$home_supplier_brand_3 = get_field('home_supplier_brand_3'); 
$home_supplier_brand_4 = get_field('home_supplier_brand_4'); 
$home_supplier_brand_5 = get_field('home_supplier_brand_5');  
$home_supplier_brand_6 = get_field('home_supplier_brand_6'); 
$home_supplier_brand_7 = get_field('home_supplier_brand_7');  
$home_supplier_description_1 = get_field('home_supplier_description_1');
$home_supplier_description_2 = get_field('home_supplier_description_2');
$home_supplier_description_3 = get_field('home_supplier_description_3');
$home_supplier_description_4 = get_field('home_supplier_description_4');
$home_supplier_description_5 = get_field('home_supplier_description_5');
$home_supplier_description_6 = get_field('home_supplier_description_6');
$home_supplier_description_7 = get_field('home_supplier_description_7');
$home_supplier_url_1 = get_field('home_supplier_url_1');
$home_supplier_url_2 = get_field('home_supplier_url_2');
$home_supplier_url_3 = get_field('home_supplier_url_3');
$home_supplier_url_4 = get_field('home_supplier_url_4');
$home_supplier_url_5 = get_field('home_supplier_url_5');
$home_supplier_url_6 = get_field('home_supplier_url_6');
$home_supplier_url_7 = get_field('home_supplier_url_7');


$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');
$featured_case_study_url = get_field('featured_case_study_url');




?>

<header class="header header--noborder bg-grey">
  <div class="polygon-shape homepage-hero-img"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
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
      <div class="col-md-4">
        <img class="img-fluid" src="http://via.placeholder.com/500x230" alt="Our Experice Image">
      </div>
      <div class="col-md-8">
        <h3>Our Expertise</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam corrupti cupiditate, ducimus sunt saepe impedit sit a eos accusantium odit, tenetur deserunt nesciunt harum temporibus ratione et. Sint, rem quae?</p>
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
      <p class="full-width mx-auto pb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusamus nisi aut hic enim impedit iste. In ad</p>
    </div>
      <div class="col-6 col-md-4 mx-auto mb-3">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img">
      </div>
      <div class="col-12 col-md-8">
        <h4 class="mb-4"><?php echo $home_featured_case_study_heading; ?></h4>
        <p class="card-text"><?php echo $home_featured_case_study_text; ?></p>
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