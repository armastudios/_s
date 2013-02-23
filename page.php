<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<div class="spacer" style="clear: both;"></div>
				<div id="pagebody">							
					

					<div id="pagebodyinner" class="effect7" >
								

						<?php while ( have_posts() ) : the_post(); ?>
						
						<div id="maincontent"><?php get_template_part( 'content', 'page' ); ?></div>
						<div id="mainsidebar"><?php get_sidebar(); ?></div>


				
							<?php // comments_template( '', true ); ?>
							<div class="spacer" style="clear: both;"></div>
						<?php endwhile; // end of the loop. ?>
					</div>test
				
				</div>
				
			</div><!-- #content .site-content -->
		
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>