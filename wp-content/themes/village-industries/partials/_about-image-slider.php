<?php
$hs_args = array('post_type' => "history-slide", 'posts_per_page' => -1);
$hs_loop = new WP_Query($hs_args);
while ($hs_loop->have_posts() ) : $hs_loop->the_post();
  $hs_html .= "<div class='main-image slide'>";
  $hs_html .= "<div class='image-text'>";
  $hs_html .= "<h3>" . get_the_title() . "</h3>";
  $hs_html .= "<p>" . get_the_content() . "</p>";
  $hs_html .= "</div>";
  $hs_html .= "<div class='image-container'>";
  $hs_html .= get_the_post_thumbnail($loop->ID, 'full');
  $hs_html .= "</div>";
  $hs_html .= "</div>";
  
  $sn_html .= "<div class='slide-nav-item'>";
  $sn_html .= get_the_post_thumbnail($loop->ID, 'medium');
  $sn_html .= "</div>";
endwhile;
?>

<section id="image-slider">
  <div class="vh-wrap slider-contain"> 
    <div id="history-slider" class="about-history-slider about"><?php echo $hs_html; ?></div>
  </div>
</section>

<div class='slider-nav-background'>
  <section class="section" id="image-slider-nav">
    <div id="slider-nav-about">
     <?php echo $sn_html; ?>
    </div>
  </section>
</div>
