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
        <a href="/who-we-help">Who We Help</a>
      </li>
      <li class="list-inline-item">
        <a href="/services">Services</a>
      </li>
      <li class="list-inline-item">
        <a href="/case-studies">Case Studies</a>
      </li>
      <li class="list-inline-item">
        <a href="/learning-centar">Learning Center</a>
      </li>
    </ul>
    <a href="https://www.linkedin.com/company/global-industrial-products" target="_BLANK"><img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="Linkedin"></a>
    <a href="https://www.facebook.com/gcpindustrial" target="_BLANK"><img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="Facebook"></a>
    <a href="https://twitter.com/GCPIndustrial" target="_BLANK"><img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/twitter.png" alt="Twitter"></a>
    <a href="http://www.gcpindustrial.com/blog/rss" target="_BLANK"><img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/rss.png" alt="RSS"></a>
    <a href="https://www.youtube.com/user/gcpindustrial/videos" target="_BLANK"><img class="mb-3" src="<?php bloginfo('template_url'); ?>/assets/img/youtube.png" alt="Youtube"></a>
    <p>&copy; GCP <?php echo date("Y"); ?>. All Rights Reserved.</p>
  </div>
</footer>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4643163.js"></script>
<!-- End of HubSpot Embed Code -->
<?php wp_footer(); ?>
</body>
</html>