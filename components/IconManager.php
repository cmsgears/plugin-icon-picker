<?php
namespace cmsgears\icons\components;

// Yii Imports
use \Yii;

// CMG Imports

class IconManager extends \yii\base\Component {

	public $iconSets	= [ 'cmt' => true, 'fa' => true ];

	public function __construct( $config = [] ) {

		parent::__construct( $config );
	}

	// IconManager --------------------------------------------

}

?>