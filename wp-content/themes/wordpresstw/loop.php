<?php
global $post;
$author_id   = get_post_meta( $post->ID, '_fb_author_id', true );
$author_name = get_post_meta( $post->ID, '_fb_author_name', true );
$link        = get_post_meta( $post->ID, '_fb_link', true );
$group_id    = get_post_meta( $post->ID, '_fb_group_id', true );
$author_link = sprintf( '<a href="https://facebook.com/profile.php?id=%d" target="_blank">%s</a>', $author_id, $author_name );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'fb_group_post',
	'posts_per_page' => 20,
	'paged' => $paged,
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
		<!-- <span class="post-author h-fr">由 XXX 發表<?php echo $author_link; ?></span> -->
		<div class="clearfix"></div>
	</div>
</article>
<?php endwhile; wp_reset_postdata(); ?>