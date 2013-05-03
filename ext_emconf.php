<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "dce".
 *
 * Auto generated 03-05-2013 15:14
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Dynamic Content Elements (DCE)',
	'description' => 'Creates easily and fast dynamic content elements. It is an alternative to flexible content elements (FCE) but without need of TemplaVoila (TV). Based on Extbase and Fluid.',
	'category' => 'Backend',
	'shy' => 0,
	'version' => '0.8.0',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'armin@v.ieweg.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-6.0.99',
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:129:{s:20:"class.ext_update.php";s:4:"2319";s:16:"ext_autoload.php";s:4:"f2e0";s:21:"ext_conf_template.txt";s:4:"fa5c";s:12:"ext_icon.gif";s:4:"bc30";s:17:"ext_localconf.php";s:4:"95b6";s:14:"ext_tables.php";s:4:"a1b4";s:14:"ext_tables.sql";s:4:"a1a4";s:24:"ext_typoscript_setup.txt";s:4:"23cb";s:10:"readme.txt";s:4:"440b";s:17:"Classes/Cache.php";s:4:"2b62";s:36:"Classes/Controller/DceController.php";s:4:"340f";s:42:"Classes/Controller/DceModuleController.php";s:4:"21c4";s:28:"Classes/Domain/Model/Dce.php";s:4:"f830";s:33:"Classes/Domain/Model/DceField.php";s:4:"1f44";s:48:"Classes/Domain/Repository/DceFieldRepository.php";s:4:"d790";s:43:"Classes/Domain/Repository/DceRepository.php";s:4:"2189";s:31:"Classes/Hooks/tx_clearCache.php";s:4:"d933";s:31:"Classes/Hooks/tx_dce_impexp.php";s:4:"920e";s:41:"Classes/Hooks/tx_docHeaderButtonsHook.php";s:4:"e27b";s:44:"Classes/Hooks/tx_renderDceContentElement.php";s:4:"5830";s:28:"Classes/Hooks/tx_saveDce.php";s:4:"9105";s:42:"Classes/Hooks/tx_update_contentelement.php";s:4:"914d";s:48:"Classes/UserConditions/user_dceOnCurrentPage.php";s:4:"e319";s:55:"Classes/UserFunction/class.tx_dce_abstract_formeval.php";s:4:"3021";s:53:"Classes/UserFunction/class.tx_dce_codemirrorField.php";s:4:"3cd4";s:57:"Classes/UserFunction/class.tx_dce_dceFieldCustomLabel.php";s:4:"db5b";s:53:"Classes/UserFunction/class.tx_dce_dcePreviewField.php";s:4:"9139";s:62:"Classes/UserFunction/class.tx_dce_formevals_lowerCamelCase.php";s:4:"ebf5";s:63:"Classes/UserFunction/class.tx_dce_formevals_noLeadingNumber.php";s:4:"67cf";s:24:"Classes/Utility/File.php";s:4:"03cc";s:33:"Classes/Utility/FluidTemplate.php";s:4:"180d";s:30:"Classes/Utility/TypoScript.php";s:4:"f446";s:47:"Classes/ViewHelpers/ArrayGetIndexViewHelper.php";s:4:"2b3e";s:41:"Classes/ViewHelpers/ExplodeViewHelper.php";s:4:"7574";s:36:"Classes/ViewHelpers/GPViewHelper.php";s:4:"bc68";s:39:"Classes/ViewHelpers/ImageViewHelper.php";s:4:"4276";s:41:"Classes/ViewHelpers/IsArrayViewHelper.php";s:4:"fc38";s:41:"Classes/ViewHelpers/ThisUrlViewHelper.php";s:4:"e775";s:45:"Classes/ViewHelpers/TypolinkUrlViewHelper.php";s:4:"7a0c";s:42:"Classes/ViewHelpers/TypolinkViewHelper.php";s:4:"7782";s:54:"Classes/ViewHelpers/Be/CurrentDceVersionViewHelper.php";s:4:"2ff3";s:52:"Classes/ViewHelpers/Be/CurrentLanguageViewHelper.php";s:4:"36a8";s:56:"Classes/ViewHelpers/Be/CurrentTypo3VersionViewHelper.php";s:4:"6666";s:51:"Classes/ViewHelpers/Be/IncludeCssFileViewHelper.php";s:4:"0ff2";s:50:"Classes/ViewHelpers/Be/IncludeJsFileViewHelper.php";s:4:"79d4";s:49:"Classes/ViewHelpers/Be/TabContainerViewHelper.php";s:4:"7850";s:40:"Classes/ViewHelpers/Be/TabViewHelper.php";s:4:"66a8";s:52:"Classes/ViewHelpers/Format/AddcslashesViewHelper.php";s:4:"a89b";s:44:"Classes/ViewHelpers/Format/RawViewHelper.php";s:4:"a829";s:53:"Classes/ViewHelpers/Format/StripslashesViewHelper.php";s:4:"c466";s:51:"Classes/ViewHelpers/Format/StrtolowerViewHelper.php";s:4:"2dea";s:45:"Classes/ViewHelpers/Format/TinyViewHelper.php";s:4:"bf13";s:48:"Classes/ViewHelpers/Format/UcfirstViewHelper.php";s:4:"bf68";s:60:"Classes/ViewHelpers/Format/WrapWithCurlyBracesViewHelper.php";s:4:"9c04";s:41:"Classes/ViewHelpers/Uri/DamViewHelper.php";s:4:"45ad";s:43:"Classes/ViewHelpers/Uri/ImageViewHelper.php";s:4:"c528";s:25:"Configuration/TCA/Dce.php";s:4:"3920";s:30:"Configuration/TCA/DceField.php";s:4:"41c8";s:40:"Resources/Private/Language/locallang.xml";s:4:"6ded";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"efb1";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"5aea";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"a9ab";s:38:"Resources/Private/Layouts/Backend.html";s:4:"cfab";s:45:"Resources/Private/Layouts/CustomTcaField.html";s:4:"6f6a";s:38:"Resources/Private/Layouts/Default.html";s:4:"4f89";s:35:"Resources/Private/Layouts/None.html";s:4:"3562";s:44:"Resources/Private/Partials/FlexFormsXML.html";s:4:"10a6";s:69:"Resources/Private/Partials/BodytextPreview/ShowAllFieldsButFirst.html";s:4:"9dbe";s:70:"Resources/Private/Partials/ConfigurationEditor/AvailableTemplates.html";s:4:"e952";s:70:"Resources/Private/Partials/ConfigurationEditor/AvailableVariables.html";s:4:"337a";s:49:"Resources/Private/Partials/Module/NewDceLink.html";s:4:"eba5";s:63:"Resources/Private/Templates/DceModule/DcePreviewReturnPage.html";s:4:"83af";s:48:"Resources/Private/Templates/DceModule/Index.html";s:4:"ded8";s:53:"Resources/Private/Templates/DceSource/ext_tables.html";s:4:"47e5";s:52:"Resources/Private/Templates/DceSource/localconf.html";s:4:"f843";s:57:"Resources/Private/Templates/DceUserFields/Coldmirror.html";s:4:"ab83";s:57:"Resources/Private/Templates/DceUserFields/DcePreview.html";s:4:"15ad";s:36:"Resources/Public/CSS/dceInstance.css";s:4:"6561";s:34:"Resources/Public/CSS/dceModule.css";s:4:"28aa";s:35:"Resources/Public/CSS/dcePreview.css";s:4:"b767";s:84:"Resources/Public/CodeSnippets/ConfigurationTemplates/01 input/Simple input field.xml";s:4:"b364";s:74:"Resources/Public/CodeSnippets/ConfigurationTemplates/01 input/Typolink.xml";s:4:"d653";s:73:"Resources/Public/CodeSnippets/ConfigurationTemplates/02 text/Full RTE.xml";s:4:"ffa6";s:80:"Resources/Public/CodeSnippets/ConfigurationTemplates/02 text/Simple textarea.xml";s:4:"54db";s:81:"Resources/Public/CodeSnippets/ConfigurationTemplates/03 check/Simple checkbox.xml";s:4:"bbd2";s:92:"Resources/Public/CodeSnippets/ConfigurationTemplates/05 select/Automatical list of items.xml";s:4:"47e6";s:87:"Resources/Public/CodeSnippets/ConfigurationTemplates/05 select/Manual list of items.xml";s:4:"9eec";s:86:"Resources/Public/CodeSnippets/ConfigurationTemplates/06 group/File upload with DAM.xml";s:4:"7b20";s:77:"Resources/Public/CodeSnippets/ConfigurationTemplates/06 group/File upload.xml";s:4:"aa77";s:104:"Resources/Public/CodeSnippets/ConfigurationTemplates/06 group/Link internal page with suggest wizard.xml";s:4:"35a5";s:111:"Resources/Public/CodeSnippets/ConfigurationTemplates/06 group/Link Pages and get pages as associative array.xml";s:4:"a4fe";s:92:"Resources/Public/CodeSnippets/ConfigurationTemplates/11 miscellaneous/Display Conditions.xml";s:4:"2228";s:63:"Resources/Public/CodeSnippets/DceViewHelpers/arrayGetIndex.html";s:4:"a8f1";s:57:"Resources/Public/CodeSnippets/DceViewHelpers/explode.html";s:4:"66ef";s:67:"Resources/Public/CodeSnippets/DceViewHelpers/format.addclashes.html";s:4:"7d30";s:60:"Resources/Public/CodeSnippets/DceViewHelpers/format.raw.html";s:4:"d381";s:61:"Resources/Public/CodeSnippets/DceViewHelpers/format.tiny.html";s:4:"88cd";s:64:"Resources/Public/CodeSnippets/DceViewHelpers/format.ucfirst.html";s:4:"995c";s:76:"Resources/Public/CodeSnippets/DceViewHelpers/format.wrapWithCurlyBraces.html";s:4:"6f5e";s:52:"Resources/Public/CodeSnippets/DceViewHelpers/GP.html";s:4:"dbd6";s:55:"Resources/Public/CodeSnippets/DceViewHelpers/image.html";s:4:"f9f7";s:57:"Resources/Public/CodeSnippets/DceViewHelpers/isArray.html";s:4:"374f";s:57:"Resources/Public/CodeSnippets/DceViewHelpers/thisUrl.html";s:4:"ab50";s:58:"Resources/Public/CodeSnippets/DceViewHelpers/typolink.html";s:4:"7fe7";s:61:"Resources/Public/CodeSnippets/DceViewHelpers/typolinkUrl.html";s:4:"b88c";s:85:"Resources/Public/CodeSnippets/DceViewHelpers/uri.dam (not supported in sections).html";s:4:"25d8";s:58:"Resources/Public/CodeSnippets/FamousViewHelpers/count.html";s:4:"aedf";s:58:"Resources/Public/CodeSnippets/FamousViewHelpers/debug.html";s:4:"8d43";s:56:"Resources/Public/CodeSnippets/FamousViewHelpers/for.html";s:4:"559a";s:64:"Resources/Public/CodeSnippets/FamousViewHelpers/format.crop.html";s:4:"fb01";s:64:"Resources/Public/CodeSnippets/FamousViewHelpers/format.html.html";s:4:"57f6";s:65:"Resources/Public/CodeSnippets/FamousViewHelpers/format.nl2br.html";s:4:"b9b6";s:55:"Resources/Public/CodeSnippets/FamousViewHelpers/if.html";s:4:"60f8";s:58:"Resources/Public/CodeSnippets/FamousViewHelpers/image.html";s:4:"8fef";s:63:"Resources/Public/CodeSnippets/FamousViewHelpers/link.email.html";s:4:"8236";s:66:"Resources/Public/CodeSnippets/FamousViewHelpers/link.external.html";s:4:"b541";s:62:"Resources/Public/CodeSnippets/FamousViewHelpers/link.page.html";s:4:"21ad";s:59:"Resources/Public/CodeSnippets/FamousViewHelpers/render.html";s:4:"5da1";s:38:"Resources/Public/Icons/ajax-loader.gif";s:4:"c5d6";s:41:"Resources/Public/Icons/docheader_icon.png";s:4:"c1b8";s:35:"Resources/Public/Icons/ext_icon.gif";s:4:"ca48";s:63:"Resources/Public/Icons/tx_dce_domain_model_dcefield_element.gif";s:4:"3b06";s:63:"Resources/Public/Icons/tx_dce_domain_model_dcefield_section.gif";s:4:"d24f";s:59:"Resources/Public/Icons/tx_dce_domain_model_dcefield_tab.gif";s:4:"fcd8";s:47:"Resources/Public/JavaScript/renderDcePreview.js";s:4:"269d";s:52:"Resources/Public/Libraries/codemirror/codemirror.css";s:4:"63ef";s:59:"Resources/Public/Libraries/codemirror/codemirror_custom.css";s:4:"3228";s:62:"Resources/Public/Libraries/codemirror/codemirror_custom.min.js";s:4:"51fa";s:45:"Resources/Public/Libraries/codemirror/init.js";s:4:"4c7e";}',
	'suggests' => array(
	),
);

?>