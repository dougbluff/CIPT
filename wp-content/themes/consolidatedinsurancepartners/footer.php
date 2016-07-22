<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Consolidated_Insurance_Partners
*/

?>

</div><!-- #content -->

<footer class="site-footer">
	<a href="<?php get_permalink(); ?>"> <?php webname(); ?>
	</a>
	, all rights reserved. &copy; 
	<?php echo date("Y"); ?> 
	<a href="http://creative.rainman.com/">Rainman Creative</a>
</a>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
