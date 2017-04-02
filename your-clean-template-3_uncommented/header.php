<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php /* RSS и всякое */ ?>
	<!-- <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>"> -->
	<!-- <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>"> -->
	<!-- <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>"> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-XXXXXXXX-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
					    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#NavBar" aria-controls="NavBar" aria-expanded="false" aria-label="Toggle navigation">
					        <span class="navbar-toggler-icon"></span>
					    </button>
					    <a class="navbar-brand" href="#">Название</a>
					    <div class="collapse navbar-collapse" id="NavBar">
					        <ul id="top-nav-ul" class="navbar-nav top-menu">
								<?php $args = array(
									'theme_location' => 'top',
									'container'=> false,
							  		'menu_id' => '',
							  		'items_wrap' => '%3$s',
									'menu_class' => '',
							  		'walker' => new bootstrap_menu(true)
						  			);
									wp_nav_menu($args);
								?>
					        </ul>
					    </div>
					</nav>
				</div>
			</div>
		</div>
	</header>