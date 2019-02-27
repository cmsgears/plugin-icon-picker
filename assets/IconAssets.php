<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\icons\assets;

// Yii Imports
use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class IconAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	// Path Configuration

	//public $sourcePath = '@cmsgears/plugin-icon-picker/widgets/resources';

	// Load CSS
	public $css = [
		// css
	];

	// Load Javascript
	public $js = [
		// js
	];

	// Define the Position to load Assets
	public $jsOptions = [
		'position' => View::POS_END
	];

	// Define dependent Asset Loaders
	public $depends = [
		'cmsgears\assets\jquery\Jquery'
	];

	// Protected --------------

	// Private ----------------

	// Constructor and Initialisation ------------------------------

	public function __construct( $config = [] ) {

		$iconSets = Yii::$app->iconManager->iconSets;

		if( isset( $iconSets[ 'fa' ] ) && $iconSets[ 'fa' ] ) {

			$this->depends[] = 'cmsgears\icons\assets\FontAwesomeAssets';
		}

		if( isset( $iconSets[ 'cmti' ] ) && $iconSets[ 'cmti' ] ) {

			$this->depends[] = 'cmsgears\icons\assets\CmtiCoreAssets';
		}

		parent::__construct( $config );
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// IconAssets ----------------------------

}
