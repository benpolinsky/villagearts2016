<?php 

  $args = array( 'post_type' => 'programs', 'posts_per_page' => -1, 'meta_key' => 'category', 'meta_value' => 'building', 'post_parent' => 0);
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  $post_id = get_the_id();

    $building_programs .= "<article class='program'><h5 class='program-title'><a href='" . get_the_permalink() . "'>" . get_the_title() . "</a></h5><div class='program-summary'>" . get_the_excerpt() . "</span></article>";
    $building_programs .= wp_list_pages( array('post_type' => 'programs', 'child_of' => $post_id, 'title_li' => '', 'echo' => 0));

  endwhile;
?>


  <div id="building-arts">
    <header>
      <div class="vh-half-wrap">
        <h4>Building Through The Arts</h4>
        <p><?php the_field('building_description', 20); ?></p>
        <span class="diamond"></span>
      </div>
    </header>
    
    <section>
      <div class="vh-half-wrap">
        <div class="nano">
          <div class="nano-content"><?php echo $building_programs; ?></div>
        </div>
      </div>
    </section>
  </div>