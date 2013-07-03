<?php 

$nVar = 3;

//here we could do a cast or a settype
$testing = $nVar;


if(is_int($testing))
{
	echo "testing is int? true";
}
else
{
	echo "testing is int? false";
}

?>