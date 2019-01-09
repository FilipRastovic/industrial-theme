<?php
/**
 * Template Name: Services Page
 *
 */

get_header();

$services_main_heading = get_field('services_main_heading');
$services_main_paragraph = get_field('services_main_paragraph');
$services_main_image = get_field('services_main_image');
$services_main_image_style = get_field('services_main_image_style');

$services_second_heading = get_field('services_second_heading');
$services_content = get_field('services_content');

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

$services_whitepaper_title = get_field('services_whitepaper_title');
$services_whitepaper_paragraph = get_field('services_whitepaper_paragraph');
$services_whitepaper_btn_text = get_field('services_whitepaper_btn_text');
$services_whitepaper_file_url = get_field('services_whitepaper_file_url');

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 

?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 order-2 order-md-1">
        <h1 class="mb-5"><?php echo $services_main_heading; ?></h1>
        <?php echo $services_main_paragraph; ?>
      </div>
      <div class="<?php echo $services_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
    </div>
  </div>
</header> 

<section class="service-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="order-2 order-md-1 col-md-2 sidebar-services">
        <h4 class="mb-3 sidebar-heading">Services</h4>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'services',
            'container'         => false,
            'menu_class' => 'list-group'
          ) );
        ?>
      </div>
      <div class="order-1 order-md-2 col-md-6 offset-md-1">
        <h1 class="mb-3"><?php echo $services_second_heading; ?></h1>
        <?php echo $services_content; ?>
      </div>
      <div class="col-md-3 col-lg-2 offset-lg-1 order-3">
        <div class="card card--whitepaper no-top-border">
          <div class="col-2 mx-auto col-md-6 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4><?php echo $services_whitepaper_title; ?></h4>
            <hr>
            <p class="card-text"><?php echo $services_whitepaper_paragraph; ?></p>
            <a download href="<?php echo $services_whitepaper_file_url; ?>" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $services_whitepaper_btn_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="flow-diagram bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-30">
        <h2><?php echo $flow_diagram_header; ?></h2>
        <p class="text-center"><?php echo $flow_diagram_paragraph; ?></p>

      </div>
    </div>
    <div class="row">
      <div class="d-flex flex-row mt-2">
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


<?php get_template_part('template-parts/featured-case-study'); ?>

<section class="whitepaper dark-bg mb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10">
        <h2><?php echo $services_request_consultation_heading; ?></h2>
      </div>
      <div class="col-2 d-none d-sm-none d-md-block">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/consultation.png" alt="Consultation Quote">
      </div>
      <div class="col-md-12">
        <p><?php echo $services_request_consultation_content; ?></p>
        <a href="" class="btn btn-full btn-xl btn-white js-scroll-trigger"><?php echo $services_request_consultation_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>