<div class="wrap">
	<h2>Google Maps Plugin Options</h2>


<p>The Google Map plugin adds a “Add Map” icon to your visual editor. &nbsp;Once you’ve created your new map it is inserted into write Post / Page area as shortcode which looks like this: [map id="1"].</p>
<p>It also adds a widget so you can add maps to your sidebar (see Appearance &gt; Widgets).</p>
<?php if (!is_multisite()) { ?>
<?php } ?>

	<form action="options.php" method="post">
	<?php settings_fields('agm_google_maps'); ?>
	<?php do_settings_sections('agm_google_maps_options_page'); ?>
	<p class="submit">
		<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
	</p>
	</form>
</div>