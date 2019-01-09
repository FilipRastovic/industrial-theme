<?php
/**
 * Template Name: Learning Center
 *
 */

get_header();
?>

<header class="masthead masthead--grey">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-5">10-word mission statement for
          your learning center goes here
        </h2>
      </div>
    </div>
  </div>
</header>

<section class="learning-center-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="order-2 order-md-1 col-md-4 col-lg-2">
        
          <?php wp_list_categories( array(
              'orderby' => 'name',
              'show_count' => true
          ) ); ?>
        
      </div>
      <div class="order-1 order-md-2 col-md-7 col-lg-7">
        <?php
      if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

          if( 1 == $wp_query->current_post ):
            echo '
            <section class="whitepaper dark-bg mb-50">
              <div class="container">
                <div class="row">
                  <div class="col-4 offset-4 col-md-2 offset-md-1 mb-5">
                    <img class="img-fluid" src="'; echo bloginfo('template_directory'); echo '/assets/img/whitepaper.png" alt="Whitepaper">
                  </div>
                  <div class="col-md-8 content-wrapper">
                    <h2>Whitepaper</h2>
                    <p>Etiam eu dui sit amet diam posuere finibus ac ut ipsum.
                      Vivamus pharetra in urna non molestie.
                      Duis id lorem ut lacus hendrerit sodales eu id urna.
                      Pellentesque pulvinar elit et feugiat posuere.
                    </p>
                    <a href="" class="btn btn-full btn-xl btn-white js-scroll-trigger">Download</a>
                  </div>
                </div>
              </div>
            </section>
              ';
          endif;

        endwhile;

        //the_posts_navigation();
        posts_nav_link();
      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;
      ?>
        <!-- <div class="col-md-3 order-3">
        <div class="form-wrapper">
          <h4>SUBSCRIBE to our newsletter</h4>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsam alias aspernatur porro </p>
          <form class="text-center">
            <div class="form-group">
              <label class="sr-only" for="exampleInputFirstName">First Name</label>
              <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="firstNameHelp"
                placeholder="First name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputLastName">Last Name</label>
              <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="lastNameHelp"
                placeholder="Last name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary btn-white">Subscribe</button>
          </form>
        </div>
      </div> -->
        <!-- Pager -->
      </div>
</section>

<?php get_footer(); ?>