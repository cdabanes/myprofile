<?php echo $this->Html->script('biz/users',array('inline'=>false));?>
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name courses">
									 <?php echo $this->Html->link( 'Account Settings	',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
					<div class="span3">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-chevron-left')).
													$this->Html->tag('span', 'BACK', array('class' => 'action-label')),
													'/pages/',array('escape' => false,'class'=>'btn btn-medium tree-back btn-block animate' ,'id'=>'intent-back')
													); ?> 					
					</div>
					
				</div>
			</div>
		</div>
	</div>
 </div>
 <br>
<div class="row-container">
	<div class="row-container">
		<div class="span3 offset1">
	
			<?php echo $this->Form->create('User',array('action'=>'change/info','class'=>'me','id'=>'change_info'));?>
				<fieldset>
					<legend><?php __('Edit User Information'); ?></legend>
				<?php	
					echo $this->Form->input('id');
					echo $this->Form->input('username',array('id'=>'username','frm'=>'#frm_usr_chk','class'=>'username ajax','linkto'=>'#username_check'));
					echo $this->Form->input('last_name',array('value'=>$user['User']['info']['last_name']));
					echo $this->Form->input('first_name',array('value'=>$user['User']['info']['first_name']));
					echo $this->Form->input('middle_name',array('value'=>$user['User']['info']['middle_name']));
					echo $this->Form->input('password');
				?>
				</fieldset>
				<input class='btn btn-medium btn-primary' id="change_info_btn" type='button' value='Submit'/>
				<input class='btn btn-medium' id="" type='button' value='Cancel'/>
			<?php echo $this->Form->end();?>
						<?php echo $this->Form->create('User' , array('action'=>'check','id'=>'frm_usr_chk'));
				echo $this->Form->input('username',array('type'=>'hidden','id'=>'username_check'));
			 echo $this->Form->end();?>
			<hr/>
		</div>
	</div>
</div>
				
<div class="row-container">
	<div class="row-container">
		<div class="span5 offset1">				
				

			<?php echo $this->Form->create('User', array('action'=>'change/password','class'=>'me','id'=>'change_pass'));?>
				<fieldset>
					<legend><?php __('Change Password'); ?></legend>
				<?php
					echo $this->Form->input('old_password',array('type'=>'password'));
					
					echo $this->Form->input('password',array('value'=>false,'id'=>'new_password','class'=>'password'));
					echo $this->Form->input('confirm_password',array('type'=>'password','id'=>'password_confirm','class'=>'cpassword','linkto'=>'#new_password'));
						?>
				</fieldset>
				<input class='btn btn-medium btn-primary' id="change_pass_btn" type='button' value='Submit'/>
				<input class='btn btn-medium' id="" type='button' value='Cancel'/>
			<?php echo $this->Form->end();?>
			<hr/>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Message</h3>
  </div>
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Ok</button>
  </div>
</div>