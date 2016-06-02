<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GRAND HI-LAI HOTEL - DEMO</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/library/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php bloginfo('template_url');?>/library/css/modern-business.css" rel="stylesheet">
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <?php
    wp_head();
    ?>

</head>
	
	<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
	                <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('template_url');?>/images/logo_han.png"></a>
				</div>
				<div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
					<div id="navbar_temp"><?php KH_temp(); ?></div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-10 col-xs-9">
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="row">
		            	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-3">
			                <ul class="nav navbar-nav navbar-right">
			                    <li class="hidden-xs"><a href="#">會員登入</a></li>
			                    <li class="hidden-xs sep_line"></li>
			                    <li class="hidden-xs"><a href="#">聯繫我們</a></li>
			                    <li class="hidden-xs sep_line"></li>
			                    <li><?php do_action('icl_language_selector'); ?></li>
			                </ul>
			            </div>
		                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
			                <button type="button" class="order_btn">線上預訂</button>
		                </div>
				        <div class="hidden-lg hidden-md hidden-sm col-xs-2">
				            <div class="navbar-header">
				                <button type="button" id="mobile_menu_btn" class="navbar-toggle">
				                    <span class="sr-only">Toggle navigation</span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
							</div>
				        </div>
		            </div>
		        </div>
		    </div>
        </div>
        <!-- /.container -->
        <ul id="mobile-menu" class="hidden-lg hidden-md hidden-sm" style="display:none;">
        	<li><a href="#">test1</a></li>
        	<li><a href="#">test2</a></li>
        	<li><a href="#">test3</a></li>
        </ul>
    </nav>

<script>
var $ = jQuery.noConflict();
$(function(){
	$('#mobile_menu_btn').on('click', function(){
		$('#mobile-menu').toggle();
	})
})
</script>
