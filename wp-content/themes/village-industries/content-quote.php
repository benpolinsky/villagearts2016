<?php
/**
 * @package village-industries
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		


	
    <?php the_post_thumbnail(); ?>
	<div class="entry-content">
    
		<div class="excerpt quote"><?php the_content()  ?></div>
    
    		<div class="single-content "><?php the_content() ?></div>
    

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta date">
			<?php echo get_the_date(); ?>
      
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</div><!-- .entry-content -->


</article><!-- #post-## -->