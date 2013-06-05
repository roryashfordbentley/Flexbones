<?php 
	
// Useful snippets
//
// Just a place to dump reuseable snippets BUT NOT to include them
?>


<?php // Display posts from a page/archive/category on another page  ?>
<div class="latest-news">
	<ul>
		<?php  
		// LATEST NEWS 
		$news_feed = new WP_Query('post_type=press-releases&showpost=6');
		while($news_feed->have_posts()){ 
			$news_feed->the_post();
		?>
			<li>
				<h2><a href="<?php the_permalink()?>" rel="Bookmark"><?php the_title()?></a></h2>
				<span class="home-news-date"><?php the_date('jS F'); ?></span>
			</li>
		<?php } ?>	
	</ul>
</div>
