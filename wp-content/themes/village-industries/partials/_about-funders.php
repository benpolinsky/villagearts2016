<?php
$funders_args = array('post_type' => "funder", 'posts_per_page' => -1);
$funders_loop = new WP_Query($funders_args);
while ($funders_loop->have_posts() ) : $funders_loop->the_post();
$funders_html .= "<li class='funder'>" . get_the_title() . "</li>";
endwhile;
?>
<section class="section" id="funders">
  <h3>Recent Funding and Major Support</h3>
  <ul id="funderlist">
    <?php echo $funders_html; ?>
  </ul>
</section>
