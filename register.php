
<html>
<head>
<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" href="style.css">
<style>
.z   {color: green;}
.c  {color: red;}
</style>
<title>Register</title>

</head>
<body>
<form class="label" style="margin-left: auto; margin-right: auto;" action="" method="post">
			<h2 style="text-align: center; font-weight: bold;">Unesite vase podatke</h2>	<br />
			<label for="ime"></i>  User: </label>
			<input id="name" name="username" placeholder="User" type="text" required><br /><br />
			<label></i>  Password:  </label>
			<input id="password" name="password" placeholder="Password" type="password" required><br /><br />
			<input type="radio" name="gender" value="female">Z
			<input type="radio" name="gender" value="male">M <br/>
			<input name="submit" type="submit" value=" register " style="float: right;" />
			<a href="login.php">Vec imate account?</a>
			<?php if(isset($_REQUEST['submit'])){	echo "<br/>Vas account je napravljen! Kliknite <a href='login.php'>ovdje </a> da se vratite na login";}?>
		</form>

		<?php
if(isset($_REQUEST['submit'])){
	$xml = new DOMDocument("1.0","UTF-8");
	$xml->load("korisnici.xml");
	$rootTag = $xml->getElementsByTagName("user_list")->item(0);
	$dataTag = $xml->createElement("user");

	$aTag = $xml->CreateElement("username",$_REQUEST['username']);
	$bTag = $xml->CreateElement("password",$_REQUEST['password']);

	$dataTag->appendChild($aTag);
	$dataTag->appendChild($bTag);

	$rootTag->appendChild($dataTag);

	$xml->save("korisnici.xml");
}
?>
</body>
</html>

