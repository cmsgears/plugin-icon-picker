<?php if( isset( $label ) ) { ?>
	<label><?= $label ?></label>
<?php } ?>

<div class="cmt-icon-picker icon-picker">
	<input class="icon-field" type="hidden" name="<?= $name ?>[<?= $attribute ?>]" value="<?= $icon ?>" />
	<span class="picker-icon-wrap choose-icon <?php if( $disabled ) echo 'disabled'; ?>">
		<i class="picker-icon <?= $icon ?>"></i>
	</span>
	<div class="cmt-tabs tabs tabs-basic picker-icon-sets">
		<div class="tab-links-wrap">
			<span class="tab-link" target="#icon-tab-fa">FA</span>
			<span class="tab-link" target="#icon-tab-breeze">Breeze</span>
			<span class="tab-link" target="#icon-tab-brand">Brand</span>
			<span class="tab-link" target="#icon-tab-currency">Currency</span>
		</div>
		<div class="tab-content-wrap">
			<div id="icon-tab-fa" class="tab-content picker-icon-set cscroller">
				<span class="picker-icon-wrap">
					<i class="picker-icon" icon=""></i>
				</span>
				<?php include_once "library/font-awesome.php"; ?>
			</div>
			<div id="icon-tab-breeze" class="tab-content picker-icon-set cscroller">
				<span class="picker-icon-wrap">
					<i class="picker-icon" icon=""></i>
				</span>
				<?php include_once "library/breeze-core.php"; ?>
			</div>
			<div id="icon-tab-brand" class="tab-content picker-icon-set cscroller">
				<span class="picker-icon-wrap">
					<i class="picker-icon" icon=""></i>
				</span>
				<?php include_once "library/breeze-brand.php"; ?>
			</div>
			<div id="icon-tab-currency" class="tab-content picker-icon-set cscroller">
				<span class="picker-icon-wrap">
					<i class="picker-icon" icon=""></i>
				</span>
				<?php include_once "library/breeze-currency.php"; ?>
			</div>
		</div>
	</div>
</div>
