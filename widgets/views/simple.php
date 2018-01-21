<?php if( isset( $label ) ) { ?>
	<label>Icon</label>
<?php } ?>

<div class="icon-picker">
	<input class="icon-field" type="hidden" name="<?= $name ?>[<?= $attribute ?>]" value="<?= $icon ?>" />
	<span class="picker-icon-wrap choose-icon <?php if( $disabled ) echo 'disabled'; ?>">
		<i class="picker-icon <?= $icon ?>"></i>
	</span>
	<div class="picker-icon-sets cscroller">
		<span class="picker-icon-wrap">
			<i class="picker-icon" icon=""></i>
		</span>
		<?php include_once "library/font-awesome.php"?>
	</div>
</div>
