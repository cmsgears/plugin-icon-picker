<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\icons\widgets;

// Yii Imports
use yii\helpers\Html;

/**
 * TextureChooser widget provide options to choose texture.
 *
 * @since 1.0.0
 */
class TextureChooser extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	public $wrap = true;

	public $class		= null;
	public $model		= null;
	public $attribute	= 'texture';
	public $label		= 'Texture';
	public $texture		= null;

	public $default = 'texture'; // none

	public $disabled = false;

	public $template = 'texture';

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// cmsgears\core\common\base\Widget

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [
			'name' => $this->getModelName(),
			'attribute' => $this->attribute,
			'label' => $this->label,
			'texture' => $this->getTexture(),
			'disabled' => $this->disabled
		]);

		if( $this->wrap ) {

			return Html::tag( $this->wrapper, $widgetHtml, $this->options );
		}

		return $widgetHtml;
	}

	// IconChooser ---------------------------

	/**
	 * Return the model name used while submitting the form.
	 *
	 * @return string
	 */
	private function getModelName() {

		// Provided name will override
		if( isset( $this->class ) ) {

			return $this->class;
		}

		// Return class name if model is given
		if( isset( $this->model ) ) {

			$rClass = new \ReflectionClass( $this->model );

			return $rClass->getShortName();
		}

		return 'Icon';
	}

	/**
	 * Return the texture to be displayed.
	 *
	 * @return string
	 */
	private function getTexture() {

		// Provided name will override
		if( isset( $this->model ) ) {

			$texture = $this->attribute;

			if( isset( $this->model->$texture ) ) {

				return $this->model->$texture;
			}
		}

		if( isset( $this->texture ) ) {

			return $this->texture;
		}

		return $this->default;
	}

}
