<?php
/**
 * The template for displaying archive pages.
 *  Template Name: News
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package village-industries
 */

get_header(); 


?>
<h1 id="news-title">News & Events</h1>
<div id="masonry-container">
<div id="news-container">

<?php
 $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args = array( 'post_type' => 'post', 'posts_per_page' => '6', 'paged' => $paged);
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
       
  <?php  
  endwhile;
  ?>
<?php echo do_shortcode('[ajax_load_more post_type="post" pause="false" posts_per_page="6" offset="0" scroll="false" button_label="See More"]'); ?>
</div>

</div>

<?php get_footer(); ?>
