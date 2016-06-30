<?php 
  $args = array( 'post_type' => 'banner', 'posts_per_page' => 3);
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    $button_scheme = (get_field('color_scheme') == 'dark' ? 'inverse' : '');
    if (get_field('link_type') == 'external') :
      $new_page = (get_field('new_page') == true ? "_new" : "_self");
    else:
      $new_page = "_self";
    endif;
    $banner_html .= "<div class='banner'>" . get_the_post_thumbnail($loop->ID, 'full');
    $banner_html .= "<div class='vh-wrap'><span class='banner-quote'>&ldquo;" . get_field('quote');
    $banner_html .= "&rdquo;<span class='banner-quote-attribution'>" . get_field('quote_attribution');
    $banner_html .=  "</span><a class='vh-btn ". $button_scheme ."' href='". get_field('links_to');
    $banner_html .= "' target='". $new_page ."'>". get_field('button_text') ."</a></span></div></div>";
  endwhile;
  $number_of_banners = $loop->found_posts;
?>

<section id="slider">
    <?php echo $banner_html; ?>
</section>