<?php
	session_start();
	echo "Cookie set \n";
	print_r($_COOKIE);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="US-ASCII">
<title>Insert title here</title>

<style>
	h3 {
		color: blue;
	}
</style>

<script>
	function writeElem() {
		var c = document.getElementsByTagName("p")[0];
		var x = c.childNodes[0].nodeValue;
		document.getElementById("stuffToCopy").innerHTML = x;
	}
	

setTimeout("document.bgColor='lightpink'", 150)
setTimeout("document.bgColor = 'pink'", 300)
setTimeout("document.bgColor='white'", 450)	

setTimeout("document.f1.clickMe.value = 'Click me !'", 1000)
setTimeout("document.f1.clickMe.value = ''", 1500)

//assigns value to variable
test ="What is all this?"

// opens document and uses methods to modify text characteristics
document.open()
document.write(test.bold()+"<P>")
document.write(test.fontsize(7)+"<P>")
document.write(test.fontcolor("red")+"<P>")
document.write(test.toUpperCase()+"<P>")

//assigns multiple characteristics to text
document.write(test.italics().fontsize(6).fontcolor("green")+"<P>")
document.open()

</script>

</head>
<body>

	<h3>page4_2</h3>

	<?php include('menu2.php'); ?>

	<p>
		Some stuff coming from the db
	</p>

	<form name="f1" action="" type="GET">
		<input type="checkbox" name="color" value="bleu"> Bleu </input>
		<input type="checkbox" name="color" value="rouge"> Rouge </input>
		<input type="text" name="clickMe"></input>
	
		<input type="submit"> submit </input>
	</form>
	
	<p id="stuffToCopy">
	stuff To Copy
	</p>
	
	<p>
		[<a href="/" onmouseover="document.bgColor='seagreen'">Sea Green</a>]<br>
		[<a href="/" onmouseover="document.bgColor='pink'">Pink</a>]<br>
	</p>
	
	<button onclick="writeElem()"> copy </button>


<?php

	

	$user = 'root';
	$password = 'root';
	//$db = 'inventory';
	$host = 'localhost';
	$port = 3306;

	$link = mysqli_connect($host, $user, $password) or die("erreur connect".mysqli_connect_error().mysqli_connect_errno());
	echo "<br />";
	echo "connection reussie";
	echo "<br />";

	$db = mysqli_select_db($link, 'GARAGE');
	
	$couleur = $_GET['color'];
	
	$sql = "SELECT * FROM voitures where couleur= '".$couleur."'";
	$res = mysqli_query($link, $sql);

	while($line = mysqli_fetch_assoc($res)) {
		echo "<br />";
		print_r($line["id"]." ");
		print_r($line["marque"]." ");
		print_r($line["couleur"]." ");
	}
	

?>

</body>
</html>