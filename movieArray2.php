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

for($i = 0; $i< count($aMovieList); $i++)
{
	echo "<P>" . $aMovieList[$i]["title"], ",",
	  $aMovieList[$i]["year"],",",
	  $aMovieList[$i]["starring"],"</p>";
}

?>