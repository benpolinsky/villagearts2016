    			<a class="menu-toggle" id="navburger" aria-controls="menu" aria-expanded="false"><span class="dashicons dashicons-menu"></span></a>
    		<nav id="site-navigation" class="main-navigation" role="navigation">


    <?php 
          $pagename = get_query_var('pagename');
          $menu_name = 'front';
    	    $menu_items = wp_get_nav_menu_items('front'); // grab main navigation elements (home, programs, about, etc...)
    	    $menu_list = '<ul id="menu-' . $menu_name . '">';
          foreach ( (array) $menu_items as $key => $menu_item ) {
            
    	      $title = $menu_item->title;
    	      $url = $menu_item->url;
            $slug = sanitize_title($title);
            $active_class = 'class="active"';
  
    	      $menu_list .= '<li><a class="'. $slug .'" href="' . $url . '">' . $title . '</a>'; // setup main li
            if ($title == 'Programs') { 
              // we want to grab both 'building through the arts' and 'learning through the arts'
              
              
              // this should be the building arts posts          
              $args = array( 'post_type' => 'programs', 'posts_per_page' => -1, 'meta_key' => 'category', 'meta_value' => 'building', 'orderby' => 'menu_order', 'order' => 'ASC'  );
              $loop = new WP_Query( $args );
              
              // and we build up the sub container and ul
              $menu_list .= '<div id="sub-nav-container">';
              
 			  $menu_list .= '<h3><a href="/learning-and-building-through-the-arts">Programs Overview</a></h3>';              

              $menu_list .= '<ul id="building-arts" class="with-subnav">'; 

              // now loop through each item in building arts and concatenate it
              while ( $loop->have_posts() ) : $loop->the_post();
                $menu_list .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
              endwhile;
              
              // close up the first sub list
              $menu_list .= '</ul>';
              
              // setup the loop for the learning arts posts
              $args = array( 'post_type' => 'programs', 'posts_per_page' => -1, 'meta_key' => 'category', 'meta_value' => 'learning', 'orderby' => 'menu_order', 'order' => 'ASC'  );
              $loop = new WP_Query( $args );
              
              // build the sub ul and title li
              $menu_list .= '<ul id="learning-arts" class="with-subnav">'; 
              
              // now loop through each item in learning arts and concatenate it
              while ( $loop->have_posts() ) : $loop->the_post();
                //$program_caegory = get_post_custom_values('wpcf-program-category')[0];
                //print_r($cat);  
                
                // we've got a sub sub nav... if it has children let's just print them out.
                //if (empty(get_children(array('post_parent' => get_the_id())))){
                   $menu_list .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
               // }else{
                //  $menu_list .= wp_list_pages( array('post_type' => 'programs', 'child_of' => get_the_id(), 'title_li' => '', 'echo' => 0));
                //}


              endwhile;
              
              // close up our sublist and nav
              $menu_list .= '</ul>';
              $menu_list .= '</div>';
              $menu_list .= '</li>';
            }
    	    }
          
          // close up our main ul and echo it 
          $menu_list .= '</ul>';
          echo $menu_list; 
    ?>
    			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    		</nav><!-- #site-navigation -->