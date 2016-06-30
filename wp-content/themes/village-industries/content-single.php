<?php
/**
 * @package village-industries
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
    <?php the_post_thumbnail() ?>
    <h2 class="entry-title">
      <span class="the-date"><?php the_date('d M'); ?></span>
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
