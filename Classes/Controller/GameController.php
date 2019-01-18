<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Frontend::Index
	 */
	public function indexAction() {


		$output = $this->objectManager->get(\TYPO3\CMS\Extbase\Property\PropertyMapper::class)
			->convert(
				$this->settings['meta'],
				\Ps\Empire\Domain\Model\Empire::class
			);

		DebuggerUtility::var_dump($output);
	}
}