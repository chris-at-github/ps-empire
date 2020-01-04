<?php

namespace Ps\Empire\Manager;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Extbase\Annotation\Inject;
use Ps\Empire\Domain\Repository\GameObjectRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Settlement implements SingletonInterface {

	/**
	 * @Extbase\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
	 */
	protected $objectManager;

	/**
	 * @Extbase\Inject
	 * @var GameObjectRepository
	 */
	protected $gameObjectRepository;

	/**
	 * @param array $options
	 * @return array
	 */
	public function find($options = []) {
		$settlements = [];

		foreach($this->gameObjectRepository->findAll() as $model) {

			/** @var \Ps\Empire\Domain\Model\GameObject $model */
			/** @var \Ps\Empire\Object\Settlement\Settlement $settlement */
			$settlement = $this->objectManager->get(\Ps\Empire\Factory\Settlement::class)->create(
				$model->getFqcn(), json_decode($model->getProperties(), true)
			);

			DebuggerUtility::var_dump($settlement);
		}
	}
}