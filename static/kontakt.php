<!DOCTYPE html>
<html>
<head>
	<title>Spring Salon - Njega Stopala</title>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui" />
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/navigation.css">
	<link rel="stylesheet" type="text/css" href="../css/kontakt.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Butterfly+Kids&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

</head>
<body>

	<nav class="navigationBar">
			<div class="navigationLogoHeader">
				<div class="logoBox">
					<div class="logoImgBox"><img src="../images/cvijet.png" class="logoImg"></div>
					<div class="logoTextBox"><p>spring</p></li></div>
				</div>
				<div class="menuImg" id="menuImg"></div>
				<div class="clear"></div>
			</div>
		<div class="navigationLinksWrapper">
			<ul class="navigationLinks">
				<li class="link"><a href="../index.html">Što nudimo?</a></li>
				<li class="link linkTretmani">
					<a>Tretmani </a> <img src="../images/arrow2.svg" class="arrow">
					<ul class="subMenu">
						<li class="rombLi"><div class="romb"></div></li>
						<li><a href="../static/njega_stopala.html">Njega stopala</a></li>
						<li><a href="../static/njega_ruku.html">Njega ruku</a></li>
						<li><a href="../static/masaze.html">Masaže</a></li>
						<li><a href="../static/termo_deka.html">Termo deka</a></li>
						<li><a href="../static/depilacija_zene.html">Depilacije - žene</a></li>
						<li><a href="../static/depilacija_muski.html">Depilacije - muškarci</a></li>
						<li><a href="../static/lice.html">Lice</a></li>
						<li><a href="../static/njega_leda.html">Njega leđa</a></li>
					</ul>
				</li>
				<li class="link linkWellness"><a>Wellness dan</a>
					<img src="../images/arrow2.svg" class="arrow2">
					<ul class="subMenu2">
						<li  class="rombLi"><div class="romb"></div></li>
						<li><a href="../static/standard.html">Standard</a></li>
						<li><a href="../static/exclusive.html">Exclusive</a></li>
						<li><a href="../static/rodendan.html">Rođendan</a></li>
					</ul>
				</li>
				<li class="link"><a href="../static/kontakt.php" id="activeLink">Kontakt</a></li>
			</ul>
		</div>
	</nav>
	<content class="content">
	<div id="mail_notif">
			<?php 
				$name = $_POST["ime"];
				$number = $_POST["mobitel"];
				$email = $_POST["email"];
				$message = $_POST["poruka"];
				$subject = "Upit sa weba";
				$to = 'mirjamskarica@gmail.com';
				
				$body = " From: $name \n E-mail: $email \n Number: $number \n\n Message: $message";
				if($_POST["submit"]){
					if(mail($to, $subject, $body, $from)){
						echo "<p>Vasa poruka je poslana</p>";
					}else{
						echo "<p>Ops, nesto je poslo po krivu </p>";
					}
				}
			?>
		</div>
		<div id="map_canvas"></div>
		<div id="googleMapsFormContentResponsive">
			<form method="POST">
				<h1 class="h1Kontakt">Dogovorite svoj termin</h1>
				<h4 class="h4Kontakt">Preko telefona</h3>
				<h3 class="h3Kontakt">099 873 56 32</h3>
				<h4 class="h4Kontakt">Ili</h4>
				<h4 class="h4Kontakt">Slanjem E-maila</h4>
				<input type="text" name="ime" placeholder="Vaše ime i prezime"  required><br/><br/>
				<input type="tel" name="mobitel" placeholder="Vaš kontakt broj"  required><br/><br/>
				<input type="email" name="email" placeholder="Vaš e-mail"  required><br/><br/>
				<textarea name="poruka" placeholder="Unesite Vašu poruku.."  required></textarea><br/>
				<input type="submit" name="submit" value="Pošalji" class="submit">  <br/><br/>
				<h4 class="h4Kontakt">Gdje se nalazimo?</h3>
				<h3 class="h3Kontakt zadnji">Dobojska 28, Zagreb</h3><br/>
				<h4 class="h4Kontakt">radno vrijeme</h4>
				<h3 class="h3Kontakt">10:00 - 20:00</h3>
				<h5 class="h5Kontakt">ponedjeljak do subote</h5>
		</form>
		</div>
	</content>


	




		<footer>
		<div class="footerBox">
			<div class="infoBox">
				<div class="infoBoxUl">
					<ul>
						<li><a href="https://www.facebook.com/pages/Spring-studio-za-njegu-lica-i-tijela/243270269209484">
							<img src="../images/facebook.svg">
						</li>
						<li class="facebookHover"><p>Svakodenevne ponude</p><p>pratite nas na facebook stranici</p></li></a>
					</ul>
				</div>
				<div class="infoBoxUl right">
					<ul>
						<li class="imgRight"><img src="../images/phone.svg"></li>
						<li class="textLeft"><p>099 873 56 32</p><p>rezervirajte svoj tretman</p></li>
					</ul>
				</div>
				<div class="infoBoxUl">
					<ul>
						<li ><img src="../images/map.svg"></li>
						<li><p>Dobojska 28, Zagreb</p><p>Croatia, 10000</p></li>
					</ul>
				</div>
				<div class="infoBoxUl right">
					<ul>
						<li class="imgRight"><img src="../images/clock.svg"></li>
						<li class="textLeft"><p>10:00 - 20:00</p><p>ponedjeljak do subota</p></li>
					</ul>
				</div>
		</div>
		<div class="copyright"><p>©2014 Spring salon - kozmetički salon za njegu i održavanje tijela. Sva prava pridržana.</p></div>
		</div>
	</footer>

	<script type="text/javascript" src="../js/navigation.js"></script>
	<script type="text/javascript">
		// conditional loading of contact.js
		(function(){
			function isMobile(){ return 'ontouchstart' in document.documentElement; }

			function loadContactJs(){
				var element = document.createElement("script");
				element.src = "../js/contact.js";
				document.body.appendChild(element);
			}
			// load only if desktop
			if( !isMobile()) loadContactJs();
		})();
		
	</script>
</body>
</html>