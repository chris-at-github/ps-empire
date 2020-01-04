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
		DebuggerUtility::var_dump($this->objectManager->get(DataProvider::class)->get([
			EnvironmentDataProvider::class
		]));
	}
}