<?php 

session_start();

$nTimes = 0;

if(count($_SESSION) == 1)
{
	$nTimes = $_SESSION["visits"];
}

setcookie("visits",++$nTimes,time()+ 3600);


$_SESSION["visits"] = ++$nTimes;

?>

<Doctype html>
<html>
<head>
<title>Page Visits</title>
</head>
<body>
<h1>Page Visits</h1>
<p>You have visited us<?php echo $nTimes?> times</p>
</body>
</html>
