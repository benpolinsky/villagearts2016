
<?php
add_filter('show_admin_bar', '__return_false');
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package village-industries
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>

<?php wp_head(); ?>

</head>

<?php $menuItems = wp_get_nav_menu_items('front') ?>

<body <?php body_class(); ?>>
  <div id="vh-container">
    <div id="page" class="hfeed site">
    	<header id="masthead" class="site-header vh-wrap" role="banner">
    		<div class="site-branding">
    			<h1 class="site-title">
            <span id="village-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img alt="village-industries-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/village-arts-humanities-logo.svg"/>
              </a>
            </span>

            <a id="title-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">The Village<br>of Arts and Humanities</a>
          </h1>
    		</div><!-- .site-branding -->

    		<?php get_template_part('partials/_main_navigation'); ?>
        
        <nav id="donate-social">
                      <div id="donate"><a href="<?php echo get_page_link(36); ?>" alt="donate-to-village-arts-humanities"> Donate</a></div>
          <ul>

            
            <li class="social">
              <a href="mailto:info@villagearts.org">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact.jpg"/>
              </a>
            </li>
            <li class="social">
              <a href="http://www.instagram.com/thevillagephilly">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.jpg"/>
              </a>
            </li>
            <li class="social">
              <a href="http://www.facebook.com/villageofartsandhumanities">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.jpg"/>
              </a>
            </li>
            <li class="social">
              <a href="http://www.vimeo.com/villageofartsandhumanities">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo.jpg"/>
              </a>
            </li>
          </ul>
        </nav>
    	</header><!-- #masthead -->

  	<div id="content" class="site-content">
