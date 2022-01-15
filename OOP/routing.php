<?php

return [
	'movie-start-page' => [
		'controller' => 'controller\\Movies',
		'action' => 'getMoviesListAction'
	],
	'movie-detail' =>[
		'controller' => 'controller\\Movies',
		'action' => 'getDetailAction'
	],
	'movie-favorites' =>[
		'controller' => 'controller\\Movies',
		'action' => 'getFavoritesAction'
	]
];