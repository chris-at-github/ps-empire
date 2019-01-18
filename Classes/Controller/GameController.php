<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Frontend::Index
	 */
	public function indexAction() {
		DebuggerUtility::var_dump($this->settings);
	}
}