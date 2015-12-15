var TYPO3 = TYPO3 || {};
TYPO3.dce = TYPO3.dce || {};

TYPO3.dce.codemirrorEditors = TYPO3.dce.codemirrorEditors || [];
TYPO3.dce.codemirrorCycle = TYPO3.dce.codemirrorCycle || 0;


/**
 * Initializes the CodeMirror editor for given textarea.
 *
 * @param $textarea
 * @param {string} mode
 * @return void
 */
function initCodeMirrorEditor($textarea, mode) {
	var $ = TYPO3.jQuery;
	require([
		"../typo3conf/ext/dce/Resources/Public/JavaScript/Contrib/codemirror/lib/codemirror",
		"../typo3conf/ext/dce/Resources/Public/JavaScript/Contrib/codemirror/mode/htmlmixed/htmlmixed"
	], function(CodeMirror) {
		var editor = CodeMirror.fromTextArea($textarea.get(0), {
			mode: mode,
			indentUnit: 4,
			tabSize: 4,
			lineNumbers: true,
			indentWithTabs: true,
			styleActiveLine: true
		});

		TYPO3.dce.codemirrorCycle++;
		TYPO3.dce.codemirrorEditors.push(editor);
		$textarea.data('codemirrorCycle', TYPO3.dce.codemirrorCycle);

		setTimeout(function(){
			editor.refresh();
		},100);

		$(document).on('click', function(){
			editor.refresh();
		});

		$textarea.closest('#dceConfigurationWizard').find('.availableTemplates').change(function(){
			if ($(this).val()) {
				var $textarea = $(this).next('div').find('textarea').eq(0);
				var editorId = $textarea.data('codemirrorCycle');
				var editor = TYPO3.dce.codemirrorEditors[editorId - 1];

				editor.setValue($(this).val());
				editor.focus();
				$(this).val('');
			}
		});

		$textarea.closest('#dceConfigurationWizard').find('.availableVariables').change(function(){
			if ($(this).val()) {
				var $textarea = $(this).next('div').find('textarea').eq(0);
				var editorId = $textarea.data('codemirrorCycle');
				var editor = TYPO3.dce.codemirrorEditors[editorId - 1];

				if ($(this).val().match(/^v:/)) {
					editor.replaceSelection('{' + $(this).val().replace(/.*?:(.*)/gi, '$1') + '}');
				} else if ($(this).val().match(/^f:/)) {
					editor.replaceSelection($(this).val().replace(/.*?:([\s\S]*)/gi, '$1'));
				}
				editor.focus();
				$(this).val('');
			}
		});
	});
}

/**
 * Removes type select box of dce section field
 *
 * @param textarea
 * @return void
 */
function disableSectionFieldType() {
	var $ = TYPO3.jQuery;

	$('select[name^="data[tx_dce_domain_model_dcefield]"][name$="[type]"]').each(function(){
		// 6.2
		var $wrapperTable = $(this).closest('.wrapperTable');
		var isSectionField = $wrapperTable.closest('.t3-form-field-record-inline').attr('id');
		if (isSectionField) {
			isSectionField = isSectionField.match(/section_fields\-tx_dce_domain_model/gi);
		}
		if (isSectionField) {
			$wrapperTable.hide();
		}

		// 7.x
		var $wrapperFieldset = $(this).closest('fieldset.form-section');
		var isSectionField = $wrapperFieldset.closest('.panel-collapse').attr('id');
		if (isSectionField) {
			isSectionField = isSectionField.match(/section_fields\-tx_dce_domain_model/gi);
		}
		if (isSectionField) {
			$wrapperFieldset.hide();
		}
	});
}
