<?php

namespace Ps\Empire\Manager;

use Ps\Empire\Domain\Repository\GameRepository;
use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameManager extends AbstractObject {

	/**
	 * @Extbase\Inject
	 * @var \Ps\Empire\Domain\Repository\GameRepository
	 */
	protected $gameRepository;

	/**
	 * @param array $options
	 * @return array
	 */
	public function find($options = []) {
		$games = [];

		foreach($this->gameRepository->findAll() as $model) {

//			/** @var \Ps\Empire\Domain\Model\Game $model */
//			/** @var \Ps\Empire\Object\Settlement\Settlement $settlement */
//			$settlement = $this->objectManager->get(\Ps\Empire\Factory\Settlement::class)->create(
//				$model->getFqcn(), json_decode($model->getProperties(), true)
//			);

			DebuggerUtility::var_dump($model);
		}

		return $games;
	}
}