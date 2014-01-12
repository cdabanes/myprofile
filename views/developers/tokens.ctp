<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name developers">
									 <?php echo $this->Html->link( 'Access Tokens',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
						<div class="span3 upAccount">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-chevron-left')).
													$this->Html->tag('span', 'BACK', array('class' => 'action-label')),
													array('action'=>'index'),array('escape' => false,'class'=>'btn btn-medium tree-back btn-block animate' ,'id'=>'intent-back')
													);  ?>					
					</div>		
				</div>
			</div>
			<div class="span6 text-right">
				 <input class="span6 m-t-5 p" type="text" placeholder="Search">
			</div>
		</div>
	</div>
 </div>
<div class="row-fluid">
<div class="developers form span6 offset3">
<?php echo $this->Form->create('OAuth', array('url' => array('controller' => 'oauth', 'action' => 'index'),
												'class'=>'form-horizontal',
												'inputDefaults' => array( 	'label'=>array('class'=>'control-label'),
																			'div'=>array('class'=>'control-group')
																		)
												));?>
	<fieldset>
		<legend><?php __('Add Access Token'); ?></legend>
		<?php echo $this->Form->input('requester_name',array('value'=>$user['User']['info']['full_name'],'readonly'=>true,'placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('requester_email',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_uri',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('callback_uri',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_title',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_descr',array('type'=>'textarea','placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_notes',array('type'=>'textarea','placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_type',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
		<?php echo $this->Form->input('application_commercial',array('placeholder'=>'','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
	</fieldset>
	<div class="control-group">
		<div class="controls">
		<?php echo $this->Form->button('Save',array('type'=>'submit','class'=>'btn btn-primary'));?>
		<?php echo $this->Form->button('Cancel',array('type'=>'reset','class'=>'btn'));?>
		</div>
	</div>
	<?php echo $this->Form->end();?>
</div>
</div>