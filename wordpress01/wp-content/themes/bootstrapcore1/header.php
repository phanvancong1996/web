<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrapcore1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


				<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery-3.2.1.min.js"></script>
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.css">
				<script src="<?php bloginfo('stylesheet_directory') ?>/js/bootstrap.min.js"></script>
				<!-- load font google -->
				
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
				<!-- load font playfair -->
				<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

					<!-- 	thu vien fancy box -->
				
				<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.fancybox.min.js"></script>
				
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jquery.fancybox.min.css">
				
				<!-- 	thu vien fancy box -->
				<!-- 	jquery nhay so -->
				
					<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.waypoints.js""></script>
					<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.counterup.min.js"></script>

					<!-- end 	jquery nhay so -->
					
					<!-- chuyen dong bang wow.js và animate.css -->

				<!-- <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
				<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script> -->
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/animate.css">
					<script src="<?php bloginfo('stylesheet_directory') ?>/js/wow.min.js"></script>
					
				<!-- end chuyen dong bang wow.js và animate.css -->


				

				<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/1.css">
				<script src="<?php bloginfo('stylesheet_directory') ?>/1.js"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrapcore1' ); ?></a>

				<!-- begin headertren -->
				<?php 
				$tenanh = get_field('anh_slide_trang_chu');
				 ?>
				
				<div class="headertren">
				<nav class="navbar navbar-default" role="navigation">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory') ?>/img/logo.png" alt=""></a>
				</div>
					
					<?php wp_nav_menu( array(
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
						'menu_class' => 'nav navbar-nav navbar-right'	
					)) ?>
				<!-- begin menu -->
				<!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
					
					 
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Our Work</a></li>
						<li><a href="#">Our Blog</a></li> 
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div> --><!-- end menu --> -->

				</div>
				</nav> 


				<?php 
				$dong1 = get_field('dong_so_1_chu_to'); 
				$dong2 = get_field('dong_so_2_chu_to'); 
				$dong3 = get_field('dong_so_3_chu_to'); 

				$tennut1 = get_field('ten_nut_1');
				$linknut1 = get_field('link_nut_1');
				$tennut2 = get_field('ten_nut_2');
				$linknut2 = get_field('link_nut_2');
				 ?>

				<!-- begin slide -->
				<div class="container khoitextslide">
				<div class="col-sm-12">
				<div class="badongtext">
					<div class="d1">
					<?php echo $dong1; ?>
					</div>
					<div class="d2">
					<?php echo $dong2; ?>
					</div>
				 <?php echo $dong3; ?>
				</div>
				<div class="hainut">
					<?php if(!empty($tennut1)) {?>
							<a href="<?php echo $linknut1; ?>" target="_blank" class="btn btn-default nuttrang"><?php echo $tennut1; ?></a>
					<?php } ?>
					<?php if(!empty($tennut2)) {?>
							<a href="<?php echo $linknut2; ?>"  target="_blank" class="btn btn-info nutxanh"><?php echo $tennut2; ?></a>
					<?php } ?>

				</div>
				</div>
				</div> <!-- end slide -->
				</div> <!-- end header tren -->

	<div id="content" class="site-content">
