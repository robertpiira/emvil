<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
</div><!-- /#wrapper -->
<footer class="the-end">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<ul class="footer-links">
	<li>
		<a href="http://www.piira.se" title="Robert Piirainen, webbdesigner, gränssnittsutvecklare" >Themed by Robert Piira</a>
	</li>
	<li>
		<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
	</li>
</ul>


</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/emvil.js"></script>
<?php wp_footer(); ?>

</body>
</html>