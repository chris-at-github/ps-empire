<?php

namespace Ps\Empire\Object;

use Ps\Empire\JsonConverter\DefaultJsonConverter;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use Ps\Empire\Traits;

abstract class AbstractObject {
	use Traits\JsonConverter;

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	public function __construct() {
//		$this->objectManager = $objectManager;
		$this->addJsonConverter(DefaultJsonConverter::class);
	}
}