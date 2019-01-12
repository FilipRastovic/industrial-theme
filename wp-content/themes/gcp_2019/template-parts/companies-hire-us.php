
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

<section data-aos="fade-up" id="services" class="">
  <div class="container padded shadow bg-grey-only">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading mb-2"><?php echo $home_when_heading; ?></h2>
        <hr class="my-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <ul class="row">
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_1; ?></li>
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_2; ?></li>
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_3; ?></li>
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_4; ?></li>
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_5; ?></li>
          <li class="list-item col-12 col-md-6 "><?php echo $home_when_reason_6; ?></li>
      </ul>
    </div>
  </div>
</section>