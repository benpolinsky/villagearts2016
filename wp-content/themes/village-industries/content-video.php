<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="video">
  <?php the_field('video') ?>
</div>





	<div class="entry-content">
    <?php the_title( '<h2 class="entry-title"><span class="the-date single-date">' . get_the_date('d M') . '</span><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
		<div class="excerpt"><?php echo excerpt_or_post(my_excerpt(get_the_excerpt(), 100), my_excerpt(get_the_content(), 100))  ?></div>
    
    		<div class="single-content "><?php the_content() ?></div>
    
		<div class="entry-meta date">
      <?php echo get_the_date(); ?>
		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
