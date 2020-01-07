<?php

namespace Ps\Empire\JsonConverter;

use Ps\Empire\Object\AbstractObject;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class DefaultJsonConverter extends AbstractJsonConverter {

	/**
	 * @param AbstractObject $object
	 * @param array $data
	 * @return array
	 */
	public function convert(AbstractObject $object, $data) {
		DebuggerUtility::var_dump($object);

		return $data;
	}
}