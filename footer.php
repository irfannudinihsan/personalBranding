
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-blue-600 py-12 text-white font-poppins dark:bg-slate-800" role="contentinfo">
	
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center text-white">
		
	<p class="inline">Copyright</p> <span class="font-bold">&copy;</span> <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
