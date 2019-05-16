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

$content_section_1_heading = get_field('content_section_1_heading');
$content_section_1_paragraph = get_field('content_section_1_paragraph'); 
$content_section_2_heading = get_field('content_section_2_heading');
$content_section_2_paragraph = get_field('content_section_2_paragraph'); 
?>

<header class="header header--centered">
  <div class="polygon-shape header--dark"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-3">
          <?php echo $who_main_heading; ?>
        </h2>
        <p>
          <?php  echo $who_main_paragraph; ?>
        </p>
      </div>
    </div>
  </div>
</header>

<section class="">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-page-copy-wrapper">
          <h3 class="mb-3"><?php echo $content_section_1_heading; ?></h3>
          <hr>
		 <p>
			<?php echo $content_section_1_paragraph; ?>  
		 </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-grey">
  <div class="container ">
    <div class="row">
      <div class="col-md-8">
      <h2 class="mb-3">
          <?php echo $who_how_we_support_heading; ?>
        </h2>
        <p>
          <?php echo $who_how_we_support_paragraph; ?>
        </p>
      </div>
      <div class="col-md-4">
        <ul class="how-we-support-our-clients-list">
          <li class="list-item"><a href="/supplier-sourcing">
              <?php echo $who_how_we_support_1; ?></a></li>
          <li class="list-item"><a href="/supplier-auditing">
              <?php echo $who_how_we_support_2; ?></a></li>
          <li class="list-item"><a href="/offshore-order-management/">
              <?php echo $who_how_we_support_3; ?></a></li>
          <li class="list-item"><a href="/quality-control">
            <?php echo $who_how_we_support_4; ?></a></li>
          <li class="list-item"><a href="/material-and-product-development/">
            <?php echo $who_how_we_support_5; ?></a></li>
          <li class="list-item"><a href="/brokerage-and-logistics">
            <?php echo $who_how_we_support_6; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-5 text-center">
          <?php echo $who_what_makes_us; ?>
        </h2>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title text-center">
              <?php echo $who_what_makes_us_title_1; ?>
            </h4>
            <hr>
            <p class="card-text">
              <?php echo $who_what_makes_us_paragraph_1 ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 ">
          <div class="card-body">
            <h4 class="card-title text-center">
              <?php echo $who_what_makes_us_title_2; ?>
            </h4>
            <hr>
            <p class="card-text">
              <?php echo $who_what_makes_us_paragraph_2 ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 ">
          <div class="card-body">
            <h4 class="card-title text-center">
              <?php echo $who_what_makes_us_title_3; ?>
            </h4>
            <hr>
            <p class="card-text">
              <?php echo $who_what_makes_us_paragraph_3 ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-page-copy-wrapper">
          <h3 class="mb-3"><?php echo $content_section_2_heading; ?></h3>
          <hr>
		 <p>
			<?php echo $content_section_2_paragraph; ?>  
		 </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="whitepaper self-assessment pb-30">
  <div class="container ">
    <div class="row">
      <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5 text-center">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/self-assessment.png" alt="Whitepaper">
      </div>
      <div class="col-md-8 content-wrapper">
        <h2>
          <?php echo $self_assessment_title; ?>
        </h2>
        <p>
          <?php echo $self_assessment_paragraph; ?>
        </p>
        <a data-toggle="modal" data-target="#self-assessment-modal" class="btn">
          <?php echo $self_assessment_btn_label; ?></a>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="self-assessment-modal" tabindex="-1" role="dialog" aria-labelledby="self-assessment-modal-label"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="self-assessment-modal-label">Self Assessment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode("[qsm quiz=1]"); ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>