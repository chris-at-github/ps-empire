<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Sammelt alle benoetigen Spieldaten in einem JSON-String
	 *
	 * @return void
	 */
	public function indexAction() {

		$data = [];

		/* @var \Ps\Empire\Factory\Empire $factory */
		$factory = $this->objectManager->get(\Ps\Empire\Factory\Empire::class);

		// Environment laden
		ArrayUtility::mergeRecursiveWithOverrule(
			$data,
			$this->objectManager->get(\Ps\Xo\Service\JsonService::class)->toArray($factory->getEnvironment(), [
				'version',
				'name'
			]));

		$this->view->assign('data', json_encode($data));
	}
}