<?php 



$aMovieList = array(
		array("title" => "Hunt for Red October",
				"year"=> "1990",
				"starring" =>"Sean Connery,Michael Baldwin"
				),
		array("title" => "Good Will Hunting",
				"year"=> "1996",
				"starring" =>"Robin Williams,Matt Damon"
				),
		array("title" => "Swordfish",
						"year"=> "2001",
						"starring" =>"John Travolta,Hally Berry,Hugh Jackman"
				)
		);

for($i = 0; $i < count($aMovieList); $i++)
{
	echo "<p>";
	$aKeys = array_keys($aMovieList[$i]);
	for($j = 0; $j <count($aKeys);$j++)
	{
		if($j != 0)
		{
			echo ",";
		}
		echo $aMovieList[$i][$aKeys[$j]];
	}
	echo "</p>";
}

?>