<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */

$pageid = $_GET['page_id'];
echo $pageid;
 
if ($pageid == 427) {
	$class = 'footer-area-gallery';
} else {
	$class = 'footer-area';
}
 
?>


	</div><!-- #main .site-main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="<?php echo $class ?>">
				<div class="footerbox">
					<?php if(qtrans_getLanguage()=='en'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=16?lang=en"><h2>Le Carignan</h2></a>
					<?php endif; ?>
					<?php if(qtrans_getLanguage()=='fr'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=16?lang=fr"><h2>Le Carignan</h2></a>
					<?php endif; ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox1' )); ?>
				</div>
				<div class="footerbox">
					<?php if(qtrans_getLanguage()=='en'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=47?lang=en"><h2>Tournaments</h2></a>
					<?php endif; ?>
					<?php if(qtrans_getLanguage()=='fr'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=47?lang=fr"><h2>Tournois</h2></a>
					<?php endif; ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox2' )); ?>
				</div>	
				<div class="footerbox">	
					<?php if(qtrans_getLanguage()=='en'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=47?lang=en"><h2>Events & Banquets</h2></a>
					<?php endif; ?>
					<?php if(qtrans_getLanguage()=='fr'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=47?lang=fr"><h2>Salle de réception</h2></a>
					<?php endif; ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox3' )); ?>
				</div>
				<div class="footerbox">
					<?php if(qtrans_getLanguage()=='en'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=13?lang=en"><h2>Contact</h2></a>
					<?php endif; ?>
					<?php if(qtrans_getLanguage()=='fr'): ?>
						<a href="http://cgolf.armanet.ca/?page_id=13?lang=fr"><h2>Contact</h2></a>
					<?php endif; ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox4' )); ?>
				</div>
				<div id="footersearch">
					<aside id="search" class="widget widget_search">
						<h1>Search</h1><?php get_search_form(); ?>
					</aside>
				</div>
				<div class="spacer" style="clear: both;"></div>
				<div id="footer-copyright">
					© Chambly Golf Club 2013
					Website created by <a href="Arma Studios">Arma Studios</a><br>
				</div>
			</div>
		<!--
		<div class="site-info">

			<!--
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
			-->
		<!--</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>