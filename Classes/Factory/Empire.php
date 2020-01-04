<?php

namespace Ps\Empire\Factory;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Property\PropertyMapper;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use Ps\Empire\Domain\Model\Environment;


class Empire implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $settings;

	/**
	 * @var Empire
	 */
	protected $environment;

	/**
	 * @param ObjectManager $objectManager
	 */
	public function __construct(ObjectManager $objectManager) {
		$this->objectManager = $objectManager;
		$this->initializeSettings();
	}

	/**
	 * @return void
	 */
	protected function initializeSettings() {
		$this->settings = $this->objectManager->get(ConfigurationManagerInterface::class)->getConfiguration(
			ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS, 'Empire'
		);
	}

	/**
	 * @return array
	 */
	public function getSettings() {
		return $this->settings;
	}

	/**
	 * @return Environment
	 */
	public function getEnvironment() {
		if(isset($this->environment) === false) {
			$this->environment = $this->objectManager->get(PropertyMapper::class)->convert($this->settings['environment'], Environment::class);
		}

		return $this->environment;
	}
}