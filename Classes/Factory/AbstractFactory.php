<?php

namespace Ps\Empire\Factory;

use Ps\Empire\Domain\Model\AbstractObject;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;

class AbstractFactory implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var array
	 */
	protected $settings;

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
	 * @param AbstractObject $model
	 * @return array
	 */
	protected function mergeObjectModelProperties(AbstractObject $model) {

		// gesammelte JSON Eigenschaften extrahieren
		$properties = json_decode($model->getProperties(), true);

		// einzelne Eigenschaften aus dem Model uebernehmen
		$properties['uid'] = $model->getUid();

		return $properties;
	}

	/**
	 * @param string $fqcn
	 * @param array $properties
	 * @return object
	 */
	public function create($fqcn, $properties) {
		return $this->objectManager->get(\TYPO3\CMS\Extbase\Property\PropertyMapper::class)->convert($properties, $fqcn);
	}

	/**
	 * @param AbstractObject $model
	 * @return object
	 */
	public function createByObjectModel(AbstractObject $model) {
		return $this->objectManager->get(\Ps\Empire\Factory\Game::class)->create(
			$model->getFqcn(), $this->mergeObjectModelProperties($model)
		);
	}
}