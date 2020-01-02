<?php

if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Frontend Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ps.Empire',
	'Frontend',
	[
		'Game' => 'index',
	],
	[]
);