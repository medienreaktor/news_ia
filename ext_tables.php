<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add template TypoScript
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'News Instant Articles');
