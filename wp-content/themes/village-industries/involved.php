<?php
/**
 * The template for displaying archive pages.
 *  Template Name: involved
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package village-industries
 */

get_header(); 

?>






	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php if (!empty(get_field('general_banner', 36))): ?>
        <div class="program-banner" style="background-image:url(<?php echo the_field('general_banner', 36); ?>); background-size:cover;">
   
        </div>
        <?php else: ?>
          <div class="program-banner">
            <h2><?php echo get_the_title(36); ?></h2>        
          </div>
        <?php endif ?>
      
      
      <section id="get-involved">
        <div class="vh-container">
          <div class='vh-wrap'>
            <h2 class="contribution"><?php echo get_field('contribution_heading', 36); ?></h2>
            <div class='contribution-text'>
              <?php echo get_field('contribution_text', 36); ?>
            </div>
            <!-- new cta -->
            <a href="<?php echo get_field('contribution_cta_button_link', 36); ?>" class="vh-btn">
              <?php echo get_field('contribution_cta_text', 36); ?>
            </a>
          </div>
        </div>
      </section>
      
      
      
  
      <section id="big-feature">
        <div class="vh-container">
          <div class="left">
              <img src="<?php the_field('main_image', 36); ?>" />
          </div>
          <div class="right">
            <h1><?php echo get_field('main_headline', 36); ?></h1>
            <p><?php echo get_field('main_text', 36); ?></p>
            <a href="<?php echo get_field('main_cta_link_to', 36); ?>" class="vh-btn"><?php echo get_field('main_cta_btn_text', 36); ?></a>
          </div>
        </div>
      </section>
  
  
  
  
      <section id="middle-section">
        <div class="vh-wrap">
          <h2 class="contribution"><?php echo get_field('volunteer_title', 36); ?></h2>
          <p><?php echo get_field('volunteer_text', 36); ?></p>
          <div class='list-items'>
            <!--begin listitems -->
            <?php
              if (have_rows('list_items', 36)): 
                while (have_rows('list_items', 36)) : the_row();
                ?>
              <a href="<?php the_sub_field('link_to') ?>">
                <span class='list-plus'>
                  +
                </span>
                <?php the_sub_field('list_item'); ?>
              </a>
              
            <?php
            endwhile;

             endif; ?>  
            <!--end listitems -->
          </div>
        </div>
      </section>
      
      <section id="big-feature">
        <div class="vh-container">
          <div class="left">
              <img src="<?php the_field('secondary_image', 36); ?>" />
          </div>
          <div class="right">
            <h1><?php echo get_field('secondary_headline', 36); ?></h1>
            <p><?php echo get_field('secondary_text', 36); ?></p>
            <a href="<?php echo get_field('secondary_cta_link_to', 36); ?>" class="vh-btn">
              <?php echo get_field('secondary_cta_btn_text', 36); ?>
            </a>
          </div>
        </div>
      </section>
      


       <?php
 $calls = count(get_field('call_to_action', 36));
 
 if (have_rows('call_to_action', 36)):
   ?>
    <section class='flex-calls'>
      <?php 
   if ($calls == 1):
     while (have_rows('call_to_action', 36)):
       the_row();
 ?> 
             <div class="program-call">
               <h4><a href="<?php
       echo the_sub_field("link_to"); ?>"><?php
       echo the_sub_field('content'); ?> ></a></h4>
             </div>
           <?php
     endwhile;
   else:
 ?><div class="bottom-calls"><?php
     while (have_rows('call_to_action', 36)):
       the_row();
 ?>
           
             <div class='call-to-action calls_<?php
       echo $calls ?>'>
               <h5><?php
       echo the_sub_field('headline'); ?></h5>
               <p><?php
       echo the_sub_field('content'); ?> </p>
               <a class='vh-btn' href="<?php
       echo the_sub_field('link_to'); ?>"><?php
       echo the_sub_field('button_text'); ?></a>
             </div>
           
         <?php
     endwhile;
 ?>
         </div>
         <?php
   endif; ?>
   
   </section>
     <?php
 endif;
 ?>
      
      
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
