<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

$extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
$extConf = $extensionConfiguration->get('addressespersonnel');

if ($extConf['addressInlinePersonnelEditing']) {
    // For inline editing of personnel records in addresses
    $tempColumns = array(
        'tx_personnel' => [
            'label' => 'Add Person',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_personnel_domain_model_person',
                'MM' => 'tx_addresses_personnel_mm',
                'MM_opposite_field' => 'tx_addresses',
                'appearance' => [
                    'collapseAll' => true,
                    'useSortable' => true,
                    'showNewRecordLink' => true,
                    'newRecordLinkPosition' => 'bottom',
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink' => true,
                    'enabledControls' => [
                        'info' => true,
                        'new' => true,
                        'dragdrop' => true,
                        'sort' => true,
                        'hide' => true,
                        'delete' => true,
                        'localize' => true,
                    ],
                ],
            ],
        ],
    );
} else {
    $tempColumns = array(
        'tx_personnel' => [
            'label' => 'Persons',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_personnel_domain_model_person',
                'MM' => 'tx_addresses_personnel_mm',
                'MM_opposite_field' => 'tx_addresses',
                'size' => 5,
                'autoSizeMax' => 30,
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
                'appearance' => [
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'newRecordLinkAddTitle' => true,
                    'useCombination' => true,
                    'useSortable' => true,
                    'enabledControls' => [
                        'info' => true,
                        'new' => true,
                        'dragdrop' => true,
                        'sort' => true,
                        'hide' => true,
                        'delete' => true,
                        'localize' => true,
                    ],
                ],
            ],
        ],
    );
}

ExtensionManagementUtility::addTCAcolumns('tx_addresses_domain_model_address', $tempColumns, 1);
ExtensionManagementUtility::addToAllTCAtypes(
    'tx_addresses_domain_model_address',
    '--div--;Personnel,--palette--;Personnel;personnel',
    '',
    'after:longitude'
);

$GLOBALS['TCA']['tx_addresses_domain_model_address']['palettes']['personnel'] = [
    'showitem' => 'tx_personnel,',
];
