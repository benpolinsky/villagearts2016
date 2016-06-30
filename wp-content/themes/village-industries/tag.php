<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package village-industries
 */

get_header(); ?>


<div class="blog-wrap">
    <h1 id="news-title"><?php the_archive_title() ?></h1>
  	<div id="primary" class="content-area vh-container">
  		<main id="main" class=" site-main" role="main">
        <div class="the-post">
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

      
          <?php endwhile; // end of the loop. ?>
    			<?php the_posts_navigation(); ?>
          
        </div>
        <aside id='blog-sidebar' class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
</div>

  
		</main><!-- #main -->
	</div><!-- #primary -->










<?php get_footer(); ?>
