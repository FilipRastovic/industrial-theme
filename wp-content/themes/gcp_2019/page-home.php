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

<header class="masthead masthead--home masthead--noborder bg-grey polygon">
  <div class="header__bg hero-img"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1 class="">
          <?php echo $home_main_heading; ?>
        </h1>
        <p class="">
          <?php echo $home_cta_first_paragraph; ?>
        </p>
        <a class="btn btn-full btn-xl js-scroll-trigger" href="/who-we-help">
          <?php echo $home_cta_first_btn_text; ?></a>
      </div>
    </div>
  </div>
</header>

<?php get_template_part('template-parts/companies-hire-us'); ?>

<section class="suppliers bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto text-center">
        <h2 class="mb-2">
          <?php echo $home_suppliers_heading; ?>
        </h2>
        <hr class="">
        <?php echo $home_suppliers_content; ?>
      </div>
    </div>
    <div class="row mt-4 mx-auto">
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_1 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_1['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_1 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_2 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_2['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_2 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_3 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_3['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_3 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_4 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_4['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_4 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_5 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_5['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_5 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_6 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_6['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_6 ?>
        </a>
      </div>
      <div class="col-6 col-md-3 mx-auto text-center mb-5">
        <a href="<?php echo $home_supplier_url_7 ?>" target="_blank">
          <img class="img-fluid" src="<?php echo $home_supplier_brand_7['url']; ?>" alt="Supplier Logo"><?php echo $home_supplier_description_7 ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="featured-case-study">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-4 mx-auto mb-3">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img">
      </div>
      <div class="col-12 col-md-8">
        <h2 class="mb-4">
          <?php echo $home_featured_case_study_heading; ?>
        </h2>
        <p class="card-text">
          <?php echo $home_featured_case_study_text; ?>
        </p>
        <a href="<?php echo $featured_case_study_url; ?>" class="btn btn-full btn-xl js-scroll-trigger">
          <?php echo $home_featured_case_study_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>


<section class="latest-posts bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="custom-card padded custom-card--left">
          <h2 class="mb-2">Case Studies</h3>
            <hr class="goto-left">
            <ul>
              <?php
              $args = array( 'post_type'=>'case_study', 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li> ' . '
                <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
              </li> ';
              }
            ?>
            </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="custom-card padded custom-card--right">
          <h2 class="mb-2">Latest posts</h3>
            <hr class="goto-left">
            <ul>
              <?php
              $args = array( 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );

              foreach( $recent_posts as $recent ){
              echo 
              '<li> ' . '
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