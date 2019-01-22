<?php
$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');
?>

<section class="featured-case-study bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-4 mx-auto mb-3">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img"> 
      </div>
      <div class="col-12 col-md-8">
        <h2 class="mb-4"><?php echo $home_featured_case_study_heading; ?></h2>
        <p class="card-text"><?php echo $home_featured_case_study_text; ?></p>
        <a href="" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $home_featured_case_study_btn_text; ?></a>
      </div>
    </div>
  </div>
</section>