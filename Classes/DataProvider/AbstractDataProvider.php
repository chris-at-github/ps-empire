<?php

namespace Ps\Empire\DataProvider;

use TYPO3\CMS\Extbase\Object\ObjectManager;

abstract class AbstractDataProvider {

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @param ObjectManager $objectManager
	 */
	public function __construct(ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
	}

	/**
	 * @param array $data
	 * @return array
	 */
	abstract public function provide($data);
}