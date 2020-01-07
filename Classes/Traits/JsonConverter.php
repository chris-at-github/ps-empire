<?php

namespace Ps\Empire\Traits;

use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

trait JsonConverter {

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $jsonConverter = [];

	/**
	 * @param array $jsonConverter
	 */
	public function setJsonConverter($jsonConverter = []) {
		$this->jsonConverter = $jsonConverter;
	}

	/**
	 * @param string $fqcn
	 * @param array $options
	 */
	public function addJsonConverter($fqcn, $options = []) {
		$this->jsonConverter[$fqcn] = $options;
	}

	/**
	 * @param string $fqcn
	 */
	public function removeJsonConverter($fqcn) {
		if(isset($this->jsonConverter[$fqcn]) === true) {
			unset($this->jsonConverter[$fqcn]);
		}
	}

	/**
	 * @param array $jsonConverter
	 * @return array
	 */
	public function toArray($jsonConverter = []) {
		$data = [];

		if(empty($jsonConverter) === true) {
			$jsonConverter = $this->jsonConverter;
		}

		foreach($jsonConverter as $fqcn => $options) {
			$jsonConverterObject = $this->objectManager->get($fqcn, $options);
			$data = $jsonConverterObject->convert($this, $data);
		}

		return $data;
	}
}