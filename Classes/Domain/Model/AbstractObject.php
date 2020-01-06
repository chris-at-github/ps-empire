<?php

namespace Ps\Empire\Domain\Model;

abstract class AbstractObject extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $fqcn;

	/**
	 * @var string
	 */
	protected $properties;

	/**
	 * @return string
	 */
	public function getFqcn() {
		return $this->fqcn;
	}

	/**
	 * @param string $fqcn
	 */
	public function setFqcn($fqcn) {
		$this->fqcn = $fqcn;
	}

	/**
	 * @return string
	 */
	public function getProperties() {
		return $this->properties;
	}

	/**
	 * @param string $properties
	 */
	public function setProperties($properties) {
		$this->properties = $properties;
	}
}