<?php

namespace Ps\Empire\Factory;

use Ps\Empire\Domain\Model\AbstractObject;

class Game extends AbstractFactory {

	/**
	 * @param string $fqcn
	 * @param array $properties
	 * @return \Ps\Empire\Object\Game\Game
	 */
	public function create($fqcn, $properties) {
		return parent::create($fqcn, $properties);
	}

	/**
	 * @param AbstractObject $model
	 * @return \Ps\Empire\Object\Game\Game
	 */
	public function createByObjectModel(AbstractObject $model) {
		return parent::createByObjectModel($model);
	}
}