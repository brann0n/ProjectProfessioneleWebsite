<?php
//init vars
$username = "";
$password = "";
$usersArray = [
    //user    pass
    ["admin","admin"],
    ["brandon","12345"],
    ["michiel","43212"] 
];
//check if the submit button was pressed and then fill the variables.
if(isset($_POST["submit"])){
    $password = filter_input(INPUT_POST, 'password');
    $username = filter_input(INPUT_POST, 'username');
    
    //check if the username is found in the array, do this with a foreach.
    foreach($usersArray as $user){
        if($user[0] == $username){
            //now check the password.
            if($user[1] == $password){
                //user is signed in.
                echo "SIGNED IN";
            }
            else{
                //password is wrong.
            }
        }
        else{
            //username is not known in the array.
        }
    }
}



?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>T' Veenhoog</title>
	</head>
	<body>
		<div class="centering">
				<div class="logo">
					<a href="index.php"><img src="image/logo.png" alt="logo" /></a>
				</div>

			
			<div class="mainBody">

					<div class="mainHeader">
						<div class="h1Title">
							<h1>Technische Hogeschool 'T Veenhoog</h1>
						</div>
					</div>
				<div class="mainContent">
                                    <!--This is the signin form-->
                                    <div class="loginPageContent">
                                        <form action="login.php" method="POST">
                                        <input type="text" placeholder="Uw gebruikersnaam" id="username" name="username" >
                                        <input type="password" placeholder="Uw wachtwoord" id="password" name="password" >
                                        <input type="submit" name="submit" id="submit" value="Inloggen">
                                    </form>
                                    </div>
				</div>
				<div class="mainFooter">
					<div class="navFooterLeft">
						<ul>
							<li class="footerTopElement">T' Veenhoog:</li>
							<li><a href="opleidingen.php">Opleidingen</a></li>
							<li><a href="inschrijven.php">Inschrijven</a></li>
							<li><a href="opendagen.php">Open dagen</a></li>
							<li><a href="evenementen.php">Evenementen</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="navFooterCenter">
						<ul>
							<li class="footerTopElement">Onze partners:</li>
							<li><a href="">(text)</a></li>
							<li><a href="">(text)</a></li>
							<li><a href="">(text)</a></li>
							<li><a href="">(text)</a></li>
						</ul>
					</div>
					<div class="navFooterRight">
						<ul>
							<li class="footerTopElementSocial">Volgs ons:</li>
							<li><a href="https://www.facebook.com/"><img src="image/facebook.png" alt="Facebook"/></a>
							<a href="https://twitter.com/"><img src="image/twitter.png" alt="Twitter"/></a>
							<a href="https://youtube.com/"><img src="image/youtube.png" alt="Youtube"/></a>
							</li>
							<li class="socialStyle">
							<a href="https://www.linkedin.com/"><img src="image/linkedin.png" alt="Linkedin"/></a>
							<a href="https://instagram.com/"><img src="image/instagram.png" alt="Instagram"/></a>
							</li>
						</ul>
					</div>
				</div>	
			</div>
			<div class="language">
				<h3><a href="index.php">Nederlands</a></h3>
				<hr>
				<h3><a href="indexE.php">English</a></h3>
			</div>
		</div>
	</body>
</html>
