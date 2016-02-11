<?php
namespace cmsgears\icons\assets;

// Yii Imports
use \Yii;
use yii\web\View;

class IconAssets extends \yii\web\AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@cmsgears/plugin-icon-picker/widgets/resources';

	// Load CSS

	public $css     = [
		// css
    ];

	// Load Javascript

    public $js      = [
		'scripts/main.js'
    ];

	// Define the Position to load Assets
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'yii\web\JqueryAsset'
    ];

	// Constructor and Initialisation ------------------------------

    public function __construct( $config = [] ) {
		
		$iconSets = Yii::$app->iconManager->iconSets;

		if( isset( $iconSets[ 'fa' ] ) && $iconSets[ 'fa' ] ) {
			
			$this->depends[]	= 'cmsgears\icons\assets\FontAwesomeAssets';
		}

		if( isset( $iconSets[ 'cmti' ] ) && $iconSets[ 'cmti' ] ) {
			
			$this->depends[]	= 'cmsgears\icons\assets\CmtIconLibAssets';
		}
		
        parent::__construct( $config );
    }
	
	public function init() {

		// init bundle
	}
}

?>