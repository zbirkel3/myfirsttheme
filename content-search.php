<div class="search-results">
<?php if(have_posts()): ?>
<ul class="nav nav-tabs nav-stacked">
	<?php while (have_posts()) : the_post() ?>
		<li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
	<?php endwhile;?>
</ul>
<?php else:?>
	<p class="alert">Sorry no search results match your search</p>
<?php endif;?>
</div>