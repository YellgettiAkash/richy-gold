<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
</head>
<body>
	<!-- header -->
	<div class="header">
		
		<div class="bottom-header">
			<div class="container">
				<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
					<h1><a href="#"><img src="<?= get_template_directory_uri() ?>/assets/images/rgm.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav id="navbar" class="navbar navbar-default">
						<div class="container">
				<?php wp_nav_menu(  ); ?>
				</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->