<?php

namespace Ps\Empire\Manager;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

class DataProvider implements SingletonInterface {

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @param ObjectManager $objectManager
	 */
	public function __construct(ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
	}

	/**
	 * @param array $providers
	 * @return array
	 */
	public function get($providers) {
		foreach($providers as $fqcn) {
			$this->data = $this->objectManager->get($fqcn)->provide($this->data);
		}

		return $this->data;
	}

	/**
	 * @return array
	 */
	public function toArray() {
		$data = [];

		foreach($this->data as $key => $value) {
			$data[$key] = $value->toArray();
		}

		return $data;
	}
}