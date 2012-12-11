<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_url');?>"/>
	
		<title><?php bloginfo('name');?></title>
	</head>
	<body>
		<h1><?php bloginfo('name');?></h1>
	 	<p><?php bloginfo('description');?></p>
	 	
	 	<div class="posts">
	 	<?php if(have_posts()) :?>
	 		<?php while(have_posts()):?>
	 			<?php the_post()?>
	 			<h2><a href="<?php the_permalink()?>"></a><?php the_title()?></h2>
	 			<?php the_content();?>
	 		<?php endwhile;?>
	 	<?php endif;?>
	 	
	 	</div>
	 	
	</body>
</html>