<?php
/**
 * Template Name: Who We Help Page
 *
 */

get_header();
$who_main_heading = get_field('who_main_heading');
$who_main_paragraph = get_field('who_main_paragraph');

$who_how_we_support_heading = get_field('who_how_we_support_heading');
$who_how_we_support_paragraph = get_field('who_how_we_support_paragraph');
$who_how_we_support_1 = get_field('who_how_we_support_1');
$who_how_we_support_2 = get_field('who_how_we_support_2');
$who_how_we_support_3 = get_field('who_how_we_support_3');
$who_how_we_support_4 = get_field('who_how_we_support_4');
$who_how_we_support_5 = get_field('who_how_we_support_5');
$who_how_we_support_6 = get_field('who_how_we_support_6');

$who_what_makes_us = get_field('who_what_makes_us');
$who_what_makes_us_title_1 = get_field('who_what_makes_us_title_1');
$who_what_makes_us_paragraph_1 = get_field('who_what_makes_us_paragraph_1');
$who_what_makes_us_title_2 = get_field('who_what_makes_us_title_2');
$who_what_makes_us_paragraph_2 = get_field('who_what_makes_us_paragraph_2');
$who_what_makes_us_title_3 = get_field('who_what_makes_us_title_3');
$who_what_makes_us_paragraph_3 = get_field('who_what_makes_us_paragraph_3');

$self_assessment_title = get_field('self_assessment_title');
$self_assessment_paragraph = get_field('self_assessment_paragraph');
$self_assessment_btn_label = get_field('self_assessment_btn_label'); 


?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-5">
          <?php echo $who_main_heading; ?>
        </h1>
        <p>
          <?php  echo $who_main_paragraph; ?> 
        </p>
      </div>
    </div>
  </div>
</header>

<?php get_template_part('template-parts/companies-hire-us'); ?>

<section data-aos="fade-up" class="how dark-bg">
  <div class="container shadow padded patterned-section">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-5"><?php echo $who_how_we_support_heading; ?></h2>
        <p class="text-center"><?php echo $who_how_we_support_paragraph; ?></p>
      </div>
      <div class="col-md-12">
      <ul class="row mx-auto">
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/supplier-sourcing"><?php echo $who_how_we_support_1; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/supplier-audits"><?php echo $who_how_we_support_2; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/order-management"><?php echo $who_how_we_support_3; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/quality-control"><?php echo $who_how_we_support_4; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/material-and-product-development/"><?php echo $who_how_we_support_5; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/brokerage-and-logistics"><?php echo $who_how_we_support_6; ?></a></li>
      </ul>
    </div>
    </div>
  </div>
</section>

<section data-aos="fade-up" class="cards">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-5 text-center"><?php echo $who_what_makes_us; ?></h2>
      </div>
      <div class="col-md-4">
        <div class="card mb-5">
          <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_1; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_1 ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-5">
        <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_2; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_2 ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-5">
        <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_3; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_3 ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-aos="fade-up" class="whitepaper self-assessment mb-50">
  <div class="container shadow padded patterned-section">
    <div class="row">
      <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/self-assessment.png" alt="Whitepaper">
      </div>
      <div class="col-md-8 content-wrapper">
        <h2><?php echo $self_assessment_title; ?></h2>
        <p><?php echo $self_assessment_paragraph; ?></p>
        <a href="" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $self_assessment_btn_label; ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>