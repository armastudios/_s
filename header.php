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

<script type="text/javascript" src="//use.typekit.net/rxw5nhq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php
	$pageid = $_GET['page_id'];

	if($pageid == 102 || $pageid == 40) {
		// Restaurant slideshow
		$headerid = 497;
	} if($pageid == 427) {
		$headerid = 648;
	} else {
		// Default slideshow
		$headerid = 44;
	}
?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			
			<div id="headergroup">
				<div id="navwrapper">
					
					<div id="green-container">
						<div id="green">
						<?php echo qtrans_generateLanguageSelectCode('dropdown'); ?>
							
							<!--
							<?php if(qtrans_getLanguage()=='en'): ?>
								<a href="http://cgolf.armanet.ca/?lang=fr">Français</a>
							<?php endif; ?>
							<?php if(qtrans_getLanguage()=='fr'): ?>
								<a href="http://cgolf.armanet.ca/?lang=en">English</a>
							<?php endif; ?>
							-->
						</div>
					</div>
					

						<div id="nav-container" class="711">
							<div id="logo">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.gif">
							</div>	
							<div id="info">
		
								<h1 class="site-title tk-trajan-pro-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						
								<h1 class="site-title"></h1>
								<h2 class="site-description"></h2>
							</div>
							<div id="nav-menu">
								<nav role="navigation" class="site-navigation main-navigation">		
									<h1 class="assistive-text"><?php _e( 'Menu', '_s' ); ?></h1> 
									<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>					
									<div class="topmenu nav-contact">
										<?php wp_nav_menu( array( 'theme_location' => 'topnav4' )); ?>	
									</div>
									<div class="topmenu nav-events">
										<?php wp_nav_menu( array( 'theme_location' => 'topnav3' )); ?>	
									</div>
									<div class="topmenu nav-contact">
										<?php wp_nav_menu( array( 'theme_location' => 'topnav2' )); ?>
									</div>
									<div class="topmenu nav-lecarignan">
										<?php wp_nav_menu( array( 'theme_location' => 'topnav1' )); ?>	
									</div>
																		
								</nav><!-- .site-navigation .main-navigation -->
							</div>
						</div>
					</div>			
						<?php 
							if ($headerid == 648) {
								
						} else { ?>
							<div id="boxphotobg" >
								<div id="boxphoto" class="effect711">	
									<?php do_action('slideshow_deploy', $headerid); ?>										  		
								</div> 
							</div>
						<?php } ?>
										
	<div id="crumbtrail-container">
		<div id="crumbtrail">
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id"breadcrumbs">','</p>');
			} ?>		
		</div>
	</div>					
			</div><!-- #headergroup -->
		</hgroup>	
	</header><!-- #masthead .site-header -->	


<div id="main" class="site-main">

