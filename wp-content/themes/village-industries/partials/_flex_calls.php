      <?php
$calls = count(get_field('call_to_action'));

if (have_rows('call_to_action')):
  if ($calls == 1):
    while (have_rows('call_to_action')):
      the_row();
?> 
            <div class="program-call">
              <h4><a href="<?php
      echo the_sub_field("link_to"); ?>"><?php
      echo the_sub_field('content'); ?> ></a></h4>
            </div>
          <?php
    endwhile;
  else:
?><div class="bottom-calls"><?php
    while (have_rows('call_to_action')):
      the_row();
?>
          
            <div class='call-to-action calls_<?php
      echo $calls ?>'>
              <h5><?php
      echo the_sub_field('headline'); ?></h5>
              <p><?php
      echo the_sub_field('content'); ?> </p>
              <a class='vh-btn' href="<?php
      echo the_sub_field('link_to'); ?>"><?php
      echo the_sub_field('button_text'); ?></a>
            </div>
          
        <?php
    endwhile;
?>
        </div>
        <?php
  endif; ?>
    <?php
endif;
?>