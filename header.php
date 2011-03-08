<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Emvil
 * @since Emvil 1.0
 */
?><!DOCTYPE html>

<!--[if IE 7 ]> <html class="no-js ie7" <?php language_attributes(sv-SE); ?>> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" <?php language_attributes(sv-SE); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(sv-SE); ?>> <!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.6.min.js"></script>
</head>

<body <?php body_class(); ?>>
<b class="frame top"></b>
<b class="frame right"></b>
<b class="frame bottom"></b>
<b class="frame left"></b>
<div id="wrapper">
	<header class="line" id="masthead">
		<h1 class="logo">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ir" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<p class="tagline"><?php bloginfo( 'description' ); ?></p>
	
	</header>
