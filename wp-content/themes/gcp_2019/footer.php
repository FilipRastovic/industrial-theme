<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcp_2019
 */

?>
<footer class="main-footer">
  <div class="container">
    <img class="logo mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.png" alt="Logo">
    <ul class="list-inline mb-3">
      <li class="list-inline-item">
        <a href="#">Who We Help</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Services</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Case Studies</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Learning Center</a>
      </li>
    </ul>
    <img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="Linkedin">
    <img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="Facebook">
    <img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="Twitter">
    <img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/rss.png" alt="RSS">
    <img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/youtube.png" alt="Youtube">
    <p>&copy; Your Website 2018. All Rights Reserved.</p>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
