<?php get_header(); ?>
	<main role="main">
		<div class="wrap-intro">
			<h1 class="intro-title"><img src="<?php echo get_template_directory_uri(); ?>/img/img-home-logo.svg" alt="WordPress Taiwan 正體中文社團"></h1>
			<h2 class="intro-desp">有 WordPress 的疑難雜症？<br>快來試試 WordPress 搜尋引擎吧！</h2>
			<form class="intro-search" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="search-input" type="search" name="s" placeholder="請輸入關鍵字...">
				<button class="search-submit" type="submit" role="button">搜尋</button>
			</form>
			<div class="intro-tip tooltip"><span class="ps">- 資料來源 -</span></div>
			<nav class="nav intro-nav">
				<?php html5blank_nav(); ?>
			</nav>
		</div>
		<section class="wrap-post">
			<div class="post-list">
				<h3 class="head-title">最新貼文</h3>
				<?php get_template_part('loop'); ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
