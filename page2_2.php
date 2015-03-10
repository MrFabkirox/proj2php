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

</head>
<body>
	
	<h3>page2_2.php</h3>
	
	<?php include('menu2.php'); ?>

	<?php
		if(isset($_GET["name"])) {
			echo ('Name is '.$_GET['name']);
		}
	?>

	<form action="" method="GET">
	
		<input type="text" id="name">name</input>	
		<input type="submit">name</input>
	
	</form>

	<?php
	
		session_start();
		echo "les cookies";
		print_r($_COOKIE);
	?>

</body>
</html>