<?php
  $post = get_post(2);
?>

<section id="mission">
  <div class="vh-wrap">
    <h2>
      <?php echo $post->post_content; ?>
    </h2>
  </div>
</section>