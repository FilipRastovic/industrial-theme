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

<section class="bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="mb-2">
          <?php echo $home_when_heading; ?>
        </h3>
        <hr>
        <p class="full-width mx-auto pb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusamus nisi
          aut hic enim impedit iste. In ad</p>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <img class="img-fluid mb-5" src="http://via.placeholder.com/600x400" alt="Services Img 1">
        <img class="img-fluid mb-5" src="http://via.placeholder.com/600x400" alt="Services Img 2">
      </div>
      <div class="col-md-6">
        <ol class="row ol-with-counter">
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_1; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_2; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_3; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_4; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_5; ?>
            </p>
          </li>
          <li class="list-item col-12 col-md-12">
            <h5>Heading</h5>
            <p>
              <?php echo $home_when_reason_6; ?>
            </p>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>