<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gcp_2019
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) : the_title( '<h2 class="entry-title">', '</h2>' );
		else : the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
      <div class="post-details">
          <i class="fa fa-clock-o"><time><?php the_date();?></i>
          <i class="fa fa-folder"><?php the_category(', '); ?></i>
          <i class="fa fa-tags"><?php the_tags(); ?></i>
      </div>
		<?php endif; ?>
	</header><!-- .entry-header -->
  
  <?php if ( has_post_thumbnail() ) { ?>
	<div class="post-image">
    <?php gcp_2019_post_thumbnail(); ?>
  </div>
  <?php } ?>

  <?php if ( is_singular() ) :  ?>
    <div class="post-body">
      <?php the_content(); ?>
    </div>
<? else : ?>

    <div class="post-excerpt">
      <?php the_excerpt(); ?>
    </div>
  <? endif; ?>
  <?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
  
</article><!-- #post-<?php the_ID(); ?> -->

