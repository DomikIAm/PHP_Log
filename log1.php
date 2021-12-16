<?php
if(isset($POST["LogIn"])){
$log = $_POST["log"];
$pass = $_POST["pass"];
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
if($log == 'Mloda' && $pass == "Polska")
{
	echo("Pomyslnie sie zalogowales");
	echo("Twoje imie: ".$imie);
	echo("Twoje nazwisko: ".nazwisko);
}
else{
	echo("Blad, wpisales zle dane!");
}		
}
?>
<form action="login.php" method="POST">
Login<input type="text" name="log"> <br>
Password<input type="password" name="pass"> <br>
Imie <input type="text" name="imie"> <br>
Nazwisko<input type="text" name="nazwisko"> <br>
<input type="submit" name="LogIn" value="Logowanie">
</form>
