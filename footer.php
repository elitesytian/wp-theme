	</main>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">Footer</div>
			</div>
		</div>
	</footer>

	<!-- BACK TO TOP -->
	<a href="#" class="back-top">
		<i class="far fa-caret-square-up"></i>
	</a>

	<?php
		$loader_toggle = get_theme_mod('loader_toggle');
		$loader_img    = get_theme_mod('loader_img');
	?>
	<!-- LOADER -->
	<?php if ($loader_toggle == 'on'): ?>
		<div class="site-loader">
			<div class="wrap">
				<div class="inner-wrap">
					<?php if ($loader_img): ?>
						<img src="<?php echo $loader_img; ?>" alt="Loader">
					<?php else: ?>
						<img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/loader.gif"; ?>" alt="Loader">
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php wp_footer(); ?>

</body>
</html>