<?php
namespace cmsgears\icons\widgets;

// Yii Imports
use \Yii;
use yii\helpers\Html;

// CMG Imports

class IconChooser extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $class			= null;
	public $model			= null;
	public $attribute		= 'icon';
	public $label			= 'icon';
	public $icon			= null;

	public $defaultIcon		= 'icon'; // none

	public $disabled		= false;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

	/**
	 * @inheritdoc
	 */
    public function init() {

        parent::init();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

	/**
	 * @inheritdoc
	 */
    public function run() {

		$widgetHtml = $this->renderWidget();

		// wraps both the login and register boxes in a div.
		return Html::tag( 'div', $widgetHtml, $this->options );
    }

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [
			'name' => $this->getModelName(),
			'attribute' => $this->attribute,
			'label' => $this->label,
			'icon' => $this->getIcon(),
			'disabled' => $this->disabled
		]);

		return $widgetHtml;
	}

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

	private function getIcon() {

		// Provided name will override
		if( isset( $this->model ) ) {

			$icon = $this->attribute;

			if( isset( $this->model->$icon ) ) {

				return $this->model->$icon;
			}
		}

		if( isset( $this->icon ) ) {

			return $this->icon;
		}

		return $this->defaultIcon;
	}
}

?>