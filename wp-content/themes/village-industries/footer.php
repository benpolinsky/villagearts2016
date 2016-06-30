<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package village-industries
 */
?>

	</div><!-- #content -->

  <?php
    // mission fields
  
    $mission_title = get_field('mission_title', 'option');
    $mission_statement = get_field('mission_statement', 'option');
  
    // donating fields
    
    $donating_title = get_field('donating_title', 'option');
    $donating_statement = get_field('donating_statement', 'option');
  
    // address fields
    $address = get_field('location', 'option');
    $address_lines = get_field('address_line', 'option');
    $phone_number = get_field('phone_number', 'option');
    $email_contact = get_field('email_contact', 'option');
  

  ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info vh-wrap">
		  <div id='footer-mission' class="section">
        <h4><?php echo $mission_title ?></h4>
        <p><?php echo $mission_statement ?></p>
		  </div>

      <div id="footer-donate" class="section">
        <h4><?php echo $donating_title ?></h4>
        <p><?php echo $donating_statement ?></p>
        <a class="vh-btn" href="<?php echo get_page_link(36); ?>">Donate</a>
      </div>
      
      <div id="get-in-touch" class="section">
        <h4>Get in Touch</h4>
        
        <span id="address">
         
          
          <a target="_new" href="https://www.google.com/maps/place/<?php echo $address['address']; ?>/@<?php echo $address['lat']; ?>,<?php echo $address['lng']; ?>,17z">
            <?php for ($i=0; $i < count($address_lines); $i++) { 
              echo "<p>" . $address_lines[$i]['address_line'] . "</p>";
            } ?>
          </a>

        </span>
        
        <span id="phone-email">
          <p><a href="tel:<?php echo $phone_number ?>">p: <?php echo $phone_number ?></a></p>
          <p><a href="mailto:<?php echo $email_contact ?>">e: <?php echo $email_contact; ?></a></p>          
        </span>

      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div> <!-- #vh-container -->
</body>
</html>
