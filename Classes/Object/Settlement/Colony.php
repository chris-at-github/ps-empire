<?php

namespace Ps\Empire\Object\Settlement;

class Colony extends Settlement {

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