<?php

namespace Ps\Empire\Factory;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Settlement implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $settings;

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
	 * @param string $fqcn
	 * @param array $properties
	 * @return \Ps\Empire\Object\Settlement\Settlement
	 */
	public function create($fqcn, $properties) {

		/** @var \Ps\Empire\Object\Settlement\Settlement $settlement */
		$settlement = $this->objectManager->get(\TYPO3\CMS\Extbase\Property\PropertyMapper::class)->convert($properties, $fqcn);

		return $settlement;
	}
}