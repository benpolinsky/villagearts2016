

<?php 

  $args = array( 'post_type' => 'class', 'posts_per_page' => -1);
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    $class = $loop->current_post%2 == 0 ? "right" : "left";
    $classes_html .= "<div class='vh-class ".$class."'>";
    $classes_html .= "<div class='img-wrap'>". get_the_post_thumbnail()  ."</div>";
    $classes_html .= "<div class='class-text'><h4>". get_the_title() ."</h4><p>". get_the_content() ."</p></div>";
    $classes_html .= "</div>";
  endwhile;
?> 



<div class="vh-wrap program">
  <h3><?php the_field('subtitle', 29); ?></h3>
  <div class="program-description">
    <?php the_field('main_content', 29); ?>
  </div>
</div>
<!--begin video -->

<?php $videos = have_rows("videos", 29);
  if ($videos): ?>

  <?php $video_repeater = get_field('videos', 29);
  $video_counter = 0;

  foreach ($video_repeater as $row) {
    $video_counter++;

   ?>
<div class='video-background-container'>
    <div class="vh-wrap program">
      <div class="embed-container">
        <?php
        print_r($row);
        ?>
      </div>
    </div>
</div>
<?php } endif ?>  
<!--end video -->
<div id="classes-wrap" class="vh-container">
  <h3 id="arts-challenge">Courses</h3>
  <div id="arts-classes">
    <?php echo $classes_html; ?>
  
   
  </div>
</div>

<div class="bottom-calls">
  <div class='call-to-action'>
    <h5><?php echo get_field('cta_1_title', 29); ?></h5>
    <p><?php echo get_field('cta_1_text', 29); ?> </p>
    <a class='inverse vh-btn' href="<?php echo get_field('cta_1_link', 29); ?>"><?php echo get_field('cta_1_button_text', 29); ?></a>
  </div>
  
  <div class='call-to-action'>
    <h5><?php echo get_field('cta_2_title', 29); ?></h5>
    <p><?php echo get_field('cta_2_text', 29); ?> </p>
    <a class='vh-btn' href="<?php echo get_field('cta_2_link', 29); ?>"><?php echo get_field('cta_2_button_text', 29); ?></a>
  </div>
</div>
