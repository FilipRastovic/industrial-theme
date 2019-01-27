<?php
/**
 * Template Name: Services Overview
 *
 */

get_header();

$services_main_heading = get_field('services_main_heading');
$services_main_paragraph = get_field('services_main_paragraph');
$services_main_image = get_field('services_main_image');
$services_main_image_style = get_field('services_main_image_style');

$services_main_heading = get_field('services_main_heading');
$services_main_paragraph = get_field('services_main_paragraph');
$services_main_image_style = get_field('services_main_image_style');
$services_main_image = get_field('services_main_image');
$who_how_we_support_heading = get_field('who_how_we_support_heading');
$who_how_we_support_paragraph = get_field('who_how_we_support_paragraph');
$who_how_we_support_1 = get_field('who_how_we_support_1');
$who_how_we_support_2 = get_field('who_how_we_support_2');
$who_how_we_support_3 = get_field('who_how_we_support_3');
$who_how_we_support_4 = get_field('who_how_we_support_4');
$who_how_we_support_5 = get_field('who_how_we_support_5');
$who_how_we_support_6 = get_field('who_how_we_support_6');

$flow_diagram_header = get_field('flow_diagram_header');
$flow_diagram_paragraph = get_field('flow_diagram_paragraph'); 
$services_flow_diagram_tab_1 = get_field('services_flow_diagram_tab_1');
$services_flow_diagram_tab_1_heading = get_field('services_flow_diagram_tab_1_heading');
$services_flow_diagram_tab_1_content = get_field('services_flow_diagram_tab_1_content');  
$services_flow_diagram_tab_2 = get_field('services_flow_diagram_tab_2');
$services_flow_diagram_tab_2_heading = get_field('services_flow_diagram_tab_2_heading');
$services_flow_diagram_tab_2_content = get_field('services_flow_diagram_tab_2_content');  
$services_flow_diagram_tab_3 = get_field('services_flow_diagram_tab_3');
$services_flow_diagram_tab_3_heading = get_field('services_flow_diagram_tab_3_heading');
$services_flow_diagram_tab_3_content = get_field('services_flow_diagram_tab_3_content'); 

$lp_form_heading = get_field('lp_form_heading');
$lp_form_paragraph = get_field('lp_form_paragraph');
?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-5"><?php echo $services_main_heading; ?></h1>
        <?php echo $services_main_paragraph; ?>
      </div>
      <div class="<?php echo $services_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
    </div>
  </div>
</header> 

<section data-aos="fade-up" class="how">
  <div class="container">
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

<section data-aos="fade-up" class="flow-diagram bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2><?php echo $flow_diagram_header; ?></h2>
        <p class="text-center"><?php echo $flow_diagram_paragraph; ?></p>

      </div>
    </div>
    <div class="row">
      <div class="d-flex flex-row">
        <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
          <li class="nav-item">
            <a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem"><?php echo $services_flow_diagram_tab_1; ?></a>
          </li>
          <li class="nav-item">
            <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum"><?php echo $services_flow_diagram_tab_2; ?></a>
          </li>
          <li class="nav-item">
            <a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet"><?php echo $services_flow_diagram_tab_3; ?></a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="lorem" role="tabpanel">
            <h1><?php echo $services_flow_diagram_tab_1_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_1_content ?></div>
          <div class="tab-pane fade" id="ipsum" role="tabpanel">
            <h1><?php echo $services_flow_diagram_tab_2_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_2_content ?></p></div>
          <div class="tab-pane fade" id="sit-amet" role="tabpanel">
            <h1><?php echo $services_flow_diagram_tab_3_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_3_content ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="new-form-wrapper">
          <h4 class="text-center"><?php echo $lp_form_heading; ?></h4>
          <hr>
          <p class=" text-center"><?php echo $lp_form_paragraph;?></p>
          <?php echo do_shortcode("[hubspot type=form portal=4643163 id=b1bf8f5d-7c79-4434-ac4d-510135075ae5]"); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>