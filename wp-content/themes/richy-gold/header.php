<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
</head>
<body>
<?php get_site_url()."===".home_url()."====".get_permalink(); ?>
<?php 
$url = explode('/', get_permalink());
$web = explode('-',$url[4]);
// print_r($web);


?>

<?php '<pre>'.print_r(get_bloginfo(),true).'</pre>'; ?>
<?php if (get_site_url().'/' != get_permalink()) { ?>
	<!-- header -->
	<div class="header">
	<div class="top-header">
			<div class="container">
				<div class="top-header-info">
					<div class="top-header-left wow fadeInLeft animated" data-wow-delay=".5s">
						<p>Contact Us :- 07030707732 / 014541765 </p>
					</div>
					<div class="top-header-right wow fadeInRight animated" data-wow-delay=".5s">
						<div class="top-header-right-info">
							<ul>
								<!-- <li><a href="#">Login</a></li> -->
								<!-- <li><a href="#">Sign up</a></li> -->
							</ul>
						</div>
						<div class="top-header-right-info">
							<ul>
	<!-- 							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="twitter facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter google" href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
					<h1><a href="<?= get_site_url(); ?>/enter/" ><img src="<?= get_template_directory_uri();  ?>/assets/images/rgm.jpg" 
						class="img-responsive" alt="" /></a></h1>
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
								    'theme_location'  =>  $web[0],
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
	<?php } ?>