
<?php
$staff_args = array('post_type' => "staff-member", 'posts_per_page' => 6);
$staff_loop = new WP_Query($staff_args);
$start = 1;
while ($staff_loop->have_posts() ) : $staff_loop->the_post();
  if ($start == 1) {
    $first_board_title = get_the_title();
    $first_board_content = get_field('bio');
  }
  $staff_html .= get_the_post_thumbnail($loop->ID, 'full', array('class' => 'teaching-artist', 'data-text' => get_field('bio', false, false), 'data-name' => get_the_title()));
  $start++;
endwhile;
?>

<section class="section" id="board-member">
  <h3 class='title'>Board</h3>
  <div class='vh-container'>
    <div id='right'>
 <?php echo $staff_html; ?>     
    </div>
    <div id="left">
      <h3><?php echo $first_board_title; ?></h3>
      <div id="board-text">
        <?php echo $first_board_content; ?>
      </div>
    </div>
  </div>
</section>
