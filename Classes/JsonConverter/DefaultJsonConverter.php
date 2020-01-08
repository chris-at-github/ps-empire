<?php

namespace Ps\Empire\JsonConverter;

use Ps\Empire\Object\AbstractObject;
use TYPO3\CMS\Extbase\Reflection\Exception\UnknownClassException;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class DefaultJsonConverter extends AbstractJsonConverter {

	/**
	 * @param AbstractObject $object
	 * @param array $data
	 * @return array
	 * @throws UnknownClassException
	 */
	public function convert(AbstractObject $object, $data) {

		/** @var \TYPO3\CMS\Extbase\Reflection\ClassSchema $schema */
		$schema = $this->reflectionService->getClassSchema($object);

		foreach($schema->getProperties() as $name => $property) {
			if($property['type'] === 'string' || $property['type'] === 'integer' || $property['type'] === 'boolean' || $property['type'] === 'float') {
				$method = 'get' . ucfirst($name);

				if(method_exists($object, $method) === true) {
					$data[$name] = $object->{$method}();
				}
			}
		}

		return $data;
	}
}