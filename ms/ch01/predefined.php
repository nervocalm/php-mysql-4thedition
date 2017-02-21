<!DOCTYPE html>
<html lang="us"
	<head>
		<title>Predefined Variables</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	</head>

	<body>
	<?php 
		$file = $_SERVER['SCRIPT_FILENAME'];
		$user = $_SERVER['HTTP_USER_AGENT'];
		$server = $_SERVER['SERVER_SOFTWARE'];

		//Print the name of this script:
		echo "<p>You are running the file: <br /><b>$file</b>.</p>\n";

		//Print the user's information:
		echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";

		//Print the server's information:
		echo "<p>This server is running:<br /><b>$server</b></p>\n";
	?>
		<header>
			<h1></h1>
		</header>

		<section>
		</section>

		<footer>
		</footer>
	</body>
</html>
