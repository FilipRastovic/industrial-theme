<?php
/**
 * Template Name: Home Page
 *
 */

get_header();
$home_main_heading = get_field('home_main_heading');

$home_cta_first_paragraph = get_field('home_cta_first_paragraph');
$home_cta_first_btn_text  = get_field('home_cta_first_btn_text'); 

$home_when_heading = get_field('home_when_heading');
$home_when_reason_1 = get_field('home_when_reason_1');
$home_when_reason_2 = get_field('home_when_reason_2');
$home_when_reason_3 = get_field('home_when_reason_3');
$home_when_reason_4 = get_field('home_when_reason_4');
$home_when_reason_5 = get_field('home_when_reason_5');
$home_when_reason_6 = get_field('home_when_reason_6');
$home_when_cta = get_field('home_when_cta');

$home_suppliers_heading = get_field('home_suppliers_heading');
$home_supplier_brand_1 = get_field('home_supplier_brand_1');
$home_supplier_brand_2 = get_field('home_supplier_brand_2'); 
$home_supplier_brand_3 = get_field('home_supplier_brand_3'); 
$home_supplier_brand_4 = get_field('home_supplier_brand_4'); 
$home_supplier_brand_5 = get_field('home_supplier_brand_5'); 
$home_supplier_brand_6 = get_field('home_supplier_brand_6');  

$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');



?>

<header class="masthead--home d-flex">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-2 mx-auto">
          <h1 class="text-uppercase">
            Global<br>Sourcing <br>Engineers
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
        <p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex nihil sequi aut est quae totam
          obcaecati placeat iste, et at perspiciatis quo ipsum omnis maiores sint recusandae. Sint eos voluptatem
          est?
          <?php echo $home_cta_first; ?>
        </p>
        <a href="who-we-help.html" class="btn btn-full btn-xl btn-white js-scroll-trigger">Learn More <?php echo $home_cta_first_btn_text; ?> </a>
      </div>
    </div>
  </div>
</section>

<section class="when">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5">Companies hire us when they're are<?php echo $home_when_heading; ?></h2>
      </div>
      <div class="col-md-4 offset-md-2 mb-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_1; ?> </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_3; ?> </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_5; ?> </p>
      </div>
      <div class="col-md-4 mb-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_2; ?> </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_4; ?> </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <?php echo $home_when_reason_6; ?> </p>
      </div>
      <div class="col-12 text-center">
        <a data-aos="fade-up" href="who-we-help.html" class="btn btn-full btn-xl js-scroll-trigger">Learn More<?php echo $home_when_cta; ?></a>
      </div>
    </div>
  </div>
</section>

<section class="suppliers bg-grey bg-grey--noborder-bot">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5">Source from One of our Existing Suppliers<?php echo $home_suppliers_heading; ?></h2>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_1['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_2['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_3['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_4['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_5['url']; ?>" alt="Supplier Logo"></div>
      <div class="col-6 col-md-4 text-center mb-5"><img class="img-fluid" src="<?php echo $home_supplier_brand_6['url']; ?>" alt="Supplier Logo"></div>
    </div>
  </div>
</section>

<section class="featured-case-study bg-grey bg-grey--noborder-top">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-3  text-center">
        <h2 class="mb-4">Featured case study<?php echo $home_featured_case_study_heading; ?></h2>
      </div>
      <div class="col-4 offset-4 col-md-3 offset-md-0">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img"> <!-- assets/img/450x450.png -->
      </div>
      <div class="col-3 col-md-1">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/quote.png" alt="Quote">
      </div>
      <div class="col-md-8">
        <div class="card mb-5">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.<?php echo $home_featured_case_study_text; ?></p>
            <a href="" class="btn btn-full btn-xl js-scroll-trigger">View Case Study<?php echo $home_featured_case_study_btn_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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