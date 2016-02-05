<?php
namespace cmsgears\icons\components;

// Yii Imports
use \Yii;

// CMG Imports

class IconManager extends \yii\base\Component {

	public function __construct( $config = [] ) {

        if( !empty( $config ) ) {

            Yii::configure( $this, $config );
        }

		// init tasks

        $this->init();
	}

	// IconManager ----------------------------------------------------------

}

?>