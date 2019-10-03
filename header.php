<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<meta name="theme-color" content="#c81919">
	<title></title>
	<?php wp_head(); ?>

	<!-- GOOGLE -->
	<?php
		$analytics     = get_theme_mod( 'google_analytics' );
		$tracking_code = get_theme_mod( 'google_tracking_code' );
		$tracking_num  = get_theme_mod( 'google_tracking_number' );
		$tag_manager   = get_theme_mod( 'google_tag_manager' );
	?>

	<!-- GOOGLE TAG MANAGER -->
	<?php if ($tag_manager): ?>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo $tag_manager; ?>');</script>
	<?php endif; ?>

	<!-- GOOGLE TRACKING -->
	<?php if ($tracking_code && $tracking_num): ?>
		<script type="text/javascript">(function(a,e,c,f,g,b,d){var h={ak:"<?php echo $tracking_num; ?>",cl:"<?php echo $tracking_code; ?>"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
		</script>
	<?php endif; ?>

	<!-- GOOGLE ANALYTICS -->
	<?php if ($analytics): ?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php echo $analytics; ?>']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s  = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<?php endif; ?>

</head>

<body <?php body_class(); ?> <?php echo ( $tracking_num && $tracking_code ) ? 'onload="_googWcmGet(\'tracknumber\', \'' . $tracking_num . '\')"': ''; ?> data-directory-uri="<?php echo get_stylesheet_directory_uri(); ?>">
	<?php do_action( "after_body_tag" ); ?>

	<?php if ($tag_manager): ?>
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $tag_manager; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
	<?php endif; ?>

	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- SITE HEADER -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">Header</div>
				<div class="col-12 col-lg-6"><a href="" class="mobile-menu-trigger">Menu</a></div>
			</div>
		</div>
	</header>

	<!-- MAIN WRAPPER -->
	<main id="main-wrapper">