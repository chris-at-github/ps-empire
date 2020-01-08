<?php

namespace Ps\Empire\Object;

use TYPO3\CMS\Extbase\Object\ObjectManager;
use Ps\Empire\JsonConverter\DefaultJsonConverter;
use Ps\Empire\Traits;

abstract class AbstractObject {
	use Traits\JsonConverter;

	/**
	 * @var int
	 */
	protected $uid;

	/**
	 * @var \Ps\Empire\Domain\Model\AbstractObject
	 */
	protected $origin;

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	public function __construct() {
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

	/**
	 * @return \Ps\Empire\Domain\Model\AbstractObject
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * @param \Ps\Empire\Domain\Model\AbstractObject $origin
	 */
	public function setOrigin(\Ps\Empire\Domain\Model\AbstractObject $origin) {
		$this->origin = $origin;
	}
}