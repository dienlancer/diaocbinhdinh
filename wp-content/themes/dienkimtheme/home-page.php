<?php 
	/*
	 Template Name: HomePage
	 */	 
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
     <?php get_header();     ?>
     <?php if(is_active_sidebar('slideshow-widget')):?>
        <?php dynamic_sidebar('slideshow-widget')?>
    <?php endif; ?>     
    <?php if(is_active_sidebar('about-project-widget')):?>
        <?php dynamic_sidebar('about-project-widget')?>
    <?php endif; ?>     
    <div class="bg-tam-nhin-xa">
        <div class="col-lg-5 no-padding"><img src="<?php echo site_url( '/wp-content/uploads/img_present_2.jpg', null ); ?>" /></div>
        <div class="col-lg-7 no-padding">
            <div class="bg-residence">
                <h3 class="chi-co">KHÁCH HÀNG QUAN TÂM TMS LUXURY HOTEL BÌNH ĐỊNH</h3>
                <span class="section-tms margin-top-15"></span>
                <div class="col-lg-6 no-padding margin-top-15">
                    <?php if(is_active_sidebar('introduce-1-widget')):?>
                        <?php dynamic_sidebar('introduce-1-widget')?>
                    <?php endif; ?>     
                </div>
                <div class="col-lg-6 no-padding-right margin-top-15">
                    <?php if(is_active_sidebar('introduce-2-widget')):?>
                        <?php dynamic_sidebar('introduce-2-widget')?>
                    <?php endif; ?>   
                </div>
                <div class="clr"></div>
                <div class="col-lg-6 no-padding margin-top-15">
                    <?php if(is_active_sidebar('introduce-3-widget')):?>
                        <?php dynamic_sidebar('introduce-3-widget')?>
                    <?php endif; ?>   
                </div>
                <div class="col-lg-6 no-padding-right margin-top-15">
                    <?php if(is_active_sidebar('introduce-4-widget')):?>
                        <?php dynamic_sidebar('introduce-4-widget')?>
                    <?php endif; ?>   
                </div>
                <div class="clr"></div>
            </div>
        </div>  
        <div class="clr"></div>      
    </div>    
    <?php if(is_active_sidebar('luxury-villa-widget')):?>
                        <?php dynamic_sidebar('luxury-villa-widget')?>
    <?php endif; ?>   
    <script type="text/javascript" language="javascript">
        jQuery(document).ready(function(){
                    jQuery("div.tab-power > div:nth-child(2)").show();
                    jQuery("div.tab-power > div.tab > div > div:first-child > button").addClass('active');
                });
                function openCity(evt, cityName) {    
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }   
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }   
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
    </script>
    <div class="room-dimention">
        <div class="container">
            <div class="cac-loai-can-ho"><center>Các loại căn hộ</center></div>
            <div class="slogan-hotel"><center>THÔNG TIN CĂN HỘ TMS LUXURY HOTEL QUY NHƠN</center></div>
            <span class="section-tms aquafina"></span>
            <div class="tran-gia-gia"><center>TMS Luxury Hotel & Residences BINH ĐINH gồm 328 phòng khách sạn tiêu chuẩn 5*, 740 căn hộ du lịch. Trong đó 56 căn được chủ đầu tư cam kết thuê lại</center></div>
            <div class="tab-power">                
                <div class="tab">                    
                    <div class="javapec">
                        <div class="col-xs-4 no-padding"><button class="tablinks h-title" onclick="openCity(event, 'can-ho-1-phong-ngu')">Căn hộ 1 phòng ngủ</button></div>
                        <div class="col-xs-4 no-padding"><button class="tablinks h-title" onclick="openCity(event, 'can-ho-2-phong-ngu')">Căn hộ 2 phòng ngủ</button></div> 
						<div class="col-xs-4 no-padding-right"><button class="tablinks h-title" onclick="openCity(event, 'tien-ich-noi-khu')">30 DỊCH VỤ TIỆN ÍCH 5*</button></div>                 
                        <div class="clr"></div>                                  
                    </div>                                                
                </div>
                <div id="can-ho-1-phong-ngu" class="tabcontent">
                    <?php if(is_active_sidebar('can-ho-mot-phong-ngu-widget')):?>
                        <?php dynamic_sidebar('can-ho-mot-phong-ngu-widget')?>
                    <?php endif; ?>   
                </div>
                <div id="can-ho-2-phong-ngu" class="tabcontent">
                    <?php if(is_active_sidebar('can-ho-hai-phong-ngu-widget')):?>
                        <?php dynamic_sidebar('can-ho-hai-phong-ngu-widget')?>
                    <?php endif; ?>   
                </div> 
				<div id="tien-ich-noi-khu" class="tabcontent">
                    <?php if(is_active_sidebar('tien-ich-widget')):?>
                        <?php dynamic_sidebar('tien-ich-widget')?>
                    <?php endif; ?>   
                </div>  
            </div>
        </div>
    </div>
    <div class="section  parallax-section">
        <div class="container">
            <div class="col-lg-6 no-padding">
                <div class="so-luoc-dia-diem">Sơ lược địa điểm</div>
                <div class="cac-tien-ich margin-top-15">Các tiện ích xung quanh</div>
                <span class="section-tms margin-top-15"></span>
                <ul class="essential-place margin-top-15">
                    <li>
                        <div>BÃI BIỂN BINH ĐINH</div>
                        <div>0,1 Km</div>
                        <div class="clr"></div>
                    </li>
                    <li>
                        <div>CHỢ LỚN BINH ĐINH</div>
                        <div>0,5 Km</div>
                        <div class="clr"></div>
                    </li>
                    <li>
                        <div>BỆNH VIỆN ĐA KHOA TỈNH</div>
                        <div>0,8 Km</div>
                        <div class="clr"></div>
                    </li>
                    <li>
                        <div>GA BINH ĐINH</div>
                        <div>1,8 Km</div>
                        <div class="clr"></div>
                    </li>
                    <li>
                        <div>SÂN BAY PHÙ CÁT</div>
                        <div>30 Km</div>
                        <div class="clr"></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 no-padding-right">
                <iframe src="<?php echo $ban_do; ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="room-dimention">
        <div class="container">
            <div class="cac-loai-can-ho"><center>Tin tức</center></div>
            <div class="slogan-hotel"><center>TMS LUXURY HOTEL &amp; RESIDENCES BINH ĐINH</center></div>
            <span class="section-tms aquafina"></span>
            <div class="margin-top-15">
                <?php if(is_active_sidebar('hot-news-widget')):?>
                        <?php dynamic_sidebar('hot-news-widget')?>
                    <?php endif; ?>   
            </div>
        </div>        
    </div>
    <?php get_footer(); ?>
    <?php wp_footer();?>
</body>
</html>