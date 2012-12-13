<!DOCTYPE html>
<html>
	<head>
		<?php get_header() ?>
	</head>
	<body>
		<div id="wrapper" >
			<header>
				<h1><?php bloginfo('name')?></h1>
			</header>
			<nav id="primary-nav">
				<?php get_template_part('nav');//includes nav.php?>
			</nav>
			<div id="main">
				<div class="row">
					<div class="span9">
					<?php 
					/**
					 * check to see if current request...
					 * is_category()
					 * is_front_page()
					 * is_home()
					 * is_404()
					 * is_archive()
					 * is_page()
					 * is_single()
					 * is_tag()
					 * is_search()
					 */
					if(is_front_page()) {
						get_template_part('content','home');
					}elseif (is_page() || is_single()){
						get_template_part('content','single');
					}elseif (is_search()){
						get_template_part('content','search');
					}else{
						get_template_part('content','blog');
					}
					?>
					</div>
				<div class="span3">
				<?php get_sidebar();?>
				</div>
			</div>
		</div>
		<footer>
			<?php get_footer();?>
		</footer>
		</div>
	</body>
</html>