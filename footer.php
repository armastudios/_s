<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

	</div><!-- #main .site-main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer-area">
				<div class="footerbox">
					<b>Le Carignan</b>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox1' )); ?>
				</div>
				<div class="footerbox">
					<b>Tournois</b>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox2' )); ?>
				</div>
				<div class="footerbox">
					<b>Salle de réception</b>
					<?php wp_nav_menu( array( 'theme_location' => 'footerbox3' )); ?>
				</div>
				<div class="footerbox">
					<b>Contact</b>
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