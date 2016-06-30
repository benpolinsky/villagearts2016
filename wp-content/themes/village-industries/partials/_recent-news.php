
<?php 

  $news_args = array( 'post_type' => 'post', array( 'category_name' => 'staff,news' ), 'posts_per_page' => 3);
  $news_loop = new WP_Query( $news_args );
  while ( $news_loop->have_posts() ) : $news_loop->the_post();
    $news_item_html .= "<article class='news-item'><a href='". get_the_permalink() ."' class='news-img'>" . get_the_post_thumbnail($news_loop->ID, "full") . "</a><div class='news-text-container'><h5 class='news-title'><a href='". get_the_permalink() ."'>" . get_the_title() . "</a></h5><div class='news-summary'>" . get_the_excerpt() . "</span><span class='news-date'>" . get_the_date() . "</span></div></article>";
  endwhile;
?>

<section id="recent-news">
  <div class="vh-wrap">
     <h3><a href="/news-and-events">Recent News</a></h3>
     <div id="news-slider">
       <?php echo $news_item_html ?>
     </div>
  </div>
</section>