<?php

namespace Controller;

use Service\MovieService;

class Movies extends Base
{
	public function getMoviesListAction()
	{
		$this -> render('/view/startPage.php',[
			'movies' => MovieService::getMovie()
		]);
	}
	public function getDetailAction()
	{
		$this -> render('/view/detailMovie.php',[
			'movies' => MovieService::getMovie()
		]);
	}
	public function getFavoritesAction()
	{
		$this -> render('/view/favoritesMovie.php',[
			'movies' => MovieService::getMovie()
		]);
	}
}