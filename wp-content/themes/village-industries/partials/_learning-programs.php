

<?php 

  $args = array( 'post_type' => 'programs', 'posts_per_page' => -1, 'meta_key' => 'category', 'meta_value' => 'learning', 'post_parent' => 0);
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    $post_id = get_the_id();
    
    if (empty(get_children(array('post_parent' => $post_id)))){
      $learning_programs .= "<article class='program'><h5 class='program-title'><a href='" . get_the_permalink() . "'>" . get_the_title() . "</a></h5><div class='program-summary'>" . get_the_excerpt() . "</div></article>";
    }else{
      $learning_programs .= "<article class='program has-sub'><h5 class='program-title'><a href='" . get_the_permalink() . "'>" . get_the_title() . ":</a></h5></article>";      
      $learning_programs .= "<ul>" . wp_list_pages( array('post_type' => 'programs', 'child_of' => $post_id, 'title_li' => '', 'echo' => 0)) . "</ul>";
      $learning_programs .= "<div class='program-summary'>" . get_the_excerpt() . "</div>";
    };
    
  endwhile;
?>

<div id="learning-arts">
  
  <header>
    <div class="vh-half-wrap">
      <h4>Learning Through The Arts</h4>
      <p><?php the_field('learning_description', 20); ?></p>
      <span class="diamond"></span>
    </div>
  </header>
  
  <section>
    <div class="vh-half-wrap">
      <?php echo $learning_programs; ?>	
    </div>
    	    
  </section>
  
</div>