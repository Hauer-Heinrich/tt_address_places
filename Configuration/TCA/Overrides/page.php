<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {
    $extensionKey = 'tt_address_places';

    // make PageTsConfig selectable
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/AllPage.typoscript',
        'tt_address_places - Places / Companies'
    );
});
