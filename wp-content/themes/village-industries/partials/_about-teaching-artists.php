<?php
$ta_args = array('post_type' => "teaching-artist", 'posts_per_page' => 12);
$ta_loop = new WP_Query($ta_args);
$loop_start = 1;
while ($ta_loop->have_posts() ) : $ta_loop->the_post();
  if ($loop_start == 1) {
    $first_post_title = get_the_title();
    $first_post_content = get_the_content();
  }
  $ta_html .= get_the_post_thumbnail($loop->ID, 'full', array('class' => 'teaching-artist', 'data-text' => get_the_content(), 'data-name' => get_the_title()));
  $loop_start++;
endwhile;
?>


<section class="section" id="teaching-artists">
     <h3 class='title'>Teaching Artists</h3>
 <div class="vh-container"> 
   <div id='right'>
<?php echo $ta_html; ?>
   </div>
   <div id="left">
     <h3><?php echo $first_post_title;?></h3>
     <div id="artist-text">
       <p><?php echo $first_post_content;?></p>
     </div>
   </div>
  
 </div>
</section>