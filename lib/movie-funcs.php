<?php
function convertToHoursMins(int $time, string $format = '%02d:%02d')
{
	if ($time < 1) {
		return;
	}
	$hours = floor($time / 60);
	$minutes = ($time % 60);
	return sprintf($format, $hours, $minutes);
}
function formatTitle(string $title):string
{
	if(strlen($title)>45){
		return mb_substr($title, 0, 24). "..";
	}
	return $title;
}

function formatDescription(string $description):string
{
	if(strlen($description)>220)
	{
		return mb_substr($description, 0, 220). "...";
	}
	return $description;
}

function formatGenres(array $genre):string
{
	$genre_string = implode(",", $genre);
	if(strlen($genre_string)>55){
		return mb_substr($genre_string, 0, 24). "..";
	}
	return $genre_string;
}


function searchMovies(string $nameMovieRU,string $nameMovieEN, string $inputNameMovie):bool
{
	return is_string(mb_stristr($nameMovieRU, $inputNameMovie)) || is_string(mb_stristr($nameMovieEN, $inputNameMovie));
}

function checkSearch($getSearch):bool
{
	return isset($getSearch) && ($getSearch !== '');
}
function movieRectangleRating(int $count, float $rating):string
{
	{
		if ($count<=$rating){
			return '<div style= "background:#E78818;"  class="rating-rectangle"></div>';
		}
		else
		{
			return '<div class="rating-rectangle"></div>';
		}
	}
}