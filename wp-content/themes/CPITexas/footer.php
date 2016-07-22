<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage CPITexas
 * @since CPITexas 1.0
 */
?>

</div><!-- .site-content -->

<footer class="site-footer">
	<a href="<?php get_permalink(); ?>"> <?php webname(); ?>
	</a>
	, all rights reserved. &copy; 
	<?php echo date("Y"); ?> 
	<a href="http://creative.rainman.com/">Rainman Creative</a>
</a>
</footer>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
