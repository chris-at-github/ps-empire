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
//		DebuggerUtility::var_dump($this->objectManager->get(\Ps\Empire\Domain\Repository\GameObjectRepository::class)->findAll());
		$settlement = $this->objectManager->get(\Ps\Empire\Factory\Settlement::class)->create('Ps\Empire\Object\Settlement\Colony', ['title' => 'Settlement SC01']);
		DebuggerUtility::var_dump($settlement);
	}
}