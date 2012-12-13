<?php if(have_posts()): ?>
	<?php while (have_posts()) : the_post() ?>
		<h2><?php the_title()?></h2>
		<div class="meta">
			<span class="author">by <?php the_author()?></span>
			<span class="date">Published on <?php the_time(get_option('date_format')); ?></span>
			<span class="comments">  </span>
		</div>
		<div class="story-content">
			<?php the_content()?>
		</div>
	<?php endwhile;?>
<?php endif;?>