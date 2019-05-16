<?php 
$home_when_heading = get_field('home_when_heading');
$home_when_reason_1 = get_field('home_when_reason_1');
$home_when_reason_1_heading = get_field('home_when_reason_1_heading');
$home_when_reason_2 = get_field('home_when_reason_2');
$home_when_reason_2_heading = get_field('home_when_reason_2_heading');
$home_when_reason_3 = get_field('home_when_reason_3');
$home_when_reason_3_heading = get_field('home_when_reason_3_heading');
$home_when_reason_4 = get_field('home_when_reason_4');
$home_when_reason_4_heading = get_field('home_when_reason_4_heading');
$home_when_reason_5 = get_field('home_when_reason_5');
$home_when_reason_5_heading = get_field('home_when_reason_5_heading');
$home_when_reason_6 = get_field('home_when_reason_6');
$home_when_reason_6_heading = get_field('home_when_reason_6_heading');
$home_when_cta = get_field('home_when_cta');

$first_image = get_field('first_image');
$second_image = get_field('second_image');
$home_when_paragraph = get_field('home_when_paragraph');

$has_shadow_2 = get_field('has_shadow_2');
$has_shadow_3 = get_field('has_shadow_3');
?>

<section class="bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="mb-2">
          <?php echo $home_when_heading; ?>
        </h3>
        <hr>
        <p class="full-width mx-auto pb-60"><?php echo $home_when_paragraph; ?></p>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <img class="img-fluid mb-5 <?php if ( $has_shadow_2 ) { echo 'shadowed'; } ?>" src="<?php echo $first_image['url']; ?>" alt="Services Img 1">
        <img class="img-fluid mb-5 <?php if ( $has_shadow_3 ) { echo 'shadowed'; } ?>" src="<?php echo $second_image['url']; ?>" alt="Services Img 2">
      </div>
      <div class="col-md-6">
        <ol class="row ol-with-counter">
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_1_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_1; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_2_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_2; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_3_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_3; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_4_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_4; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_5_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_5; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5><?php echo $home_when_reason_6_heading; ?></h5>
            <p>
              <?php echo $home_when_reason_6; ?>
            </p>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>