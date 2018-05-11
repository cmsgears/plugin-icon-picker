<?php $bkg = Yii::getAlias( '@images' ) . "/avatar-site.png"; ?>

<?php if( isset( $label ) ) { ?>
	<label><?= $label ?></label>
<?php } ?>

<div class="icon-picker">
	<input class="icon-field" type="hidden" name="<?= $name ?>[<?= $attribute ?>]" value="<?= $texture ?>" />
	<span class="picker-icon-wrap choose-icon <?php if( $disabled ) echo 'disabled'; ?>">
		<i class="picker-icon <?= $texture ?>"></i>
	</span>
	<div class="picker-icon-sets cscroller">
		<span class="picker-icon-wrap">
			<i class="picker-icon" icon=""></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Default" class="picker-icon texture texture-default" icon="texture texture-default"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Small Bars" class="picker-icon texture texture-bar-s" icon="texture texture-bar-s"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Medium Bars" class="picker-icon texture texture-bar-m" icon="texture texture-bar-m"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Large Bars" class="picker-icon texture texture-bar-l" icon="texture texture-bar-l"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="White Grid" class="picker-icon texture texture-grid-w" icon="texture texture-grid-w"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Black Grid" class="picker-icon texture texture-grid-b" icon="texture texture-grid-b"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="White Grains" class="picker-icon texture texture-grain-w" icon="texture texture-grain-w"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Large White Grains" class="picker-icon texture texture-grain-w-l" icon="texture texture-grain-w-l"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Black Grains" class="picker-icon texture texture-grain-b" icon="texture texture-grain-b"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Large Black Grains" class="picker-icon texture texture-grain-b-l" icon="texture texture-grain-b-l"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="White Diagonal" class="picker-icon texture texture-diagonal-w" icon="texture texture-diagonal-w"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Reverse White Diagonal" class="picker-icon texture texture-diagonal-w-r" icon="texture texture-diagonal-w-r"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Black Diagonal" class="picker-icon texture texture-diagonal-b" icon="texture texture-diagonal-b"></i>
		</span>
		<span class="picker-icon-wrap bkg-image" style="background-image: url(<?= $bkg ?>);">
			<i title="Reverse Black Diagonal" class="picker-icon texture texture-diagonal-b-r" icon="texture texture-diagonal-b-r"></i>
		</span>
	</div>
</div>
