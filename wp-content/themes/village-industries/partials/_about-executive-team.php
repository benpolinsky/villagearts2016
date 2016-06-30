<?php
  $exec_args = array('post_type' => "executive-team", 'posts_per_page' => -1, "order" => "ASC", "orderby" => "menu_order");
  $exec_loop = new WP_Query($exec_args);
?>

<section class="section" id="executive-team">
  <h3 class='our-team'>Our Team</h3>
  <div class="vh-container vh-wrap">
    <div class="">

      <?php while ($exec_loop->have_posts() ) : $exec_loop->the_post(); ?>
        <div class='member-container'>
          <div class="member-information">
            <div class='member-photo'><?php echo(get_the_post_thumbnail($exec_loop->ID, "full")); ?></div>
            <h3 class='member-name'><?php the_title(); ?></h3>
            <h4 class="member-position"><?php echo types_render_field("job-position", array("raw"=>"true","separator"=>";")); ?></h4>

          </div>      
          
          <div class="member-description">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile ?>

    </div>
  </div>
</section>