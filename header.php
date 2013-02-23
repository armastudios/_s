<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 * @since _s 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<div id="headergroup">
				
				<!-- <img xsrc="/wp-content/themes/cgolfv3/images/logo.gif"> --> 
				<div id="navcontainer">			
					<nav role="navigation" class="site-navigation main-navigation">					
						<h1 class="assistive-text"><?php _e( 'Menu', '_s' ); ?></h1> 
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>					
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- .site-navigation .main-navigation -->
				</div>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		
	
				<div id="boxphotobg" class="">
					<div id="boxphoto" class="effect7">			
						 <img src="/wp-content/themes/cgolfv3/images/boxphoto.gif">
					</div> 
				</div>
				
				<div id="headerboxes">
						<div id="middlebox">
							<h1>Le Carignan</h1>
							<ul>
								<li>Prices</li>
								<li>Photos</li>
								<li>Dress Code</li>
								<ul><li>more...</li></ul>
							</ul>
						</div>
						
							<img src="/wp-content/themes/cgolfv3/images/menudivider.gif">
						
						<div id="middlebox">
							<h1>Banquet Hall</h1>
							<ul>
								<li>Menus</li>
								<li>Photos</li>
								<li>Reservations</li>
								<ul><li>more...</li></ul>
							</ul>
						</div>
						
							<img src="/wp-content/themes/cgolfv3/images/menudivider.gif">
												
						<div id="middlebox">
							<h1>Directions from:</h1>
							<ul>
								<li>Champlain Bridge</li>
								<li>Hippolyte Lafontaine</li>
								<li>Autoroute 10 heading west</li>
								<ul><li>more...</li></ul>
							</ul>
						</div>
												
							<img src="/wp-content/themes/cgolfv3/images/menudivider.gif">
						
						<div id="middlebox">
							<h1>Contact</h1>
							<ul>
								<li>Le Chambly: 450-657-6812</li>
								<li>Email: info@chamblygolf.com</li>
								<ul><li>more...</li></ul>
							</ul>
						</div>
					</div>

				</div>
			</div><!-- #headergroup -->
		</hgroup>	
	</header><!-- #masthead .site-header -->	

<div id="main" class="site-main">
	
