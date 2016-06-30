

<section id="statistics">
  <div class="vh-wrap">
    <ul>

      <?php if( have_rows('statistic_block') ):
              while ( have_rows('statistic_block') ) : the_row(); ?>
      <li><span class="counter zero" data-max="<?php the_sub_field('statistic_number'); ?>"><?php the_sub_field('statistic_number'); ?></span><p><?php the_sub_field('statistic_name'); ?></p></li>
      <?php endwhile;
              endif; ?>

    </ul>
  </div>
   
</section>