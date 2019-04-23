<?php

namespace Ps\Empire\Controller;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class SettlementController extends ApiController {

	/**
	 * Listet alle Siedlungen auf
	 *
	 * @return void
	 */
	public function listingAction() {
		DebuggerUtility::var_dump($this->objectManager->get(\Ps\Empire\Manager\Settlement::class)->find());
	}
}