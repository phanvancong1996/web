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
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/font-awesome.min.css">
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

<body class="aboutpage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrapcore1' ); ?></a>
	<?php $anhheadertrangabout = get_field('anh_header'); ?>
	<?php if($anhheadertrangabout){ ?>
	<div class="headertren" style="background-image: url(<?php echo $anhheadertrangabout['url']; ?>)">
		<?php } 
		else{?>		
	<!-- 	begin headertren -->
				<div class="headertren">
					<?php } ?>
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
					<a class="navbar-brand" href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" alt=""></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<?php wp_nav_menu( array(
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
						'menu_class' => 'nav navbar-nav navbar-right'	
					)) ?>
				</div><!-- /.navbar-collapse -->
				</div>
				</nav>  <!--  end menu tren -->

				<?php 
					$tieudenhoabout = get_field('tieu_de_header');
					
				 ?>
				<!-- begin slide -->
				<div class="container tieudepage">
					<div class="row _2dongtext">
						<h3><?php 
							if(is_home()){
								echo get_post(get_option( "page_for_posts" ))->post_title;

							}
							else if(is_category('thoi-trang')){
								single_cat_title(); 
								
							}
							else{
								the_title(); 
							}
					 ?> </h3>
						<h4><?php echo $tieudenhoabout; ?></h4>
					</div>
				</div> <!-- end slide -->
				</div> <!-- end header tren -->
			

	<div id="content" class="site-content">
