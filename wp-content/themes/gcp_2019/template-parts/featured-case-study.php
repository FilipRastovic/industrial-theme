<?php
$home_featured_case_study_heading = get_field('home_featured_case_study_heading');
$home_featured_case_study_img = get_field('home_featured_case_study_img');
$home_featured_case_study_text = get_field('home_featured_case_study_text'); 
$home_featured_case_study_btn_text = get_field('home_featured_case_study_btn_text');
?>

<section class="featured-case-study">
  <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="mb-2">Featured Case Study</h3>
      <hr>
      <p class="full-width mx-auto pb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusamus nisi aut hic enim impedit iste. In ad</p>
    </div>
      <div class="col-6 col-md-4 mx-auto mb-3">
        <img class="img-fluid" src="<?php echo $home_featured_case_study_img['url']; ?>" alt="Testimonial Img">
      </div>
      <div class="col-12 col-md-8">
        <h4 class="mb-4"><?php echo $home_featured_case_study_heading; ?></h4>
        <p class="card-text"><?php echo $home_featured_case_study_text; ?></p>
        <a href="<?php echo $featured_case_study_url; ?>" class="btn btn-full btn-xl js-scroll-trigger">
          <?php echo $home_featured_case_study_btn_text; ?>
        </a>
      </div>
    </div>
  </div>
</section>