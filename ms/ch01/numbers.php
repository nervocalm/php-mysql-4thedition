<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Numbers</title>
	</head>
	
	<body>
		<?php

			//Set the variables
			$price = 19.95;
			$quantity = 30;
			$taxes = 0.05;

			//Calculate the total
			$total = $price * $quantity;
			$total = $total + ($total * $taxes);

			//Format the result
			$total = number_format($total,2);

			//Print the output message

			echo "<p> Congratulations! You have purchased <b>$quantity</b> cocks at the fair price of <strong>\$$price</strong> each. This gives you a total of <strong>\$$total</strong> taxes included! Have a nice party!</p>";

			echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each. With tax, the total comes to <b>$' . $total . '</b>.</p>';

		  ?>
	</body>

</html>