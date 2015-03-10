<h3>Page1_2</h3>

<?php include('menu2.php'); ?>

<?php
/*
	echo "mac rocks";
	
	$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);
*/

$user = 'root';
$password = 'root';
//$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysql_connect("$host:$port", $user, $password) or die("erreur connect");
echo $link;
	echo "<br />";
echo "connection reussie";
	echo "<br />";

$db = mysql_select_db('db1');
echo $db;
	echo "<br />";

$sql = "SELECT * FROM tabl1";
$res = mysql_query($sql);

while($line = mysql_fetch_assoc($res)) {
	echo "<br />";
	print_r($line);
}


?>