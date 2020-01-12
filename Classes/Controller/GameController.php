<?php

namespace Ps\Empire\Controller;

use Ps\Empire\DataProvider\EnvironmentDataProvider;
use Ps\Empire\DataProvider\GamesDataProvider;
use Ps\Empire\Manager\DataProvider;
use Ps\Empire\Manager\GameManager;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Sammelt alle benoetigen Spieldaten in einem JSON-String
	 *
	 * @return void
	 */
	public function indexAction() {

		/** @var DataProvider $data */
		$dataProvider = $this->objectManager->get(DataProvider::class);
		$dataProvider->get([
			EnvironmentDataProvider::class,
			GamesDataProvider::class
		]);

		$this->view->assign('data', json_encode($dataProvider->toArray()));

		DebuggerUtility::var_dump($this->uriBuilder
			->setTargetPageUid(30)
			->uriFor('playground', ['game' => 1], 'Game'));
	}

	public function playgroundAction() {
		DebuggerUtility::var_dump($this->request->getArguments());
	}
}