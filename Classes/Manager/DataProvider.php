<?php

namespace Ps\Empire\Manager;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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
			if(is_object($value) === true && method_exists($value, 'toArray') === true) {
				$data[$key] = $value->toArray();
			}

			if(is_array($value) === true) {
				$cdata = [];

				foreach($value as $ckey => $cvalue) {
					DebuggerUtility::var_dump(method_exists($cvalue, 'toArray'));

					if(is_object($cvalue) === true && method_exists($cvalue, 'toArray') === true) {
						$cdata[$ckey] = $cvalue->toArray();

					} else {
						$cdata[$ckey] = $cvalue;
					}
				}

				$data[$key] = $cdata;
			}
		}

		return $data;
	}
}