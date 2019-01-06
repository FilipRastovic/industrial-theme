<?php
/**
 * Template Name: Case Studies
 *
 */

get_header();

$case_studies_main_heading = get_field('case_studies_main_heading');
$case_studies_main_paragraph = get_field('case_studies_main_paragraph'); 
?>

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-5">H1 Title of article goes 
            right here
            <?php echo $case_studies_main_heading; ?>
            </h1>
        <p><?php echo $case_studies_main_paragraph; ?>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sit, earum reiciendis neque officia incidunt quasi obcaecati exercitationem autem nam culpa velit odit? Adipisci quia qui cupiditate. Necessitatibus, voluptate quo.
        </p>
      </div>
    </div>
  </div>
</header>

<section class="cards">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card card--case-study">
          <div class="card-header">
            <h4>Card Title</h4>
            <hr>
          </div>  
          <div class="card-body">
            <p>lorem ipsum dolor sit asd qwenv eodfownf  </p>
            <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card--case-study">
          <div class="card-header">
            <h4>Card Title</h4>
            <hr>
          </div>  
          <div class="card-body">
            <p>lorem ipsum dolor sit asd qwenv eodfownf  </p>
            <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card--case-study">
          <div class="card-header">
            <h4>Card Title</h4>
            <hr>
          </div>  
          <div class="card-body">
            <p>lorem ipsum dolor sit asd qwenv eodfownf  </p>
            <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card--case-study">
          <div class="card-header">
            <h4>Card Title</h4>
            <hr>
          </div>  
          <div class="card-body">
            <p>lorem ipsum dolor sit asd qwenv eodfownf  </p>
            <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="learning-center-copy bg-grey">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 offset-md-2">
        <article>
          <h2>Title of article</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
            fugiat, 
          </p>
          <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>
        </article>
        <article>
          <h2>Title of article</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
            fugiat, 
          </p>
          <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>
        </article>
        <article>
          <h2>Title of article</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
            fugiat, 
          </p>
          <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>
        </article>
        <article>
          <h2>Title of article</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
            fugiat, 
          </p>
          <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>
        </article>
        <article>
          <h2>Title of article</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti vel ducimus quis, et corrupti placeat
            fugiat, 
          </p>
          <a href="blog-post.html" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>
        </article>

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
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
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