<?php 

$nTimes = 0;

if(count($_COOKIE) == 1)
{
	$nTimes = $_COOKIE["visits"];
}

setcookie("visits",++$nTimes,time()+ 3600);

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



