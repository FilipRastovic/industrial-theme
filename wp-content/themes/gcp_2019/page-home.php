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
$home_supplier_brand_8 = get_field('home_supplier_brand_8');  

?>

<header class="masthead--home d-flex">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-2 mx-auto">
          <h1 class="text-uppercase">
            <?php echo $home_main_heading; ?>
          </h1>
      </div>
    </div>
  </div>
</header>

<section class="cta dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p class="text-center mb-5">
          <?php echo $home_cta_first_paragraph; ?>
        </p>
        <a href="/who-we-help" class="btn btn-full btn-xl btn-white js-scroll-trigger"><?php echo $home_cta_first_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/companies-hire-us'); ?>

<section class="suppliers bg-grey bg-grey--noborder-bot">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5"><?php echo $home_suppliers_heading; ?></h2>
        <?php echo $home_suppliers_content; ?>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_1['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_2['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_3['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_4['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_5['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_6['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_7['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-3 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_8['url']; ?>" alt="Supplier Logo"></div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/featured-case-study'); ?>


<section class="latest-posts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-2">
        <h3 class="mb-2">Case Studies</h3>
        <hr>
        <ul class="list-unstyled">
          <li>Heading of the first latest post goes here</li>
          <li>Heading of the second latest post goes here</li>
          <li>Heading of the third lastest post goes here</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3 class="mb-2">Latest posts</h3>
        <hr>
        <ul class="list-unstyled">
          <li>Heading of the first latest post goes here</li>
          <li>Heading of the second latest post goes here</li>
          <li>Heading of the third lastest post goes here</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>