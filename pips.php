<?php
	$title = "noUiSlider - Handles and Slider Values";
	$description = "";
?>

<h1>Pips Add-On</h1>

<section>

	<div class="view">

		<p>This optional extention to noUiSlider allows you to generate points along the slider.</p>
		<p>Five options can be set: <code>mode</code> to determine where to place pips, <code>values</code> as additional options for <code>mode</code>, <code>stepped</code> to round pip values to the slider stepping, <code>density</code> to pre-scale the number of pips, and <code>filter</code> to manually modify pip size.</p>

		<p>All sliders on the page use the same range, as displayed to the right.</p>

	</div>

	<div class="side">

		<?php run('a-slider-range-used'); ?>
		<?php code('a-slider-range-used'); ?>
	</div>
</section>


<h2>Range</h2>

<section>

	<div class="view">

		<p>The <code>range</code> mode uses the slider range to determine where the pips should be. A pip is generated for every percentage specified.</p>

	</div>

	<div class="side">

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('range-slider'); ?>
		</div>

		<?php code('range'); ?>
	</div>

</section>

<section>

	<div class="view">

		<h4 class="before-example">Left-to-Right (default):</h4>

		<div class="example">
			<div class="pips-range" id="pips-range"></div>
		</div>

		<h4 class="before-example">Right-to-Left:</h4>

		<div class="example">
			<div class="pips-range" id="pips-range-rtl"></div>
		</div>
	</div>

	<div class="side">

		<h4 class="before-example">Vertical and vertical, bottom-to-top:</h4>

		<div class="example vertical" style="float: left">
			<div class="pips-range" id="pips-range-vertical"></div>
		</div>
		<div class="example vertical">
			<div class="pips-range" id="pips-range-vertical-rtl"></div>
		</div>


		<?php run('range-slider'); ?>
		<?php run('range'); ?>

	</div>

</section>


<h2>Steps</h2>

<section>

	<div class="view">

		<p>Like <code>range</code>, the <code>steps</code> mode uses the slider range. In <code>steps</code> mode, a pip is generated for every step. The <code>filter</code> option can be used to filter the generated pips.</p>

		<p>The <code>filter</code> function must return <code>0</code> (no value), <code>1</code> (small value) or <code>2</code> (large value).</p>
		<p>Here, we'll use large values for every step matching a thousand (<code>1000</code>, <code>2000</code>, <code>3000</code>), and small values for every step matching 500 (<code>2500</code>, <code>3500</code>, <code>4500</code>).</p>

	</div>

	<div class="side">

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('steps-slider'); ?>
		</div>

		<?php code('steps'); ?>
	</div>

</section>

<section>

	<h4 class="before-example">Slider with filtered steps:</h4>

	<div class="example">
		<div id="pips-steps"></div>
		<?php run('steps-slider'); ?>
		<?php run('steps'); ?>
	</div>

</section>


<h2>Positions</h2>

<section>

	<div class="view">

		<p>In <code>positions</code> mode, pips are generated at percentage-based positions on the slider. Optionally, the <code>stepped</code> option can be set to <code>true</code> to match the pips to the slider steps.</p>

		<div class="example">
			<div id="pips-positions"></div>
			<?php run('positions-slider'); ?>
			<?php run('positions'); ?>
		</div>

		<h4 class="before-example">Stepped positions:</h4>

		<div class="example">
			<div id="pips-positions-stepped"></div>
			<?php run('positions-stepped-slider'); ?>
			<?php run('positions-stepped'); ?>
		</div>
	</div>

	<div class="side">

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('positions-slider'); ?>
		</div>

		<?php code('positions'); ?>

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('positions-stepped-slider'); ?>
		</div>

		<?php code('positions-stepped'); ?>
	</div>
</section>


<h2>Count</h2>

<section>

	<div class="view">

		<p>The <code>count</code> mode can be used to generate a fixed number of pips. As with <code>positions</code> mode, the <code>stepped</code> option can be used.</p>

		<div class="example">
			<div id="pips-count"></div>
			<?php run('count-slider'); ?>
			<?php run('count'); ?>
		</div>

		<h4 class="before-example">Stepped count:</h4>

		<div class="example">
			<div id="pips-count-stepped"></div>
			<?php run('count-stepped-slider'); ?>
			<?php run('count-stepped'); ?>
		</div>
	</div>

	<div class="side">

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('count-slider'); ?>
		</div>

		<?php code('count'); ?>

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('count-stepped-slider'); ?>
		</div>

		<?php code('count-stepped'); ?>
	</div>
</section>


<h2>Values</h2>

<section>

	<div class="view">

		<p>The <code>values</code> mode is similar to <code>positions</code>, but it accepts values instead of percentages. The <code>stepped</code> option can be used for this mode.</p>

		<div class="example">
			<div id="pips-values"></div>
			<?php run('values-slider'); ?>
			<?php run('values'); ?>
		</div>

		<h4 class="before-example">Stepped values:</h4>
		<p>Note how overlapping pips are merged with the <code>stepped</code> option set.</p>

		<div class="example">
			<div id="pips-values-stepped"></div>
			<?php run('values-stepped-slider'); ?>
			<?php run('values-stepped'); ?>
		</div>
	</div>

	<div class="side">

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('values-slider'); ?>
		</div>

		<?php code('values'); ?>

		<div class="viewer-header">Initialize the slider</div>

		<div class="viewer-content">
			<?php code('values-stepped-slider'); ?>
		</div>

		<?php code('values-stepped'); ?>
	</div>
</section>