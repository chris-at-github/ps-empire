<?php

namespace Ps\Empire\Object\Game;

class Game {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
}