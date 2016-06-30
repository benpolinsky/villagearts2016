<div class="vh-wrap program">
  <h3><?php echo the_field('subtitle'); ?></h3>
  <div class="program-description">
    <?php the_field('main_content'); ?>
  </div>
</div>


<!--begin video -->
<?php $videos = have_rows("videos");
  if ($videos && get_field('videos')[0]['video']): ?>

  <?php $video_repeater = get_field('videos');
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

<?php   }  endif ?>  
<!--end video -->

  
    
<!--start slider -->
<?php $images = have_rows("program_images");
$image_count = count(get_field('program_images'));
if ($images && get_field('program_images')[0]['image'] ): ?>
  <section id="image-slider">
    <div class="vh-wrap slider-contain">
      <div id="history-slider" class='program-history-slider'>
        <?php $images = have_rows("program_images");
          if ($images) {
            $counter = 0;
            $repeater = array_reverse(get_field('program_images'));
            foreach($repeater as $row) {
              $counter++;
            ?>
            <?php if (isset($row['image']) && isset($row['image']['url'])): ?>
              
              <div class='main-image slide'>
                <div class='image-text'>
                 <h3>
                   <?php if (isset($row['image']['title'])): ?>
                     <?php echo $row['image']['title']; ?>                     
                   <?php endif ?>
                 </h3>
                 <p>
                   <?php echo $row['image']['caption']; ?>
                 </p>
                </div>
                <div class='image-container'>
                 <img src='<?php echo $row['image']['url']; ?>' alt='<?php echo $row['image']['url']; ?>'/>
                </div>
              </div>
            <?php endif ?>


          <?php }
        }?>
      </div>
    </div>
  </section>
<?php endif ?>
<!--end slider main -->

<!-- start slider nav -->
<?php $images = have_rows("program_images");
if ($images && get_field('program_images')[0]['image']) {
  $image_count = count(get_field('program_images'));
?>
  <div class='slider-nav-background'>
  <section class='section' id="image-slider-nav">

    <div id="slider-nav">
  <?php $counter = 0;
    $repeater = array_reverse(get_field('program_images'));
    foreach($repeater as $row) {
      $counter++;
  ?>
    
     <?php if (isset($row['image']) && isset($row['image']['sizes']) && isset($row['image']['sizes']['medium'])): ?>
      <div class='slide-nav-item'>
        <img src='<?php echo $row['image']['sizes']['medium']; ?>' alt='<?php echo $row['image']['sizes']['medium']; ?>'/>
      </div>
    <?php endif ?>
      <?php } ?>
    </div>

  </section>
      </div>
<?php } ?>

<!--end slider nav -->

<div class="vh-wrap program">
  <div class="bottom-description vh-container">
   <?php the_field("secondary_content"); ?>
  </div>
</div>

<?php get_template_part('partials/_flex_calls'); ?>

      


