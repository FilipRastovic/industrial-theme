<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gcp_2019
 */

get_header();

$default_page_heading = get_field('default_page_heading');
$default_page_paragraph = get_field('default_page_paragraph');

$default_page_content_heading = get_field('default_page_content_heading'); 
$default_page_content = get_field('default_page_content');

?>

<header class="header header--centered">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="">
          <?php echo $default_page_heading; ?>  
        </h1>
        <p class="">
          <?php echo $default_page_paragraph; ?>
        </p>
      </div>
    </div>
  </div>
</header>

<section class="service-copy">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-page-copy-wrapper">
          <h2 class="mb-3"><?php echo $default_page_content_heading; ?></h2>
          <?php echo $default_page_content; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="col-3 mx-auto col-md-3 offset-md-3 text-center">
            <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/whitepaper.png" alt="Card image cap">
          </div>
          <div class="card-body text-center">
            <h5>
              Guide to Successfully Sourcing Suppliers from China
            </h5>
            <hr>
            <p class="card-text">
            In this guide you will find all the steps, detailed processes and tools to take before working with a supplier from China.
            </p>
            <?php echo do_shortcode("[hubspot type=form portal=4643163 id=6d527de3-5434-4d32-809b-36c39bcd6976]"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
