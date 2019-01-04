<?php
/**
 * Template Name: Services Page
 *
 */

get_header();

$services_main_heading = get_field('services_main_heading');
$services_main_paragraph = get_field('services_main_paragraph');
$services_main_image = get_field('services_main_image');

$services_second_heading = get_field('services_second_heading');
$services_content = get_field('services_content');

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

$services_request_consultation_heading = get_field('services_request_consultation_heading');
$services_request_consultation_content = get_field('services_request_consultation_content');
$services_request_consultation_btn_text = get_field('services_request_consultation_btn_text'); 

?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 order-2 order-md-1">
        <h1 class="mb-5">H1 Title of article goes 
            here<?php echo $services_main_heading; ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sit, earum reiciendis 
          neque officia incidunt quasi obcaecati exercitationem autem nam culpa velit odit? Adipisci 
          quia qui cupiditate. Necessitatibus, voluptate quo.
          <?php echo $services_main_paragraph; ?>
        </p>
      </div>
      <div class="col-6 mx-auto col-md-4 order-1 order-md-2 mb-5">
        <img class="img-fluid" src="<?php echo $services_main_image['url']; ?>" alt="Service Img">
      </div>
      <!-- <div class="col-6 mx-auto col-md-3 order-1 order-md-2 mb-5">
        <img class="img-fluid" src="assets/img/services/supplier-sourcing.png" alt="">
      </div> -->
      <!-- <div class="col-2 offset-1">
        <img class="img-fluid" src="assets/img/services/supplier-audit.png" alt="">
      </div> -->
    </div>
  </div>
</header> 

<section class="service-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="order-2 order-md-1 col-md-2">
        <h4 class="mb-3">Services</h4>
        <!-- <ul class="list-group">
          <li class="list-group-item active">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
          <li class="list-group-item">Dapibus ac facilisis</li>
          <li class="list-group-item">Morbi leo risus</li>
        </ul> -->
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'Services',
            'container'         => false,
            'menu_class' => 'list-group'
          ) );
        ?>
      </div>
      <div class="order-1 order-md-2 col-md-6 offset-md-1">
        <h1 class="mb-3">H1 Headline goes here<?php echo $services_second_heading; ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
          fugiat, adipisci laudantium eos itaque ut, sit voluptate rerum. Pariatur sunt officia sint enim. Amet?
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil eum corporis nisi est hic totam molestiae
          deleniti doloremque et reprehenderit amet dicta aperiam laboriosam unde eligendi doloribus quisquam, facere
          debitis!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti
          placeat
          fugiat, adipisci laudantium eos itaque ut, sit voluptate rerum. Pariatur sunt officia sint enim. Amet?
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil eum corporis nisi est hic totam molestiae
          deleniti doloremque et reprehenderit amet dicta aperiam laboriosam unde eligendi doloribus quisquam, facere
          debitis!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi animi ut vel. Nam facilis quasi ex qui
          praesentium, sapiente nostrum itaque pariatur, temporibus quidem, delectus quaerat. Veniam laboriosam
          commodi nulla!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi animi ut vel. Nam facilis quasi
          ex qui
          praesentium, sapiente nostrum itaque pariatur, temporibus quidem, delectus quaerat. Veniam laboriosam
          commodi nulla!</p>
          <?php echo $services_content; ?>
      </div>
      <div class="col-md-3 col-lg-2 offset-lg-1 order-3">
        <div class="card no-top-border">
          <div class="col-md-6 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h4>White Paper Title<?php echo $services_whitepaper_title; ?></h4>
            <hr>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.<?php echo $services_whitepaper_paragraph; ?></p>
            <a href="" class="btn btn-full btn-xl btn-white js-scroll-trigger">Download<?php echo $services_whitepaper_btn_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="flow-diagram bg-grey">
  <div class="container">
    <div class="row">
      <div class="d-flex flex-row mt-2">
        <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
          <li class="nav-item">
            <a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">Lorem<?php echo $services_flow_diagram_tab_1; ?></a>
          </li>
          <li class="nav-item">
            <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Ipsum<?php echo $services_flow_diagram_tab_2; ?></a>
          </li>
          <li class="nav-item">
            <a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Sit Amet<?php echo $services_flow_diagram_tab_3; ?></a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="lorem" role="tabpanel">
            <h1>Lorem<?php echo $services_flow_diagram_tab_1_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_1_content ?>Aliquam hendrerit nunc vitae nisi efficitur, eu porta sem aliquam. Aenean tincidunt mi sed mi sodales bibendum. Proin dolor ipsum, mollis venenatis velit eu, iaculis laoreet mi. Mauris eget egestas felis, sit amet finibus nunc. Aliquam non dui sit amet erat auctor mollis ac eget ante. Quisque at quam augue. Nulla dignissim, augue nec cursus consequat, mi nulla efficitur augue, vel fringilla turpis quam eu nunc. Quisque rutrum vehicula lacus sodales molestie. Mauris vel felis sit amet erat maximus cursus ut a velit. In hac habitasse platea dictumst. Vestibulum vel neque sit amet nisl finibus fermentum.</p>   </div>
          <div class="tab-pane fade" id="ipsum" role="tabpanel">
            <h1>Ipsum<?php echo $services_flow_diagram_tab_2_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_2_content ?>Aliquam hendrerit nunc vitae nisi efficitur, eu porta sem aliquam. Aenean tincidunt mi sed mi sodales bibendum. Proin dolor ipsum, mollis venenatis velit eu, iaculis laoreet mi. Mauris eget egestas felis, sit amet finibus nunc. Aliquam non dui sit amet erat auctor mollis ac eget ante. Quisque at quam augue. Nulla dignissim, augue nec cursus consequat, mi nulla efficitur augue, vel fringilla turpis quam eu nunc. Quisque rutrum vehicula lacus sodales molestie. Mauris vel felis sit amet erat maximus cursus ut a velit. In hac habitasse platea dictumst. Vestibulum vel neque sit amet nisl finibus fermentum.</p></div>
          <div class="tab-pane fade" id="sit-amet" role="tabpanel">
            <h1>Sit Amet<?php echo $services_flow_diagram_tab_3_heading; ?></h1>
            <p><?php echo $services_flow_diagram_tab_3_content ?>Aliquam hendrerit nunc vitae nisi efficitur, eu porta sem aliquam. Aenean tincidunt mi sed mi sodales bibendum. Proin dolor ipsum, mollis venenatis velit eu, iaculis laoreet mi. Mauris eget egestas felis, sit amet finibus nunc. Aliquam non dui sit amet erat auctor mollis ac eget ante. Quisque at quam augue. Nulla dignissim, augue nec cursus consequat, mi nulla efficitur augue, vel fringilla turpis quam eu nunc. Quisque rutrum vehicula lacus sodales molestie. Mauris vel felis sit amet erat maximus cursus ut a velit. In hac habitasse platea dictumst. Vestibulum vel neque sit amet nisl finibus fermentum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('template-parts/featured_case_study'); ?>

<section class="whitepaper dark-bg mb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10">
        <h2>Requeset a consultation<?php echo $services_request_consultation_heading; ?></h2>
      </div>
      <div class="col-2 d-none d-sm-none d-md-block">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/consultation.png" alt="Consultation Quote">
      </div>
      <div class="col-md-12">
        <p><?php echo $services_request_consultation_content; ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nulla veritatis provident! Nemo aliquid
          voluptatem dignissimos praesentium consequatur. Quo obcaecati facilis nihil, ad iusto corrupti impedit
          asperiores natus exercitationem. Debitis? Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Provident consectetur ullam deserunt quam sed repellat quasi optio accusamus, eligendi autem maiores
          alias eaque. Aut deleniti repellat atque, voluptatibus necessitatibus deserunt.</p>
        <a href="" class="btn btn-full btn-xl btn-white js-scroll-trigger"><?php echo $services_request_consultation_btn_text; ?>Download</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>