<?php 
global $zendvn_sp_settings;
     $contacted_phone=$zendvn_sp_settings['contacted_phone'];
     $email_to=$zendvn_sp_settings['email_to'];
     $address=$zendvn_sp_settings['address'];
     $to_name=$zendvn_sp_settings['to_name'];
     $telephone=$zendvn_sp_settings['telephone'];
     $website=$zendvn_sp_settings['website'];
     $opened_time=$zendvn_sp_settings['opened_time'];
     $opened_date=$zendvn_sp_settings['opened_date'];
     $contaced_name=$zendvn_sp_settings['contacted_name'];
     $facebook_url=$zendvn_sp_settings['facebook_url'];
     $twitter_url=$zendvn_sp_settings['twitter_url'];
     $google_plus=$zendvn_sp_settings['google_plus'];
     $youtube_url=$zendvn_sp_settings['youtube_url'];
     $instagram_url=$zendvn_sp_settings['instagram_url'];
     $pinterest_url=$zendvn_sp_settings['pinterest_url'];   
     $ban_do=$zendvn_sp_settings['ban_do'];
?>
<footer class="footer padding-top-15">	
  <div class="container">
    <div class="col-lg-4">
        <div><img src="<?php echo site_url( '/wp-content/uploads/diaocbinhdinh-logo.png',null ); ?>" /></div>
        <div class="admin-info margin-top-5"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $address; ?></div>
        <div class="admin-info margin-top-5"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $email_to; ?></div>
        <div class="admin-info margin-top-5"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $website; ?></div>
        <div class="admin-info margin-top-5"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $contacted_phone; ?></div>
        <div class="margin-top-15 admin-social">
          <a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a href="<?php echo $youtube_url; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a href="<?php echo $google_plus; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="col-lg-8">
      <div class="menu-bottom">
                    <?php     
                    $args = array( 
                        'menu'              => '', 
                        'container'         => '', 
                        'container_class'   => '', 
                        'container_id'      => '', 
                        'menu_class'        => 'bottommenu', 
                        'menu_id'           => 'bottom-menu', 
                        'echo'              => true, 
                        'fallback_cb'       => 'wp_page_menu', 
                        'before'            => '', 
                        'after'             => '', 
                        'link_before'       => '', 
                        'link_after'        => '', 
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                        'depth'             => 3, 
                        'walker'            => '', 
                        'theme_location'    => 'bottom-menu' 
                    );
                    wp_nav_menu($args);
                    ?>    
                    <div class="clr"></div>     
                </div>         
            <?php if(is_active_sidebar('copy-right-widget')):?>
      <?php dynamic_sidebar('copy-right-widget')?>
    <?php endif; ?>       
    </div>
  </div>
	<div class="container copyright margin-top-15">
		 		
	</div>	
</footer>
<div class="modal fade" id="modal-alert-add-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
        
      </div>      
    </div>
  </div>
</div>