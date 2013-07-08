<?php

//split today's date by slashes

$sTodaysDate = "2013/07/04";

$aTodaysDate = explode('/', $sTodaysDate);

printf("Todays date %s<br />", $sTodaysDate);

print_r($aTodaysDate);

// this is a common pattern for taking a path and changing the filename

$sPath = "/php/explodeExample.php";

printf("<br/>old file name is %s",$sPath);

$aPath = explode('/',$sPath);

$aPath[count($aPath) - 1] = "define.php";

$sPath = join('/',$aPath);

printf("<br />new file name is %s",$sPath);

?>