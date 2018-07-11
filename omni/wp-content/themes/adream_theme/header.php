<?php
/**
 *
 * @package Adream

 */
include('settings.php');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- Meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="title" content="<?php bloginfo(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="description" content="<?php echo $metaDescription ?>">
  	<meta name="keywords" content="<?php echo $metaKeywords; ?>">
	<!-- OG tags -->
	<meta property="og:title" content="<?php bloginfo(); ?>" />
	<meta property="og:type" content="<?php echo $ogType; ?>" />
	<meta property="og:url" content="<?php echo site_url(); ?>" />
	<meta property="og:image" content="<?php echo $ogImageUrl; ?>" />
	<!-- OG tags end -->
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/preloader.css" type="text/css" media="all">
	<!-- <link rel="stylesheet" href="style" type="text/css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<!-- google fonts -- >
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:300" rel="stylesheet">

	<!-- google fonts end -->

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<?php wp_head(); ?>



<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	
	<script type="text/javascript">
		var Preloader = function() {
			document.getElementById("loader").removeAttribute("class");
			document.getElementById("loader").style.opacity = "0";
		};
		window.onload = Preloader;
	</script>
	<?php echo $googleTagMenager; ?>
</head>
<body <?php body_class(); ?>>
<div class="content">
<!--[if lt IE 10]>
	<div class="alert alert-warning">
		You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</div>
<![endif]-->
<?php // get_template_part('view/parts/image-extender'); ?>
	<?php // get_template_part('view/parts/cookies'); ?>
	<!--<div id="psd"></div>
	<div id="psd_switch">PSD ON/OFF</div> -->
	<!-- <div id="go_to_top"></div> -->
<div class="space"></div>
<div class="nav">
        
<div id="hamburger" class="container">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<div class="hamburgermenu" id="hamburgermenu">
<div class="links">
	<ul>
<li><a href="#" >Strona Głowna</a></li> 
<li><a href="#kompetencje" >Nasze Kompetencje</a></li> 
<li><a href="#" >Współpraca</a></li> 
<li><a href="#contact" >Kontakt</a></li>
	</ul> 
	</div>

</div>


	</div>







