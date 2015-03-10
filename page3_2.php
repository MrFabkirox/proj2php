<?php
	session_start();
	echo "les cookies";
	print_r($_COOKIE);
?>

<h3>page3_2.php</h3>

<?php include('menu2.php'); ?>

<form action="" type="GET">
	<input type="checkbox" name="color" value="bleu"> Bleu </input>
	<input type="checkbox" name="color" value="rouge"> Rouge </input>
	
	<input type="submit"> submit </input>
</form>

<?php

//php.ini
//var/log/mamp

$couleur = $_GET['color'];
if (isset($_GET["couleur"])) { $couleur= $_GET["couleur"];}

$user = 'root';
$password = 'root';
//$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysqli_connect($host, $user, $password) or die("erreur connect".mysqli_connect_error().mysqli_connect_errno());
//echo $link;    ----->ressource necessaire que pour mysql_connect
	echo "<br />";
echo "connection reussie";
	echo "<br />";

$db = mysqli_select_db($link, 'GARAGE');
echo $db;
	echo "<br />";

	$sql = "SELECT * FROM voitures where couleur= '".$couleur."'";
	$res = mysqli_query($link, $sql);

while($line = mysqli_fetch_assoc($res)) {
	echo "<br />";
	print_r($line["id"]." ");
	print_r($line["marque"]." ");
	print_r($line["couleur"]." ");
}

?>