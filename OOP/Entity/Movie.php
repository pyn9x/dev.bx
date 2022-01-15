<?php

namespace Entity;

class Movie
{
	private $id;
	private $title;
	private $original_title;
	private $description;
	private $genres;
	private $duration;
	private $cast;
	private $director;
	private $age_restriction;
	private $release_date;
	private $rating;


	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id): void
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title): void
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getOriginalTitle()
	{
		return $this->original_title;
	}

	/**
	 * @param mixed $original_title
	 */
	public function setOriginalTitle($original_title): void
	{
		$this->original_title = $original_title;
	}

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description): void
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getDuration()
	{
		return $this->duration;
	}

	/**
	 * @param mixed $duration
	 */
	public function setDuration($duration): void
	{
		$this->duration = $duration;
	}

	/**
	 * @return mixed
	 */
	public function getGenres()
	{
		return $this->genres;
	}

	/**
	 * @param mixed $genres
	 */
	public function setGenres($genres): void
	{
		$this->genres = $genres;
	}

	/**
	 * @return mixed
	 */
	public function getCast()
	{
		return $this->cast;
	}

	/**
	 * @param mixed $cast
	 */
	public function setCast($cast): void
	{
		$this->cast = $cast;
	}

	/**
	 * @return mixed
	 */
	public function getDirector()
	{
		return $this->director;
	}

	/**
	 * @param mixed $director
	 */
	public function setDirector($director): void
	{
		$this->director = $director;
	}

	/**
	 * @return mixed
	 */
	public function getAgeRestriction()
	{
		return $this->age_restriction;
	}

	/**
	 * @param mixed $age_restriction
	 */
	public function setAgeRestriction($age_restriction): void
	{
		$this->age_restriction = $age_restriction;
	}

	/**
	 * @return mixed
	 */
	public function getReleaseDate()
	{
		return $this->release_date;
	}

	/**
	 * @param mixed $release_date
	 */
	public function setReleaseDate($release_date): void
	{
		$this->release_date = $release_date;
	}

	/**
	 * @return mixed
	 */
	public function getRating()
	{
		return $this->rating;
	}

	/**
	 * @param mixed $rating
	 */
	public function setRating($rating): void
	{
		$this->rating = $rating;
	}

}