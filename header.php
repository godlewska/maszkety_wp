<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title> <?php wp_title(); ?></title>
		<meta name="description" content="Lokalne i sezonowe przepisy, a do tego co nieco o historii i kulturze Śląska.">
		<meta name="keywords" content="Magazyn Maszkety, Maszkety, śląscy blogerzy, Śląsk">
		<meta name="author" content="Katarzyna Godlewska">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Poiret+One|Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" >


		<?php wp_head(); ?>
	</head>
	
	<body>

		<header id="header" role="banner">
		<div id="site-banner">
	
			<!-- Logo -->
			<div id="logo">
			<a class="site-logo" href="http://magazynmaszkety.pl" rel="home"><img src="images/logo.png" alt="logo"></a>

			</div>

			<!-- Menu główne -->

			<a href="javascript:void(0);" class="rwd-icon" onclick="responsiveFunction()">☰</a>
			<nav class="main-navigation">
			<ul class="main-menu" id="main-nav">
				
				<li class="menu-item1"><a href="link_main">Główna</a></li>
				<li class="menu-item2"><a href="link_magazine">Magazyn</a></li>
				<li class="menu-item3"><a href="link_fundation">Fundacja</a></li>
				<li class="menu-item4"><a href="link_blog">Blog </a></li>
				<li class="menu-item5"><a href="link_about">Zespół</a></li>
				<li class="menu-item6"><a href="mailto:magazynmaszkety@gmail.com">Kontakt</a></li>
				
				
			</ul>
			</nav>

			<!-- Menu social media -->
			<nav class="social-navigation">
			<ul class="social-menu">

				<li class="social-item2"><a href="link_instagram"><img src="images/icon_insta.png" alt="logo"></a></li>
				<li class="social-item3"><a href="mailto: magazynmaszkety@gmail.com"><img src="images/icon_mail.png" alt="logo"></a></li>
				<li class="social-item1"><a href="link_facebook"><img src="images/icon_fb.png" alt="logo"></a></li>
			</ul>
			</nav>


		
		</div>

		<script>
			function responsiveFunction() {
    			var x = document.getElementById("main-nav");
   				 if (x.className === "main-menu") {
       				 x.className += " responsive";} 

       			else {
       				 x.className = "main-menu";
   					 }
}
		</script>
		</header>