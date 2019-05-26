<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Sammelt alle benoetigen Spieldaten in einem JSON-String
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('data', file_get_contents(ExtensionManagementUtility::extPath('empire') . 'Resources/Private/Cache/ae4b6719-3195-4f56-a0f1-90e5ad7eccf3.json'));
	}
}