<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<title> Maszkety - magazyn śląskich blogerów </title>
		<meta name="description" content="Lokalne i sezonowe przepisy, a do tego co nieco o historii i kulturze Śląska.">
		<meta name="keywords" content="Magazyn Maszkety, Maszkety, śląscy blogerzy, Śląsk">
		<meta name="author" content="Katarzyna Godlewska">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Poiret+One|Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="index.css" type="text/css">
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

		<!-- Zdjęcie oraz teksty na nim -->
		<div class="content">
			<div class="photo-content">
			<img id="background" src="images/background.jpg" alt="background">

			<p class="main-text"> 
			<span class="magazine-title">MAGAZYN ŚLĄSKICH BLOGERÓW </span>
			<br> 
			<br>

			<span class="recipie-title">[naleśnik dutch baby z jagodami]</span>
			
			<br>
			<br>
			<a href="link_recipie" class="recipie-button">Przepis</a>
			</p>
			</div>
		</div>

		<!-- Trzy kolumny -->

		<div class="content-columns">
		
			<div class="about">

				<p class="about-column">

				<span class="about-title">O NAS</span>
				<br>
				<br>
				<span class="about-text"> Nasza historia sięga roku 2014, kiedy grupa śląskich blogerek postanowiła założyć magazyn internetowy. Z wielu pomysłów na nazwę zostały wybrane "Maszkety", oznaczające w śląskiej gwarze "przysmaki, coś dobrego do jedzenia". Pierwszy numer został wydany w czerwcu 2014 roku, od tego czasu każdy numer kwartalnika tworzy kilkanaście osób naszego zgranego zespołu. </span>
				<br>
				<br>
				<a href="link_about" class="about-button">Więcej</a>

				</p>
			
			</div>

			<div class="fundation">
			
				<a class="fundation-logo" rel="home"><img src="images/logo_fundacja.png" alt="logo_fundacja"></a>

				<p class="fundation-text">

				Od 2015 działa również Fundacja Maszkety - jej celem jest każda działalność promująca i wspierająca śląskich blogerów oraz region śląski, m.in.: wydawnicza, edukacyjna, fotograficzna, kulinarna, oraz społeczna, a także upowszechniająca wiedzę o historii, zwyczajach i kulinariach, wspierająca i rozwijająca kulturę, historię, zwyczaje i tradycje regionu.
				<br>
				<br>
				<a href="link_fundation" class="fundation-button">Więcej</a>

				</p>

			</div>

			<div class="cooperation">
			
				<p class="cooperation-column">

				<span class="cooperation-title"> WSPÓŁPRACA </span>
				<br>
				<br>
				<span class="cooperation-text"> Jesteś pasjonatem gotowania? A może kochasz Śląsk i jego kulturę? Uwielbiasz robić zdjęcia i dzielić się z innymi swoją pasją? A może lubisz współpracę z innymi blogerami? Jeśli tak to zapraszamy do kontaktu - nasza redakcja nieustannie się rozwija! <br><br>
				magazynmaszkety@gmail.com </span>
				
				<br>
				<a href="mailto:magazynmaszkety@gmail.com" class="cooperation-button">Napisz!</a>

				</p>

			</div>

		</div>


		
	</body>

	<footer id="footer">
		<div id="site-footer">
			<nav class="footer-navigation">
			<ul class="footer-menu">
				
				<li class="footer-item1"><a href="link_main">Główna</a></li>
				<li class="footer-item2"><a href="link_magazine">Magazyn</a></li>
				<li class="footer-item3"><a href="link_fundation">Fundacja</a></li>
				<li class="footer-item4"><a href="link_blog">Blog </a></li>
				<li class="footer-item5"><a href="link_about">Zespół</a></li>
				<li class="footer-item6"><a href="link_contact">Kontakt</a></li>
			</ul>
			</nav>

			<p id="copyrights"> © Maszkety 2016 </p>
		</div>
	</footer>
	
</html>
