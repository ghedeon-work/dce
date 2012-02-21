<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$pathDceExtTables = PATH_typo3conf . 'temp_CACHED_dce_ext_tables.php';
if (!file_exists($pathDceExtTables)) {
	/** @var $dceCache Tx_Dce_Cache */
	$dceCache = t3lib_div::makeInstance('Tx_Dce_Cache');
	$dceCache->createExtTables($pathDceExtTables);
}
require_once($pathDceExtTables);

$TCA['tx_dce_domain_model_dce'] = array(
    'ctrl' => array(
        'title'    => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce',
        'label' => 'title',
		'adminOnly' => 1,
		'rootLevel' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
		'sortby' => 'sorting',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Dce.php',
		'requestUpdate' => 'wizard_enable,template_type',
        'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dce_domain_model_dce.gif'
    ),
);

$TCA['tx_dce_domain_model_dcefield'] = array(
    'ctrl' => array(
        'title'    => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield',
        'label' => 'title',
		'label_userFunc' => 'tx_dce_dceFieldCustomLabel->getLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
		'requestUpdate' => 'type',
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/DceField.php',
		'typeicon_column' => 'type',
		'typeicons' => array(
			'0' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dce_domain_model_dcefield_element.gif',
			'1' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dce_domain_model_dcefield_tab.gif',
		),
    ),
);
?>