
<html>
<head>
<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" href="style.css">
<style>
.z   {color: green;}
.c  {color: red;}
</style>
<title>Login</title>

</head>
<body>
<form class="label" style="margin-left: auto; margin-right: auto;" action="" method="post">
			<h2 style="text-align: center; font-weight: bold;">Molimo vas da se prijavite</h2>	<br />
			<label for="ime"></i>  User: </label>
			<input id="name" name="username" placeholder="User" type="text" required><br /><br />
			<label></i>  Password:  </label>
			<input id="password" name="password" placeholder="Password" type="password" required><br /><br />
			<input name="submit" type="submit" value=" Login " style="float: right;" />
			<a href="register.php">Kreirajte novi account</a>
			<?php

$username="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$ans=$_POST;

	if (empty($ans["username"]))  {
        	echo "Korisnicki račun nije unesen.";
		
    		}
	else if (empty($ans["password"]))  {
        	echo "Lozinka nije unesena.";
		
    		}
	else {
		$username= $ans["username"];
		$password= $ans["password"];
	
		provjera($username,$password);
	}
}


function provjera($username, $password) {
	

	$xml=simplexml_load_file("korisnici.xml");
	
	
	foreach ($xml->user as $usr) {
  	 	$usrn = $usr->username;
		$usrp = $usr->password;
		$usrime=$usr->ime;
		if($usrn==$username){
			if($usrp == $password){
				echo "<p class='z'>Prijavljeni ste kao $usrn , kliknite <a href='index.php'>ovdje </a>da nastavite</p>";
				return;
				}
			else{
				echo "<p class='c'>Netocna lozinka</p>";
				return;
				}
			}
		}
		
	echo "<p class='c'>Korisnik ne postoji.</p>";
	return;
}
?>
		</form>
</body>
</html>
