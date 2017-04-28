<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Julio_Aenlle:_The_Blog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'julio-aenlle_the-blog' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'julio-aenlle_the-blog' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'julio-aenlle_the-blog' ), 'julio-aenlle_the-blog', '<a href="https://automattic.com/" rel="designer">Julio Aenlle | UX + Web Designer / Copywriter / Creative</a>' ); ?>
		</div>.site-info -->
        <ul>
            <li><a href="http://www.linkedin.com/in/julioaenlle"  target="_blank"><img src="http://www.julioaenlle.com/img/social/linkedin.svg" alt="Add me on Linkedin" title="Add me on Linkedin"></a></li>
            <li><a href="http://www.github.com/jaenlle"  target="_blank"><img src="http://www.julioaenlle.com/img/social/github.svg" alt="Follow me on GitHub" title="Follow me on GitHub"></a></li>
            <li><a href="https://twitter.com/julioaenlle"  target="_blank"><img src="http://www.julioaenlle.com/img/social/twitter.svg" alt="Follow me on Twitter" title="Follow me on Twitter"></a></li>
            <li><a href="http://codepen.io/julioa/"  target="_blank"><img src="http://www.julioaenlle.com/img/social/codepen.svg" alt="Follow me on CodePen" title="Follow me on CodePen"></a></li>
        </ul>

        <article id="subfooter">
            <a href="http://www.julioaenlle.com/"><img src="http://www.julioaenlle.com/img/logo/seal.svg" width="60" alt="Julio Aenlle | Copywriter&nbsp;/&nbsp;Web Designer&nbsp;/&nbsp;Creative" title="Julio Aenlle | Copywriter&nbsp;/&nbsp;Web Designer&nbsp;/&nbsp;Creative"></a>
        <!-- Auto-updating copyright year script from http://updateyourfooter.com/ -->
            <p>&copy; 2016<script>new Date().getFullYear()>2016&&document.write(" - "+new Date().getFullYear());</script> Aenlle Creative Services</p>
        </article>
	</footer><!-- #colophon -->
</div><!-- #page -->

</div><!-- container end -->

<?php wp_footer(); ?>

</body>
</html>
