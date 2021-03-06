<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\icons\assets;

class CmtiCoreAssets extends \yii\web\AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	// Path Configuration
	public $sourcePath = '@cmgtools/breeze-icons';

	// Load CSS
	public $css = [
		'dist/css/breeze-icons-core.min.css'
	];

	// Publish
	// TODO: It's not working for now
	/*
	public $publishOptions = [
		'only' => [
			'dist/fonts/',
			'dist/css/'
		]
	];
	*/

	// Protected --------------

	// Private ----------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// CmtiCoreAssets ------------------------

}
