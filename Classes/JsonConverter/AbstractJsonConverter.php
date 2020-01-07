<?php

namespace Ps\Empire\JsonConverter;

use Ps\Empire\Object\AbstractObject;

abstract class AbstractJsonConverter {

	/**
	 * @param AbstractObject $object
	 * @param array $data
	 * @return array
	 */
	abstract public function convert(AbstractObject $object, $data);
}