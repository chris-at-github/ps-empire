<?php

namespace Ps\Empire\Object;

use Ps\Empire\JsonConverter\DefaultJsonConverter;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use Ps\Empire\Traits;

abstract class AbstractObject {
	use Traits\JsonConverter;

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @param ObjectManager $objectManager
	 */
	public function __construct(ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
		$this->addJsonConverter(DefaultJsonConverter::class);
	}
}