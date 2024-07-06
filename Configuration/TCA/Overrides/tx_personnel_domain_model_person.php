<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$tempColumns = array(
    'tx_addresses' => [
        'exclude' => 1,
        'label' => 'Addresses',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_addresses_domain_model_address',
            'MM' => 'tx_addresses_personnel_mm',
            'size' => 8,
            'autoSizeMax' => 5,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => false,
                    'options' => [
                        'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                    ],
                ],
                'addRecord' => [
                    'disabled' => false,
                ],
                'listModule' => [
                    'disabled' => false,
                ],
            ],
        ],
    ],
);

ExtensionManagementUtility::addTCAcolumns('tx_personnel_domain_model_person', $tempColumns, 1);

ExtensionManagementUtility::addToAllTCAtypes(
    'tx_personnel_domain_model_person',
    '--div--;Addresses, --palette--;Addresses;addresses,',
    '',
    'after:facebook'
);

$GLOBALS['TCA']['tx_personnel_domain_model_person']['palettes']['addresses'] = [
    'showitem' => 'tx_addresses,',
];
?>