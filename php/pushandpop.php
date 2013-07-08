<?php 

$aList = array();

array_push($aList,"string1","string2","string3");

print_r($aList);

echo "popped this item ", array_pop($aList);

echo "shifted this item", array_shift($aList);

array_unshift($aList,"new string 1");

print_r($aList);

?>