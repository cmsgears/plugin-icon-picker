<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\icons\components;

// Yii Imports
use yii\base\Component;

// CMG Imports
use cmsgears\files\components\FileManager;

class IconManager extends Component {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	public $iconSets = [ 'fa' => true, 'cmti' => true, 'cmti-brand' => true, 'cmti-currency' => true ];

	// Protected --------------

	// Private ----------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// IconManager ---------------------------

	/**
	 * By default it returns the icons from CMGTools IconLib library. The parameter defaultSet
	 * can be changed or it can be overriden to change default behaviour.
	 *
	 * @param type $fileType
	 * @return string
	 */
	public function getFileIcon( $fileType, $iconLib = 'cmti' ) {

		switch( $iconLib ) {

			case 'fa': {

				return $this->getFaFileIcon( $fileType );
			}
			case 'cmti': {

				return $this->getCmtiFileIcon( $fileType );
			}
		}
	}

	/**
	 * Return the icon corresponding to given file type from CMT IconLib library.
	 *
	 * @param string $fileType
	 * @return string
	 */
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

	/**
	 * Return the icon corresponding to given file type from Font Awesome library.
	 *
	 * @param string $fileType
	 * @return string
	 */
	protected function getFaFileIcon( $fileType ) {

		switch( $fileType ) {

			case FileManager::FILE_TYPE_IMAGE: {

				return 'fa-file-image';
			}
			case FileManager::FILE_TYPE_VIDEO: {

				return 'fa-file-video';
			}
			case FileManager::FILE_TYPE_AUDIO: {

				return 'fa-file-audio';
			}
			case FileManager::FILE_TYPE_DOCUMENT: {

				return 'fa-file';
			}
			case FileManager::FILE_TYPE_COMPRESSED: {

				return 'fa-file-archive';
			}
		}
	}

}
