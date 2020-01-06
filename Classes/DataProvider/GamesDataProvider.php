<?php

namespace Ps\Empire\DataProvider;

use Ps\Empire\Manager\GameManager;

class GamesDataProvider extends AbstractDataProvider {

	/**
	 * @param array $data
	 * @return array
	 */
	public function provide($data) {
		if(isset($data['games']) === false) {
			$data['games'] = $this->objectManager->get(GameManager::class)->find();
		}

		return $data;
	}
}