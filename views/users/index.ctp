<?php
	$this->Html->script('biz/usermgt',array('inline'=>false));
?>
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name users">
									 <?php echo $this->Html->link( 'User Management',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
					<div class="span3">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-plus icon-white')).
														$this->Html->tag('span', 'CREATE', array('class' => 'action-label')),
														array('action' => 'add'), array('escape' => false,'class'=>'btn btn-medium btn-primary btn-block animate')
													);  ?>					</div>
					<div class="btn-group span3">
					  <a class="btn btn-medium btn-block dropdown-toggle" data-toggle="dropdown" href="#">
						<i class=" icon-th-list"></i><span class="action-label">LINKS</span>	
					  </a>
					  <ul class="dropdown-menu">
						<!-- dropdown menu links -->
								<li><?php echo $this->Html->link(__('Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
					  </ul>
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
	<div class="span12">
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
		<?php //echo $details;exit()?>
								<th><?php echo $this->Paginator->sort('username');?></th>
								<th><?php echo $this->Paginator->sort('actor');?></th>
								<th><?php echo $this->Paginator->sort('status');?></th>
											<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$intents = array(
							'A'=>array('label'=>'Activate','value'=>'A','action'=>'activate','class'=>'icon-ok-circle'),
							'D'=>array('label'=>'Deactivate','value'=>'D','action'=>'deactivate','class'=>'icon-remove-circle'),
							'B'=>array('label'=>'Block','value'=>'B','action'=>'block','class'=>'icon-ban-circle'),
							'U'=>array('label'=>'Unblock','value'=>'A','action'=>'unblock','class'=>'icon-adjust')
					);
		
	?>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['actor']; ?>&nbsp;</td>
		<td>
			<?php
			switch($user['User']['status']){
				case 'P': $label =''; break;
				case 'A': $label ='label-success'; break;
				case 'I': $label ='label-error'; break;
				case 'B': $label ='label-inverse'; break;
			}?>
		<span class="label  <?php echo $label; ?>"><?php echo $user['User']['status_text']; ?></span></td>
		<td class="actions">
			<?php
			$acts = array();
			switch($user['User']['status']){
				case 'P':
					$actions = array($intents['A'],$intents['B']);
					break;
				case 'A':
					$actions = array($intents['D'],$intents['B']);
					break;
				case 'B':
					$actions = array($intents['D'],$intents['U']);
					break;
				case 'I':
					$actions = array($intents['A'],$intents['B']);
					break;
			}?>
<div class="btn-group">
					<div class="btn-group">
							<button class="btn dropdown-toggle" data-toggle="dropdown" ><i class="icon-cog"></i><span class="caret"></span></button>
							
							<ul class="dropdown-menu">
							<?php foreach($actions as $action):?>
								<?php 	$cmd =  array('User'=>array('timestamp'=>time(),'actor'=>$login['User']['id'],'id'=>$user['User']['id'],'status'=>$action['value'],'action'=>$action['action']));
										$cmd =   base64_encode(json_encode($cmd));
										$rst =  array('User'=>array('timestamp'=>time(),'actor'=>$login['User']['id'],'id'=>$user['User']['id'],'status'=>'reset','action'=>null));
										$rst =   base64_encode(json_encode($rst));
								?>
									<li><a href="#" class="action-cmd action-<?php echo $action['action']; ?>" data-cmd="<?php echo $cmd; ?>"><i class="<?php echo $action['class']; ?>"></i> <?php echo $action['label']?></a></li>	
							<?php endforeach;?>
						 <li><a href="#" class="action-cmd action-reset" data-cmd="<?php echo $rst; ?>"><i class="icon-lock"></i> Reset password</a></li>
							
						</ul>
					</div>
				</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php 
		echo $this->Form->create('User',array('action'=>'status'));
		echo $this->Form->input('cmd',array('type'=>'hidden','id'=>'user-cmd'));
		echo $this->Form->end();
	?>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	</div>
</div>
<!--MODAL -->
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
