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
    <div class="cleopat">
        <div class="container cleopatrate">            
            <div class="cac-loai-can-ho"><center>Các loại căn hộ tại TMS Luxury Hotel & Residences Bình Định</center></div>
            <div class="slogan-hotel"><center>HÌNH ẢNH</center></div>
            <span class="section-tms aquafina"></span>
            <div class="tran-gia-gia"><center>Tổ hợp dự án cao nhất Quy Nhơn có quy mô 2.600m2, 41 tầng nổi, 1 tầng hầm, với 256 phòng khách sạn 5* tiêu chuẩn Quốc tế, 736 căn hộ du lịch trong đó có 62 căn hộ được chủ đầu tư cam kết thuê lại.</center></div>
        </div>
    </div>

    <div class="room-dimention-product">
        <div class="container">            
            <div class="tab-power">                
                <div class="tab">                    
                    <div class="javapec-product">
                        <div class="col-xs-6 no-padding"><button class="tablinks h-title" onclick="openCity(event, 'can-ho-1-phong-ngu')">Căn hộ 1 phòng ngủ</button></div>
                        <div class="col-xs-6 no-padding-right"><button class="tablinks h-title" onclick="openCity(event, 'can-ho-2-phong-ngu')">Căn hộ 2 phòng ngủ</button></div>                 
                        <div class="clr"></div>                                  
                    </div>                                                
                </div>
                <div id="can-ho-1-phong-ngu" class="tabcontent">
                    <div>
                        <div class="col-lg-8">
                            <center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-4.jpg', null ); ?>" /></figure></center>
                            <div class="margin-top-15">
                                <div class="col-lg-6"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-6.jpg',null ); ?>" /></figure></center></div>
                                <div class="col-lg-6"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/day-pho-sang-trong.png',null ); ?>" /></figure></center></div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-10.jpg', null ); ?>" /></figure></center></div>
                            <div class="margin-top-15"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-8.jpg', null ); ?>" /></figure></center></div>
                        </div>
                        <div class="clr"></div>
                    </div>                        
                </div>
                <div id="can-ho-2-phong-ngu" class="tabcontent">
                   <div>
                       <div class="col-lg-4"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-4.jpg', null ); ?>" /></figure></center></div>
                       <div class="col-lg-4"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-10.jpg', null ); ?>" /></figure></center></div>
                       <div class="col-lg-4"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-8.jpg', null ); ?>" /></figure></center></div>
                       <div class="clr"></div>
                   </div>
                   <div class="margin-top-15">
                       <div class="col-lg-8">
                           <center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-6.jpg', null ); ?>" /></figure></center>
                       </div>
                       <div class="col-lg-4">
                           <div><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-2.jpg', null ); ?>" /></figure></center></div>
                           <div class="fruit"><center><figure><img src="<?php echo site_url( 'wp-content/uploads/can-ho-1.jpg', null ); ?>" /></figure></center></div>
                       </div>
                       <div class="clr"></div>
                   </div>
                </div>          
            </div>
        </div>
    </div>