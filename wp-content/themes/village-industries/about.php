<?php
/**
 * The template for displaying archive pages.
 *  Template Name: About
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package village-industries
 */

get_header(); 

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <?php if (!empty(get_field('general_banner', 24))): ?>
    <div class="program-banner" style="background-image:url(<?php echo the_field('general_banner', 24); ?>); background-size:cover;">

    </div>
    <?php else: ?>
      <div class="program-banner">
        <h2><?php echo get_the_title(24); ?></h2>        
      </div>
    <?php endif ?>
    <?php get_template_part('partials/_about-nav'); ?>
    <?php get_template_part('partials/_about-history'); ?>
    <?php get_template_part('partials/_about-image-slider'); ?>
    <?php get_template_part('partials/_about-executive-team'); ?>
    <?php get_template_part('partials/_about-board'); ?>   
    <?php get_template_part('partials/_about-teaching-artists'); ?>     
    <?php get_template_part('partials/_about-funders'); ?>          
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
