<?php

namespace Ps\Empire\JsonConverter;

use Ps\Empire\Object\AbstractObject;

abstract class AbstractJsonConverter {

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Reflection\ReflectionService
	 */
	protected $reflectionService;

	/**
	 * @param AbstractObject $object
	 * @param array $data
	 * @return array
	 */
	abstract public function convert(AbstractObject $object, $data);
}