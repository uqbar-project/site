<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title>Uqbar Proyect</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-blue navbar-fixed-top" role="navigation">
        	<div class="container">
            	<div class="navbar-header">
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    	<span class="sr-only">Toggle navigation</span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                	</button>
                	<a class="navbar-brand" href="http://www.uqbar-project.org/"><img src="<?php echo get_template_directory_uri()."/img/logoChico.png"; ?>" alt="Uqbar Project"/></a>
            	</div>					
 <?php
            wp_nav_menu( array(
                'menu'              => 'Primary',
                'theme_location'    => 'Primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-right navbar-ex1-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
			</div>
		</nav>
		<div class="container">
