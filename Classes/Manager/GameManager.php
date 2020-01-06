<?php

namespace Ps\Empire\Manager;

use Ps\Empire\Domain\Repository\GameRepository;
use Ps\Empire\Factory\Game;
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
			$games[] = $this->objectManager->get(Game::class)->createByObjectModel($model);
		}

		return $games;
	}
}