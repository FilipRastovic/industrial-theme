
<?php 
$home_when_heading = get_field('home_when_heading');
$home_when_reason_1 = get_field('home_when_reason_1');
$home_when_reason_2 = get_field('home_when_reason_2');
$home_when_reason_3 = get_field('home_when_reason_3');
$home_when_reason_4 = get_field('home_when_reason_4');
$home_when_reason_5 = get_field('home_when_reason_5');
$home_when_reason_6 = get_field('home_when_reason_6');
$home_when_cta = get_field('home_when_cta');
$btn_hide = get_field('btn_hide');
?>
<section class="when">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5"><?php echo $home_when_heading; ?></h2>
      </div>
      <div class="col-md-4 offset-md-2 mb-5">
        <p class="text-center"><?php echo $home_when_reason_1; ?> </p>
        <p class="text-center"><?php echo $home_when_reason_3; ?> </p>
        <p class="text-center"><?php echo $home_when_reason_5; ?> </p>
      </div>
      <div class="col-md-4 mb-5">
        <p class="text-center"><?php echo $home_when_reason_2; ?> </p>
        <p class="text-center"><?php echo $home_when_reason_4; ?> </p>
        <p class="text-center"><?php echo $home_when_reason_6; ?> </p>
      </div>
      <div class="col-12 text-center <?php echo $btn_hide; ?>">
        <a data-aos="fade-up" href="/who-we-help" class="btn btn-full btn-xl js-scroll-trigger"><?php echo $home_when_cta; ?></a>
      </div>
    </div>
  </div>
</section>