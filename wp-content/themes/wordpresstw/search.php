<?php get_header(); ?>

	<main role="main">
		<section class="wrap-post wrap-result">
			<div class="post-list">
				<?php if ( have_posts() ) : ?>
					<h3 class="head-title">關鍵字「<?php echo get_search_query(); ?>」的搜尋結果</h3>
					<?php
					$args = array(
						'post_type' => 'fb_group_post',
						'posts_per_page' => 9999999,
						'orderby' => 'date',
						's' => get_search_query()
					);
					$the_query = new WP_Query( $args );

					while ($the_query->have_posts()) : $the_query->the_post();
					?>
					<article class="post">
						<p class="post-time"><?php echo get_the_date().' '.get_the_time(); ?></p>
						<div class="post-content"><p><?php echo get_the_content(); ?></p></div>
						<div class="wrap-info">
							<ul class="h-fl">
								<li><a class="btn-blue" href="<?php the_permalink(); ?>">查看貼文</a></li>
								<?php $comment = get_comments_number($post->ID); if( $comment == 0 ): ?>
								<li><a class="btn-blue" href="<?php comments_link(); ?>">搶頭香</a></li>
								<?php else: ?>	
								<li><a class="btn-blue" href="<?php comments_link(); ?>">查看 <?php echo $comment; ?> 則留言</a></li>
								<?php endif; ?>
							</ul>
							<span class="post-author h-fr">由 XXX 發表<?php echo $author_link; ?></span>
							<div class="clearfix"></div>
						</div>
					</article>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>

				<?php 
					$args2 = array(
					   'search' => get_search_query()
					);

					// The Query
					$comments_query = new WP_Comment_Query;
					$comments = $comments_query->query( $args2 );
				?>

				<?php if( $comments): ?>
					<?php foreach ( $comments as $comment ): ?>
						<article class="post">
							<p class="post-time"><?php echo $comment->comment_date; ?></p>
							<div class="post-content"><p><?php echo $comment->comment_content; ?></p></div>
							<div class="wrap-info">
								<ul class="h-fl">
									<li><a class="btn-blue" href="<?php echo get_comment_link(); ?>">查看貼文</a></li>
									<?php $comment = get_comments_number($post->ID); if( $comment == 0 ): ?>
									<?php endif; ?>
								</ul>
								<div class="clearfix"></div>
							</div>
						</article>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
