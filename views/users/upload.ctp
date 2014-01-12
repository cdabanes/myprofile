


<div class="documents form">
	<?php echo $this->Form->create('User', array('enctype' => 'multipart/form-data'));?>
		<legend><?php __('Add Document'); ?></legend>
	<?php echo $this->Form->file('Document');
	?><br />
		<input class="btn btn-primary" type="submit" value="Upload" />
</div>