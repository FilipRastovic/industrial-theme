<?php
$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');
?>

<section class="featured-case-study bg-grey bg-grey--noborder-top">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-3  text-center">
        <h2 class="mb-4"><?php echo $home_featured_case_study_heading; ?></h2>
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
            <p class="card-text"><?php echo $home_featured_case_study_text; ?></p>
            <a href="" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $home_featured_case_study_btn_text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>