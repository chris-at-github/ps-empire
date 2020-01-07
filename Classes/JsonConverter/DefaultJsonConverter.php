<?php

namespace Ps\Empire\JsonConverter;

use Ps\Empire\Object\AbstractObject;
use TYPO3\CMS\Extbase\Reflection\Exception\UnknownClassException;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class DefaultJsonConverter extends AbstractJsonConverter {

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Reflection\ReflectionService
	 */
	protected $reflectionService;

	/**
	 * @param AbstractObject $object
	 * @param array $data
	 * @return array
	 * @throws UnknownClassException
	 */
	public function convert(AbstractObject $object, $data) {
		DebuggerUtility::var_dump($this->reflectionService->getClassSchema($object));
		DebuggerUtility::var_dump($object);

		return $data;
	}
}