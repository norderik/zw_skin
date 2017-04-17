<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' || TYPO3_MODE === 'FE' && isset($GLOBALS['BE_USER'])) {

    // Register as a skin
    $GLOBALS['TBE_STYLES']['skins']['zw_skin'] = array(
        'name' => 'zw_skin',
        'stylesheetDirectories' => array(
            'css' => 'EXT:zw_skin/Resources/Public/Css/'
        )
    );

}
