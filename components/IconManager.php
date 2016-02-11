<?php
namespace cmsgears\icons\components;

// Yii Imports
use \Yii;

// CMG Imports

class IconManager extends \yii\base\Component {

	public $iconSets	= [ 'cmti' => true, 'fa' => true ];
	public $defaultSet	= 'cmti';

	public function __construct( $config = [] ) {

		parent::__construct( $config );
	}

	// IconManager --------------------------------------------

	// By default it returns the icons from CMGTools IconLib library. The parameter defaultSet can be changed or it can be overriden to change default behaviour. 
	public function getFileIcon( $fileType ) {

		if( $this->defaultSet == 'cmti' ) {

			return $this->getCmtiFileIcon( $fileType );
		}
	}

	protected function getCmtiFileIcon( $fileType ) {

		switch( $fileType ) {

			case FileManager::FILE_TYPE_IMAGE: {

				return 'cmti-image'; 
			}

			case FileManager::FILE_TYPE_VIDEO: {

				return 'cmti-file-video'; 
			}

			case FileManager::FILE_TYPE_AUDIO: {

				return 'cmti-file-audio'; 
			}

			case FileManager::FILE_TYPE_DOCUMENT: {

				return 'cmti-document'; 
			}

			case FileManager::FILE_TYPE_COMPRESSED: {

				return 'cmti-file-zip'; 
			}
		}
	}
}

?>