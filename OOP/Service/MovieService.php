<?php

namespace Service;

use Entity\Movie;

class MovieService
{
	public static function getMovie()
	{
		return new Movie();
	}
}