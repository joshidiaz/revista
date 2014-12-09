/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'es';
	// config.uiColor = '#333333';

	// Aqui van la implementacion de kcFinder 
	config.filebrowserBrowseUrl = 'http://localhost/revista/statics/kcfinder/browse.php?type=images&dir=images&CKEditor=editor1&CKEditorFuncNum=1&langCode=en';
  	config.filebrowserImageBrowseUrl = 'http://localhost/revista/statics/kcfinder/browse.php?opener=ckeditor&type=images';
  	config.filebrowserFlashBrowseUrl = 'http://localhost/revista/statics/kcfinder/browse.php?opener=ckeditor&type=flash';
  	config.filebrowserUploadUrl = 'http://localhost/revista/statics/kcfinder/upload.php?opener=ckeditor&type=files';
  	config.filebrowserImageUploadUrl = 'http://localhost/revista/statics/kcfinder/upload.php?opener=ckeditor&type=images';
  	config.filebrowserFlashUploadUrl = 'http://localhost/revista/statics/kcfinder/upload.php?opener=ckeditor&type=flash';
  	config.toolbarCanCollapse = true;
	config.toolbarStartupExpanded = true;
};
