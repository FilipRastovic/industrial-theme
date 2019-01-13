<?php
/**
 * Template Name: Case Studies
 *
 */

get_header();

$case_studies_main_heading = get_field('case_studies_main_heading');
$case_studies_main_paragraph = get_field('case_studies_main_paragraph'); 
$case_studies_main_image_style = get_field('case_studies_main_image_style');
$case_studies_main_image = get_field('case_studies_main_image');
?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-7 order-2 order-md-1">
        <h1 class="mb-5"><?php echo $case_studies_main_heading; ?></h1>
        <?php echo $case_studies_main_paragraph; ?>
      </div>
      <div class="<?php echo $case_studies_main_image_style; ?>">
        <img class="img-fluid" src="<?php echo $case_studies_main_image['url']; ?>" alt="Case Study Img">
      </div>
    </div>
  </div>
</header> 

<section class="cards case-studies">
  <div class="container">
    <div class="row">
      <?php
      $loop = new WP_Query( array(
          'post_type' => 'case_study',
          'posts_per_page' => 4,
          'paged'=>$paged
        )
      );
      ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
      <div class="col-md-6">
        <?php get_template_part( 'template-parts/content', get_post_type() );?>
      </div>



      <?php endwhile;  ?>
    </div>
  </div>
</section>

<section class="learning-center-copy bg-grey">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 offset-md-2 pt-5">

        <?php
      $loop_bottom = new WP_Query( array(
          'post_type' => 'case_study',
          'posts_per_page' => 10,
          'paged'=>$paged
        )
      );
      ?>

        <?php while ( $loop_bottom->have_posts() ) : $loop_bottom->the_post();  ?>
        <?php if( 3 < $loop_bottom->current_post ):
         get_template_part( 'template-parts/content', get_post_type() );?>

        <?php endif; ?>
        <?php endwhile;?>

      </div>
    </div>
  </div>
</section>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="new-form-wrapper">
          <h4 class="text-center">Fill Out The form</h4>
          <hr>
          <p class=" text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                    data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                    data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required"
                    data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                    data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                    data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>