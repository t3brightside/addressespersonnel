<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/* add switch to enable showing persons in Addresses content elements */

$tempColumnsAddresses = array(
    'tx_addresses_personnel' => [
        'exclude' => 1,
        'label' => 'Personnel',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                    'invertStateDisplay' => false
                ]
            ],
        ]
    ],
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnsAddresses);
ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'addressesLayout',
    'tx_addresses_personnel',
    'after:tx_addresses_vcard'
);


/* add switch to enable showing addresses in Personnel content elements */

$tempColumnsPersonnel = array(
    'tx_personnel_addresses' => [
        'exclude' => 1,
        'label' => 'Show Addresses',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                    'invertStateDisplay' => false
                ]
            ],
        ]
    ],
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnsPersonnel);
ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'personnelLayout',
    'tx_personnel_addresses',
    'after:tx_addresses_vcard'
);