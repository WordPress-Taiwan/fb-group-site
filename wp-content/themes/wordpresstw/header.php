<!doctype html>
<html <?php language_attributes(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<head>
		<meta charset="UTF-8">
		<!-- 標題為頁面標題加網站標題 -->
		<title itemprop="name"><?php if(!is_home()){ echo the_title().' | '.get_bloginfo('title'); } else { echo get_bloginfo('title'); }?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name='viewport' content='width=device-width, initial-scale=1.0'  />
		<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
		<!-- 網頁關鍵字為文章的標籤 -->
		<meta name="keywords" content="<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ','; }}?>">
		<!--FACEBOOK OG TAG-->
		<meta property="fb:app_id" content="" />
		<meta property="og:title" content="<?php echo the_title();?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo get_permalink();?>">
		<meta property="og:site_name" content="<?php echo home_url(); ?>">
		<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
		<meta property="og:image" content="<?php  ?>">
		<?php wp_head(); ?>
		<?php wp_deregister_script('jquery'); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="header clear h-ani <?php if(!is_home()) { echo "header-page"; } ?>">
				<div class="wrap-header">
					<div class="logo h-fl">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<div class="wrap-search h-fl">
						<?php get_template_part('searchform'); ?>
					</div>
					<nav class="nav h-fl">
						<?php html5blank_nav(); ?>
					</nav>
					<div class="clearfix"></div>
				</div>
			</header>
			<header class="header h-mobileonly clear h-ani <?php if(!is_home()) { echo "header-page"; } ?>">
				<div class="wrap-header">
					<button class="nav-open"><img src="<?php echo get_template_directory_uri(); ?>/img/img-nav-open.svg" alt=""></button>
					<div class="wrap-search wrap-search-mobile">
						<?php get_template_part('searchform'); ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</header>
			<div class="wrap-mobile-nav h-mobileonly">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
					</a>
				</div>
				<nav class="nav">
					<?php html5blank_nav(); ?>
				</nav>
				<button class="nav-close">關閉</button>
			</div>