<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

    <div id="myCarousel1" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"  style="display:none;"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php bloginfo('template_url');?>/images/index-imagery.jpg');"></div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev" style="display:none;">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next" style="display:none;">
            <span class="icon-next"></span>
        </a>
    </div>

	<div class="social_icons">
		<a class="si1" href="javascript:void(0);"></a>
		<a class="si2" href="javascript:void(0);"></a>
		<a class="si3" href="javascript:void(0);"></a>
		<a class="si4" href="javascript:void(0);"></a>
		<a class="si5" href="javascript:void(0);"></a>
		<a class="si6" href="javascript:void(0);"></a>
	</div>
	<div style="clear:both;"></div>

   <div class="section">

        <div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-3">
					<div class="row collapse navbar-collapse navbar-ex1-collapse">
					<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<hgroup>
								<h3>歡迎來到漢來的世界</h3>
								<h1>漢來大飯店</h1>
							</hgroup>
						    <div id="HomeCarousel" class="carousel slide" style="height:300px;">
						        <!-- Indicators -->
						        <ol class="carousel-indicators" style="left:35px; bottom:0;">
						            <li data-target="#HomeCarousel" data-slide-to="0" class="active"></li>
						            <li data-target="#HomeCarousel" data-slide-to="1"></li>
						            <li data-target="#HomeCarousel" data-slide-to="2"></li>
						        </ol>
						        <!-- Wrapper for slides -->
						        <div class="carousel-inner">
						            <div class="item active">
						                <div class="fill" style="background-image:url('<?php bloginfo('template_url');?>/images/飯店Lobby.jpg');"></div>
						            </div>
						            <div class="item">
						                <div class="fill" style="background-image:url('<?php bloginfo('template_url');?>/images/皇家套房02.jpg');"></div>
						            </div>
						            <div class="item">
						                <div class="fill" style="background-image:url('<?php bloginfo('template_url');?>/images/大樓外觀03.jpg');"></div>
						            </div>
						        </div>
						        <!-- Controls -->
						        <a class="left carousel-control" href="#HomeCarousel" data-slide="prev" style="display:none;">
						            <span class="icon-prev"></span>
						        </a>
						        <a class="right carousel-control" href="#HomeCarousel" data-slide="next" style="display:none;">
						            <span class="icon-next"></span>
						        </a>
						    </div>
						    <p style="margin:10px 0;">
						    	Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by fields. Rice paddies, sugar cane and yam fields abound on the land. Fish farms and lush green pastures characterized the agricultural countryside. ”.
						    </p>
						    <p style="margin:10px 0;">
						    	Kaohsiung is only 78 nautical miles apart or a 30-minute plane ride from Penghu (4.5 hours by boat). Many residents of Rong-Fu neighbourhood in Chien-Chin district are immigrants from Penghu due to the close proximity. So Kaohsiung also received another name “the inner community of Penghu-ers”.
						    </p>
						</div>
					</div>

					<div class="row" style="margin-top:20px">
						<div class="col-lg-9 col-md-9 col-xs-8"><h2>獨一無二的住房體驗</h2></div>
						<div class="col-lg-3 col-md-3 col-xs-4"><a href="#" style="float:right; margin-top:30px;">查看更多客房與套房 ></a></div>
					</div>
		            <div class="row" style="background-color:#f0f0f0;">
		            	<div class="col-lg-4 col-md-4">
		            		<h3>皇家套房</h3>
		            		<p>
		            			Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by fields. Rice paddies, sugar cane and yam fields abound on the land.
		            		</p>
		            	</div>
		            	<div class="col-lg-8 col-md-8">
		            		<img src="<?php bloginfo('template_url'); ?>/images/index-dining-img.jpg" style="width:100%;">
		            	</div>
		            </div>

					<div class="row" style="margin-top:20px">
						<div class="col-lg-9 col-md-9 col-xs-8"><h2>豐富多元的美味饗宴</h2></div>
						<div class="col-lg-3 col-md-3 col-xs-4"><a href="#" style="float:right; margin-top:30px;">查看更多餐廳 ></a></div>
					</div>
		            <div class="row" style="background-color:#dbbf90;">
		            	<div class="col-lg-4 col-md-4">
		            		<h3>海港餐廳</h3>
		            		<p>
		            			Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by fields. Rice paddies, sugar cane and yam fields abound on the land.
		            		</p>
		            	</div>
		            	<div class="col-lg-8 col-md-8">
		            		<img src="<?php bloginfo('template_url'); ?>/images/index-dining-img.jpg" style="width:100%;">
		            	</div>
		            </div>

					<div class="row" style="margin-top:20px">
						<div class="col-lg-9 col-md-9 col-xs-8"><h2>與眾不同的魔法空間</h2></div>
						<div class="col-lg-3 col-md-3 col-xs-4"><a href="#" style="float:right; margin-top:30px;">查看更多宴會會議介紹 ></a></div>
					</div>
		            <div class="row">
		            	<div class="col-lg-8 col-md-8">
		            		<img src="<?php bloginfo('template_url'); ?>/images/index-banqueting-img.jpg" style="width:100%;">
		            	</div>
		            	<div class="col-lg-4 col-md-4">
		            		<h3>金龍廳</h3>
		            		<p>
		            			Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by fields. Rice paddies, sugar cane and yam fields abound on the land.
		            		</p>
		            	</div>
		            </div>
					
					<div class="row" style="margin-top:20px">
						<div class="col-lg-9 col-md-9 col-xs-8"><h2>貴賓專屬</h2></div>
						<div class="col-lg-3 col-md-3 col-xs-4"><a href="#" style="float:right; margin-top:30px;">查看更多設施 ></a></div>
					</div>
		            <div class="row">
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-amentiesGym-img.jpg" style="width:100%">
		                    <h3>健身房</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-amentiesSauna-img.jpg" style="width:100%">
		                    <h3>三溫暖</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-amentiesSP-img.jpg" style="width:100%">
		                    <h3>游泳池</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		            </div>

					<div class="row" style="margin-top:20px">
						<div class="col-lg-9 col-md-9 col-xs-8"><h2>文化美學</h2></div>
						<div class="col-lg-3 col-md-3 col-xs-4"><a href="#" style="float:right; margin-top:30px;">查看更多文化之旅 ></a></div>
					</div>
		            <div class="row">
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-culturaltour01-img.jpg" style="width:100%">
		                    <h3>伍步雲畫作系列</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-culturaltour02-img.jpg" style="width:100%">
		                    <h3>伍步雲畫作系列</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		                <div class="col-lg-4 col-md-4">
		                    <img src="<?php bloginfo('template_url'); ?>/images/index-culturaltour03-img.jpg" style="width:100%">
		                    <h3>伍步雲畫作系列</h3>
		                    <p>Grand Hi-Lai is located in the Chien Chin district. The district used to be covered by... <a href="#">閱讀更多</a></p>
		                	<div class="bottom_border"></div>
		                </div>
		            </div>		            
	       		</div>
			</div><!-- /.row -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

        <footer style="background-color:#4d4d4d; color:#fff;">
            <div class="row">
                <div class="col-lg-12">
                	<div style="text-align:center;">
                		<ul class="footer-nav" style="margin:10px 0;">
                			<li><a href="#">回首頁</a></li>
                			<li><a href="#">人才招募</a></li>
                			<li><a href="#">交通資訊</a></li>
                			<li><a href="#">網站地圖 v</a></li>
                		</ul>
	                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                	<div style="text-align:center; margin:10px 0;">
						高雄市前金區801成功一路266號　高雄 / 電話 886-7-216-1766　傳真 886-7-216-1966　台北辦事處 / 電話 886-2-2751-7527　傳真 886-2-2711-0381
						<br>Copyright © 2014 The Grand Hi Lai Hotel, Inc. All rights reserved.
					</div>
				</div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="<?php bloginfo('template_url');?>/library/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_url');?>/library/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url');?>/library/js/modern-business.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDllhDQORmnhakKwA_bhSzWYhmDDwttEQE&sensor=false"></script>

    <script>

        document.onreadystatechange = function() {
            if (document.readyState === 'complete') {
                $(".navbar-right .dropdown-menu").each(function(){
                    var parentWidth = $(this).parent().innerWidth();
                    var menuWidth = $(this).innerWidth();
                    console.log('p:'+parentWidth);
                    console.log('m:'+menuWidth);
                    var margin = (parentWidth / 2 ) - (menuWidth / 2);
                    margin = margin + "px";
                    $(this).css("margin-left", margin);
                    $(this).css("left", 0);
                    $(this).css("right", 'auto');
                });
            }
        }

           // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(22.6203651,120.3012379), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#acbcc9'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
             
                // To add the marker to the map, use the 'map' property
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(22.619359,120.296113),
                    map: map,
                    title:"Grand Hi-Lai Hotel"
                });
            }
    </script>
</body>

</html>
<?php //get_footer(); ?>