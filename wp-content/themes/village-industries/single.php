<?php
/**
 * The template for displaying all single posts.
 *
 * @package village-industries
 */

get_header(); ?>
  <h1 id="news-title">News & Events</h1>
	<div id="primary" class="content-area vh-container">
		<main id="main" class=" site-main" role="main">
<div class="the-post">
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'single' ); ?>

        <?php the_post_navigation(); ?> 
      
      <?php endwhile; // end of the loop. ?>
      </div>
      <aside id='blog-sidebar' class="sidebar">
          <?php get_sidebar(); ?>
      </aside>
  
		</main><!-- #main -->
	</div><!-- #primary -->




<?php get_footer(); ?>
