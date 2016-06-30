<?php
/**
 * The template for displaying all pages.
 *  Template Name: Programs 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package village-industries
 */

get_header(); ?>

<?php
  $page = get_post(20);
?>

        <?php if (!empty(get_field('general_banner', 20))): ?>
        <div class="program-banner" style="background-image:url(<?php echo the_field('general_banner', 20); ?>); background-size:cover;">
   
        </div>
        <?php else: ?>
          <div class="program-banner">
            <h2><?php echo get_the_title(20); ?></h2>        
          </div>
        <?php endif ?>

<div id="program-subheader">
  <div class="vh-wrap">
    <h3>
      <?php echo $page->post_content;  ?>
    </h3>    
  </div>

</div>

<div id="programs">
  
  <?php get_template_part('partials/_learning-programs'); ?>
  <?php get_template_part('partials/_building-programs'); ?>
 
</div>

<?php get_footer(); ?>
