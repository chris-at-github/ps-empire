<?php

namespace Ps\Empire\Controller;

use Ps\Empire\DataProvider\EnvironmentDataProvider;
use Ps\Empire\Manager\DataProvider;
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
			EnvironmentDataProvider::class
		]);

		$this->view->assign('data', json_encode($dataProvider->toArray()));
	}
}