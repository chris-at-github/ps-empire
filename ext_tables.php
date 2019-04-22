<?php

if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
'Ps.Empire',
'Frontend',
'LLL:EXT:empire/Resources/Private/Language/locallang_tca.xlf:tx_empire_frontend.plugin.title'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_empire_domain_model_gameobject');