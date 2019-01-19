<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Frontend::Index
	 */
	public function indexAction() {

		$data = [];

		// Environment laden
		ArrayUtility::mergeRecursiveWithOverrule(
			$data,
			$this->objectManager->get(\Ps\Xo\Service\JsonService::class)->toArray($this->objectManager->get(\Ps\Empire\Factory\Empire::class)->getEnvironment(), [
				'version',
				'name'
			]));
	}
}