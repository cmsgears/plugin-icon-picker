<?php
namespace cmsgears\icons\assets;

// Yii Imports
use yii\web\View;

class CmtIconLibAssets extends \yii\web\AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@bower/cmt-iconlib';

	// Load CSS

	public $css     = [
		'dist/css/cmti.min.css'
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

	// Constructor and Initialisation ------------------------------

    public function __construct( $config = [] ) {
		
		// do some more config
		
        parent::__construct( $config );
    }
	
	public function init() {

		// init bundle
	}
}

?>