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
$who_how_we_support_description_1 = get_field('who_how_we_support_description_1');
$who_how_we_support_description_2 = get_field('who_how_we_support_description_2');
$who_how_we_support_description_3 = get_field('who_how_we_support_description_3');
$who_how_we_support_description_4 = get_field('who_how_we_support_description_4');
$who_how_we_support_description_5 = get_field('who_how_we_support_description_5');
$who_how_we_support_description_6 = get_field('who_how_we_support_description_6');

$flow_diagram_header = get_field('flow_diagram_header');
$flow_diagram_paragraph = get_field('flow_diagram_paragraph'); 
$services_flow_diagram_tab_1_heading = get_field('services_flow_diagram_tab_1_heading');
$services_flow_diagram_tab_1_content = get_field('services_flow_diagram_tab_1_content');  
$services_flow_diagram_tab_2_heading = get_field('services_flow_diagram_tab_2_heading');
$services_flow_diagram_tab_2_content = get_field('services_flow_diagram_tab_2_content');  
$services_flow_diagram_tab_3_heading = get_field('services_flow_diagram_tab_3_heading');
$services_flow_diagram_tab_3_content = get_field('services_flow_diagram_tab_3_content'); 

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 
?>

<header class="header">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-5">
          <?php echo $services_main_heading; ?>
        </h1>
        <?php echo $services_main_paragraph; ?>
      </div>
      <div class="<?php echo $services_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
    </div>
  </div>
</header>

<section data-aos="fade-up" class="flow-diagram">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2>
          <?php echo $flow_diagram_header; ?>
        </h2>
        <p class="text-center mx-auto">
          <?php echo $flow_diagram_paragraph; ?>
        </p>

      </div>
    </div>
    <div class="row">
      <div class="d-flex flex-row mx-auto">
        <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
          <li class="nav-item">
            <a href="#tab-1" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">
              <?php echo $who_how_we_support_1; ?></a>
          </li>
          <li class="nav-item">
            <a href="#tab-2" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">
              <?php echo $who_how_we_support_2; ?></a>
          </li>
          <li class="nav-item">
            <a href="#tab-3" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">
              <?php echo $who_how_we_support_3; ?></a>
          </li>
          <li class="nav-item">
            <a href="#tab-4" class="nav-link" data-toggle="tab" role="tab" aria-controls="lorem">
              <?php echo $who_how_we_support_4; ?></a>
          </li>
          <li class="nav-item">
            <a href="#tab-5" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">
              <?php echo $who_how_we_support_5; ?></a>
          </li>
          <li class="nav-item">
            <a href="#tab-6" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">
              <?php echo $who_how_we_support_6; ?></a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
            <h2>
              <?php echo $who_how_we_support_1; ?>
            </h2>
            <p>
              <?php echo $who_how_we_support_description_1; ?>
            </p>
          </div>
          <div class="tab-pane fade" id="tab-2" role="tabpanel">
            <h2>
              <?php echo $who_how_we_support_2; ?>
            </h2>
            <p>
              <?php echo $who_how_we_support_description_2; ?>
            </p>
          </div>
          <div class="tab-pane fade" id="tab-3" role="tabpanel">
            <h2>
              <?php echo $who_how_we_support_3; ?>
            </h2>
            <p>
              <?php echo $who_how_we_support_description_3; ?>
            </p>
        </div>
        <div class="tab-pane" id="tab-4" role="tabpanel">
          <h2>
            <?php echo $who_how_we_support_4; ?>
          </h2>
          <p>
            <?php echo $who_how_we_support_description_4; ?>
          </p>
        </div>
        <div class="tab-pane fade" id="tab-5" role="tabpanel">
          <h2>
            <?php echo $who_how_we_support_5; ?>
          </h2>
          <p>
            <?php echo $who_how_we_support_description_5; ?>
          </p>
        </div>
        <div class="tab-pane fade" id="tab-6" role="tabpanel">
          <h2>
            <?php echo $who_how_we_support_6; ?>
          </h2>
          <p>
            <?php echo $who_how_we_support_description_6; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
 
</section>

<section class="phases bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h2 class="text-center">
        <?php echo $services_flow_diagram_tab_1_heading; ?>
      </h2>
      <p class="mx-auto">
        <?php echo $services_flow_diagram_tab_1_content ?>
      </p>
    
    <h2 class="text-center">
      <?php echo $services_flow_diagram_tab_2_heading; ?>
    </h2>
    <p class="mx-auto">
      <?php echo $services_flow_diagram_tab_2_content ?>
    </p>

   <h2 class="text-center">
  <?php echo $services_flow_diagram_tab_3_heading; ?>
  </h2>
  <p class="mx-auto">
    <?php echo $services_flow_diagram_tab_3_content ?>
  </p>
      </div>
  </div>
</div> 
</section>

<section class="">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>
          <?php echo $services_request_consultation_heading; ?>
        </h2>
      </div>
      <div class="col-12 text-center">
        <p class="mx-auto">
          <?php echo $services_request_consultation_content; ?>
        </p>
        <a id="#services-bot-form-cta" href="/landing-page" class="btn">
          <?php echo $services_request_consultation_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>