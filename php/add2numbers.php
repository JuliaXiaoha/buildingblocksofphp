<?php 

$sResult = "";

if(count($_POST) == 2)
{
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];

	$sResult = sprintf("The sum of %d and %d is %d ", $number1, $number2, $number1 + $number2);
}

?>


<!Doctype html>
<html>

<head>
<title>Add 2 numbers</title>
</head>

<body>
	<h1>Add 2 Numbers</h1>
	<form action="" method="post">
		<p>
			<label for="number1">first number</label> <input type="text"
				name="number1" />
		</p>
		<p>
			<label for="number2">second number</label> <input type="text"
				name="number2" />
		</p>
		<input type="submit" value="add" />
	</form>
	<div>
		<?php echo $sResult ?>

	</div>
</body>
</html>







