<?php 

$aList = array("string1","string2","string3","string4");

foreach ($aList as $i => $sItem)
{
	if($i != 0)
	{
		echo ",";
	}
	echo $sItem;
}

?>