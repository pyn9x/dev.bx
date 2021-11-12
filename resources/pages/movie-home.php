<?php
/** @var array $movies */

/** @var array $genres */

?>
<div class="wrapper_movie">


<?php
$isSearchError = false;
foreach ($movies as $movie):
{
		if (isset($_GET['genres']) && (in_array($genres[$_GET['genres']], $movie['genres'])) || ($_GET === [])):
		{
				echo renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]);
		}
		endif;
		if (
			isset($_GET['s']) && ($_GET['s'] !== '')
			&& searchMovies(
				$movie['title'],
				$movie['original-title'],
				$_GET['s'] ?? ''
			)
		):
			{
				echo renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]);
				$isSearchError = true;
			}
		endif;
}
endforeach;

if (checkSearch($_GET['s'] ?? '') && ($isSearchError === false)):
{
		echo renderTemplate("./resources/pages/error-search.php");
}
endif;
?>
</div>

