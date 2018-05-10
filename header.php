<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title><?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php global $style; echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>

		<div class="topo">
			<nav>
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_header.png" alt=""></a>
			</div>
			<div class="login">
				<a href="#contact">Request Consultation</a>
			</div>
			</nav>
		</div>

		<div class="slide">
			<h1 class="link desk">You can be one step ahead with MI Data</h1>
		</div>
		
	</header>

	<main>