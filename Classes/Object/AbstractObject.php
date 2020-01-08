<?php

namespace Ps\Empire\Object;

use Ps\Empire\JsonConverter\DefaultJsonConverter;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use Ps\Empire\Traits;

abstract class AbstractObject {
	use Traits\JsonConverter;

	/**
	 * @var int
	 */
	protected $uid;

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	public function __construct() {
//		$this->objectManager = $objectManager;
		$this->addJsonConverter(DefaultJsonConverter::class);
	}

	/**
	 * @return int
	 */
	public function getUid() {
		return $this->uid;
	}

	/**
	 * @param int $uid
	 */
	public function setUid(int $uid) {
		$this->uid = $uid;
	}
}