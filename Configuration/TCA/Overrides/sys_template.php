<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'tt_address_places',
    'Configuration/TypoScript',
    'Address places'
);
