<?php

namespace Ps\Empire\Factory;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Empire implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $settings;

	/**
	 * @var \Ps\Empire\Domain\Model\Empire
	 */
	protected $environment;

	/**
	 * @param \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager
	 */
	public function __construct(\TYPO3\CMS\Extbase\Object\ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
		$this->initializeSettings();
	}

	/**
	 * @return void
	 */
	protected function initializeSettings() {
		$this->settings = $this->objectManager->get(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::class)->getConfiguration(
			\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS, 'Empire'
		);
	}

	/**
	 * @return array
	 */
	public function getSettings() {
		return $this->settings;
	}

	/**
	 * @return \Ps\Empire\Domain\Model\Empire
	 */
	public function getEnvironment() {
		if(isset($this->environment) === false) {
			$this->environment = $this->objectManager->get(\TYPO3\CMS\Extbase\Property\PropertyMapper::class)
				->convert(
					$this->settings['meta'],
					\Ps\Empire\Domain\Model\Empire::class
				);
		}

		return $this->environment;
	}
}