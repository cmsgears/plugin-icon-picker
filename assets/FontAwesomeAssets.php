<?php
namespace cmsgears\icons\assets;

// Yii Imports
use yii\web\View;

class FontAwesomeAssets extends \yii\web\AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@bower/fontawesome';

	// Load CSS

	public $css     = [
		'css/font-awesome.min.css'
    ];

	// Publish
	// TODO: It's not working for now
/*
	public $publishOptions = [
        'only' => [
            'fonts/',
            'css/'
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
