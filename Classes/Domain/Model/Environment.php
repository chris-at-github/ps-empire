<?php

namespace Ps\Empire\Domain\Model;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Environment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $version;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param string $version
	 */
	public function setVersion($version) {
		$this->version = $version;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return array
	 */
	public function toArray() {
		$data = [];

		foreach(get_object_vars($this) as $key => $value) {
			$method = 'get' . ucfirst($key);
			if(method_exists($this, $method) === true) {
				$data[$key] = $this->{$method}();
			}
		}

		return $data;
	}
}