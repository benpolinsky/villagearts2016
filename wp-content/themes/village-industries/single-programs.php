<?php
/**
 * The template for displaying all single posts.
 *
 * @package village-industries
 */

get_header(); ?>
  

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
      <?php if (!empty(get_field('program_banner'))): ?>
      <div class="program-banner" style="background-image:url(<?php echo the_field('program_banner'); ?>); background-size:cover;">
   
      </div>
      <?php else: ?>
        <div class="program-banner">
          <h2><?php the_title(); ?></h2>        
        </div>
      <?php endif ?>
  
    <?php
      global $post;
      $post_slug=$post->post_name;
      if (strcmp($post_slug, "creative-studios") == 0) {
        get_template_part('arts-challenge');
      }else{
        get_template_part('program-main');
      }
    ?>

    

		<?php endwhile; // end of the loop. ?>
    
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
