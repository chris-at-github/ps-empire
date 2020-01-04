<?php

namespace Ps\Empire\DataProvider;

use Ps\Empire\Factory\Empire;

class EnvironmentDataProvider extends AbstractDataProvider {

	/**
	 * @param array $data
	 * @return array|void
	 */
	public function provide($data) {
		if(isset($data['environment']) === false) {
			$data['environment'] = $this->objectManager->get(Empire::class)->getEnvironment();
		}

		return $data;
	}
}