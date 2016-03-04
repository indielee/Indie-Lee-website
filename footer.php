<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Indie Lee
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div>

			<nav class="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>

			<?php ( !dynamic_sidebar('footer-information') ) ?>


      <div class="footer-bottom">

				<span class="tc-links">
					<?php wp_nav_menu( array( 'theme_location' => 'policies', 'menu_id' => 'T&Cs Menu' ) ); ?>
				</span>

        <span class="copyright">
          All rights reserved, Indie Lee® &amp; Co. Inc
        </span>
      </div>


    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
