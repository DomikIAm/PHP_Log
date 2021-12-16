<?php
error_reporting(0);
$log = $_POST["log"];
$pass = $_POST["pass"];
$tablica = array("Login1"=>"Haslo");

if(isset($log) && isset($pass)){

if(array_key_exists($log,$tablica) && $tablica[$log]==$pass)
{
	echo("Pomyslnie sie zalogowales");
}
else{
	echo("Blad, wpisales zle dane!");
}		
}
?>
<form action="" method="POST">
Login<input type="text" name="log"> <br>
Password<input type="password" name="pass"> <br>
<input type="submit" value="Logowanie">
</form>	
