<?php
/** @var array $movies */
require('movies.php');

echo "Welcome to move list!
Enter age: ";
$input = readline(" \n");
$index = 1;

if(is_numeric($input) && (int)$input >= 0)
{
	foreach ($movies as $movie)
	{
		if($input >= $movie['age_restriction'])
		{
			echo "{$index}. {$movie['title']} ({$movie['release_year']}), {$movie['age_restriction']}. Rating - {$movie['rating']}\n";
			$index++;
		}
	}
}else echo "Wrong age";




