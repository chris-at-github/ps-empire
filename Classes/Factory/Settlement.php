<?php

namespace Ps\Empire\Factory;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Settlement extends AbstractFactory {

	/**
	 * @param string $fqcn
	 * @param array $properties
	 * @return \Ps\Empire\Object\Settlement\Settlement
	 */
	public function create($fqcn, $properties) {
		return parent::create($fqcn, $properties);
	}
}