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
					<h1><img src="<?= get_template_directory_uri();  ?>/asset/images/rgm.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php
								$args =[
								    'theme_location'  =>  'primary',
								    'container'       => '',
								    'container_class' => '',
								    'menu_class'      => 'nav navbar-nav',
								    'menu_id'         => 'nav',

								];		
							 wp_nav_menu( $args ); ?>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->