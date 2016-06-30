<?php
/**
 * The template for displaying all single posts.
 *
 * @package village-industries
 */

get_header(); ?>
<div class="blog-wrap">
    <h1 id="news-title">News & Events</h1>
  	<div id="primary" class="content-area vh-container">
  		<main id="main" class=" site-main" role="main">
        <div class="the-post">
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

          <div class="post-nav">
              <?php previous_post_link('<span class="prev-post">%link</span>', 'last'); ?>
              <?php next_post_link('<span class="next-post">%link</span>', 'next'); ?>
          </div>
      
          <?php endwhile; // end of the loop. ?>
        </div>
        <aside id='blog-sidebar' class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
</div>

  
		</main><!-- #main -->
	</div><!-- #primary -->




<?php get_footer(); ?>
