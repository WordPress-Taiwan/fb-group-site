<?php get_header(); ?>

	<main role="main">
		<section class="wrap-single-post">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="single-post post-list">
				<p class="post-time"><?php echo get_the_date().' '.get_the_time(); ?></p>
				<?php the_content(); ?>
				<span class="post-author h-fr">由 XXX 發表<?php echo $author_link; ?></span>
			</article>
			<div class="wrap-comment">
				<div class="comment-list">
					<?php comments_template(); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
