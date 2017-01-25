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
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-alarm" icon="icon cmti cmti-alarm"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-alpha-asc" icon="icon cmti cmti-alpha-asc"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-alpha-des" icon="icon cmti cmti-alpha-des"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-ambulance" icon="icon cmti cmti-ambulance"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-amt-asc" icon="icon cmti cmti-amt-asc"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-amt-des" icon="icon cmti cmti-amt-des"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-anchor" icon="icon cmti cmti-anchor"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-angle-down" icon="icon cmti cmti-angle-down"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-angle-left" icon="icon cmti cmti-angle-left"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-angle-right" icon="icon cmti cmti-angle-right"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-angle-up" icon="icon cmti cmti-angle-up"></i>
		</span>
		<span class="wrap-icon">
			<i class="picker-icon cmti cmti-approve" icon="icon cmti cmti-approve"></i>
		</span>
	</div>
</div>