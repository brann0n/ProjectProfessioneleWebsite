<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="../image/logo.png">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="contact.css">
		<title>T' Veenhoog</title>
	</head>
	<body>
		<div class="centering">
				<div class="logo">
					<a href="index.php"><img src="../image/logo.png" alt="logo" /></a>
				</div>
			<div class="mainBody">
				<div class="mainHeader">
					<div class="h1Title">
						<h1>Technische Hogeschool 'T Veenhoog</h1>
					</div>
				</div>
				<div class="mainContent">
				<!-- Voer hier je data in -->
				<h2 class="contactTitle">Contact</h2>
				<div id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2416.022312660945!2d6.47775341551293!3d52.731789779854836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c81a8e641dd64f%3A0xa73e8f9d8f3eb6d6!2sIndustrieweg+30%2C+7902+AB+Hoogeveen!5e0!3m2!1sen!2snl!4v1540991330081" 
					width="450" height="400" frameborder="0"  allowfullscreen></iframe>
				</div>
				<div id="location">
					<ul>
						<li><b>Adres:</b></li>
						<li>Industrieweg 30</li>
						<li>7902AB Hoogeveen</li>
						<li>The Netherlands</li>
					</ul>
				</div>
				<div id="contact">
					<ul>
						<li><b>Contact info:</b></li>
						<li>088 1884444 </li>
						<li><a href="mailto: support@tveenhoog.com">support@tveenhoog.com</a></li>
					</ul>
				</div>
				<div id="form">
					<h3>Do you have any questions?</h3>
                                        <h3>Feel free to ask!</h3>
					<form action="mailto:support@tveenhoog.com" method="POST" enctype="text/plain">
						<textarea name="reaction" placeholder="Type here.."></textarea>
						<input type="submit" value="Send">
						<input type="reset" value="Reset">
					</form>
				</div>
				
				
			
				</div>
				<div class="mainFooter">
					<div class="navFooterLeft">
						<ul>
							<li class="footerTopElement">T' Veenhoog:</li>
							<li><a href="opleidingen.php">Courses</a></li>
							<li><a href="opendagen.php">Open days</a></li>
							<li><a href="evenementen.php">Events</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="navFooterCenter">
						<ul>
							<li class="footerTopElement">Our partners:</li>
							<li><a href="https://www.nhlstenden.com/">NHL Stenden</a></li>
							<li><a href="https://www.drenthecollege.nl/">Drenthe College</a></li>
						</ul>
					</div>
					<div class="navFooterRight">
						<ul>
							<li class="footerTopElementSocial">Follow us:</li>
							<li><a href="https://www.facebook.com/"><img src="../image/facebook.png" alt="Facebook"/></a>
							<a href="https://twitter.com/"><img src="../image/twitter.png" alt="Twitter"/></a>
							<a href="https://youtube.com/"><img src="../image/youtube.png" alt="Youtube"/></a>
							</li>
							<li class="socialStyle">
							<a href="https://www.linkedin.com/"><img src="../image/linkedin.png" alt="Linkedin"/></a>
							<a href="https://instagram.com/"><img src="../image/instagram.png" alt="Instagram"/></a>
							</li>
						</ul>
					</div>
				</div>	
			</div>
			<div class="rightBlok">
				<a href="../nl/contact.php">
					<div class="languageDutch">	
						<h3>Nederlands</h3>
					</div>
				</a>
				<a href="../en/contact.php">
					<div class="languageEnglish">
						<h3>English</h3>
					</div>
				</a>
                <?php
                // control login

                if (isset($_SESSION["authenticated"])) {
                    if ($_SESSION["authenticated"]) {
                        echo '<a href="signout.php"><div class="loginRight"><h3>Signout</h3></div></a>';
                    } else {
                        echo '<a href="login.php"><div class="loginRight"><h3>Login</h3></div></a>';
                    }
                } else {
                    $_SESSION["authenticated"] = false;
                    if ($_SESSION["authenticated"]) {
                        echo '<a href="signout.php"><div class="loginRight"><h3>Signout</h3></div></a>';
                    } else {
                        echo '<a href="login.php"><div class="loginRight"><h3>Login</h3></div></a>';
                    }
                }
                ?>
			</div>
  
		</div>
	</body>
</html>
