<div class="row">
	<div class="span12">
		<h1>Create New Location</h1>
	</div>
</div>
<div class="row">
	<div class="span12">
<?php echo validation_errors(); ?>

<?php echo form_open( 'location/create', $form_attr ); ?>
		<fieldset>
			<div class="control-group">
				<label for="building" class="control-label">Building: </label>
        <div class="controls">
          <?php echo form_input( $form_fields['building'] ); ?>
        </div>
			</div>
			<div class="control-group">
				<label for="room" class="control-label">Room: </label>
        <div class="controls">
          <?php echo form_input( $form_fields['room'] ); ?>
        </div>
			</div>
			<div class="control-group">
				<label for="area" class="control-label">Area: </label>
        <div class="controls">
          <?php echo form_input( $form_fields['area'] ); ?>
        </div>
			</div>
      <div class="form-actions">
        <?php echo form_submit( $form_fields['form_submit'] ); ?>
        <a href="location" class="btn">Cancel</a>
      </div>
		</fieldset>
<?php echo form_close(); ?>
	</div>
</div>
