<?php
/**
 * Template Name: Landing Page
 *
 */

get_header();
?>
<!-- WE NEED A DIFFERENT NAVIGATION HERE -->

<!-- <header class="masthead no-padding-bot">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5">Name of white paper or offer 
            goes right here</h2>
      </div>
    </div>
  </div>
</header> -->

<header class="masthead masthead--noborder polygon">
  <div class="header__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-5">H1 Title of article goes 
          right here</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sit, earum reiciendis neque officia incidunt quasi obcaecati exercitationem autem nam culpa velit odit? Adipisci quia qui cupiditate. Necessitatibus, voluptate quo.
        </p>
      </div>
    </div>
  </div>
</header> 

<section class="landing-page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-7 landing-page-content--left">
        <h2>H2 Headline goes here</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum fugiat reiciendis nisi nesciunt debitis fuga dolorum, sed vel aspernatur laborum suscipit commodi ipsa sequi eveniet laudantium? Natus non deleniti quaerat?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam consequatur, quisquam pariatur voluptatibus possimus unde atque repellat aliquid eius eum quibusdam ullam cupiditate omnis reprehenderit laboriosam odit ratione exercitationem! Deleniti.
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, nemo neque? Eius, ad ea. Non dolorum sapiente quidem temporibus numquam alias eum inventore porro et ex. Laborum mollitia ea eaque.
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex tempora repudiandae assumenda id dolore, perferendis porro neque sint laborum voluptates unde repellendus optio praesentium molestiae ducimus commodi aperiam, tempore autem!
        </p>
      </div>
      <div class="col-md-4 offset-md-1">
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