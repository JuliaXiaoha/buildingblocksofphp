<?php 
date_default_timezone_set("America/Toronto");

$tChristmas = mktime(0,0,0,12,25);

$aChristmas = getDate($tChristmas);
print_r($aChristmas);
echo "<br />";
$tNow = time();

$aNow = getDate($tNow);
print_r($aNow);

$nDaysTillChristmas = $aChristmas["yday"] - $aNow["yday"];


printf("<br />There are %d days till Christmas", $nDaysTillChristmas);

?>