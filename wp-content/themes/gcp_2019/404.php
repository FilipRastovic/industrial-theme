<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gcp_2019
 */

get_header();
?>

<header class="header header--noborder error-page">
  <div class="polygon-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gcp_2019' ); ?></h1>
      </div>
    </div>
  </div>
</header>

<?php
get_footer();
