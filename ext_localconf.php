<?php

if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Konfiguration fuer den (CKE) Editor im Backend
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['xo'] = 'EXT:empire/Configuration/RTE/Default.yaml';

// Frontend Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ps.Empire',
	'Frontend',
	[
		'Game' => 'index'
	],
	[]
);