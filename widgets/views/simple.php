<?php if( isset( $label ) ) { ?>
	<label>Icon</label>
<?php } ?>

<div class="icon-picker">
	<input class="icon-field" type="hidden" name="<?= $name ?>[<?= $attribute ?>]" value="<?= $icon ?>" />
	<span class="wrap-icon choose-icon <?php if( $disabled ) echo 'disabled'; ?>">
		<i class="picker-icon <?= $icon ?>"></i>
	</span>
	<div class="icon-sets cscroller">
		<span class="wrap-icon">
			<i class="picker-icon" icon=""></i>
		</span>
		<?php include_once "library/font-awesome.php"?>
	</div>
</div>