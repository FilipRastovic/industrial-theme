<?php
/**
 * Template Name: Who We Help Page
 *
 */

get_header();
$who_main_heading = get_field('who_main_heading');
$who_main_paragraph = get_field('who_main_paragraph');

$who_how_we_support_heading = get_field('who_how_we_support_heading');
$who_how_we_support_paragraph = get_field('who_how_we_support_paragraph');
$who_how_we_support_1 = get_field('who_how_we_support_1');
$who_how_we_support_2 = get_field('who_how_we_support_2');
$who_how_we_support_3 = get_field('who_how_we_support_3');
$who_how_we_support_4 = get_field('who_how_we_support_4');
$who_how_we_support_5 = get_field('who_how_we_support_5');
$who_how_we_support_6 = get_field('who_how_we_support_6');

$who_what_makes_us = get_field('who_what_makes_us');
$who_what_makes_us_title_1 = get_field('who_what_makes_us_title_1');
$who_what_makes_us_paragraph_1 = get_field('who_what_makes_us_paragraph_1');
$who_what_makes_us_title_2 = get_field('who_what_makes_us_title_2');
$who_what_makes_us_paragraph_2 = get_field('who_what_makes_us_paragraph_2');
$who_what_makes_us_title_3 = get_field('who_what_makes_us_title_3');
$who_what_makes_us_paragraph_3 = get_field('who_what_makes_us_paragraph_3');

$self_assessment_title = get_field('self_assessment_title');
$self_assessment_paragraph = get_field('self_assessment_paragraph');
$self_assessment_btn_label = get_field('self_assessment_btn_label'); 


?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-5">
          <?php echo $who_main_heading; ?>
        </h1>
        <p>
          <?php  echo $who_main_paragraph; ?> 
        </p>
      </div>
    </div>
  </div>
</header>

<?php get_template_part('template-parts/companies-hire-us'); ?>

<section class="how bg-grey">
  <div class="container ">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-5"><?php echo $who_how_we_support_heading; ?></h2>
        <p class="text-center"><?php echo $who_how_we_support_paragraph; ?></p>
      </div>
      <div class="col-md-12">
      <ul class="row mx-auto">
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/supplier-sourcing"><?php echo $who_how_we_support_1; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/supplier-audits"><?php echo $who_how_we_support_2; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/order-management"><?php echo $who_how_we_support_3; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/quality-control"><?php echo $who_how_we_support_4; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/material-and-product-development/"><?php echo $who_how_we_support_5; ?></a></li>
        <li class="list-item col-12 col-md-4 mx-auto "><a href="/brokerage-and-logistics"><?php echo $who_how_we_support_6; ?></a></li>
      </ul>
    </div>
    </div>
  </div>
</section>

<section class="cards">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-5 text-center"><?php echo $who_what_makes_us; ?></h2>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 ">
          <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_1; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_1 ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 ">
        <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_2; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_2 ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 ">
        <div class="card-body">
            <h5 class="card-title"><?php echo $who_what_makes_us_title_3; ?></h5>
            <hr>
            <p class="card-text"><?php echo $who_what_makes_us_paragraph_3 ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="whitepaper self-assessment bg-grey pb-30">
  <div class="container ">
    <div class="row">
      <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/self-assessment.png" alt="Whitepaper">
      </div>
      <div class="col-md-8 content-wrapper">
        <h2><?php echo $self_assessment_title; ?></h2>
        <p><?php echo $self_assessment_paragraph; ?></p>
        <a href="" class="btn btn-full btn-xl js-scroll-trigger" data-toggle="modal" data-target="#self-assessment"><?php echo $self_assessment_btn_label; ?></a>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="self-assessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      <div class="container">
        <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="lname" placeholder="Last Name"/>
                <input type="text" name="phone" placeholder="Phone"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        <div class="dme_link">
            <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>