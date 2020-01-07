<?php

namespace Ps\Empire\Object\Game;

use Ps\Empire\Object\AbstractObject;

class Game extends AbstractObject {

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