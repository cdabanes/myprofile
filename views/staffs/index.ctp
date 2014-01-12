<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name staffs">
									 <?php echo $this->Html->link( 'Staffs',
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
								<li><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Staff Affiliations', true), array('controller' => 'staff_affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Staff Contacts', true), array('controller' => 'staff_contacts', 'action' => 'index')); ?> </li>
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
						<th><?php echo $this->Paginator->sort('id');?></th>
								<th><?php echo $this->Paginator->sort('user_id');?></th>
								<th><?php echo $this->Paginator->sort('position_id');?></th>
								<th><?php echo $this->Paginator->sort('first_name');?></th>
								<th><?php echo $this->Paginator->sort('middle_name');?></th>
								<th><?php echo $this->Paginator->sort('last_name');?></th>
								<th><?php echo $this->Paginator->sort('birthday');?></th>
								<th><?php echo $this->Paginator->sort('gender');?></th>
											<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($staffs as $staff):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $staff['Staff']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($staff['User']['id'], array('controller' => 'users', 'action' => 'view', $staff['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($staff['Position']['name'], array('controller' => 'positions', 'action' => 'view', $staff['Position']['id'])); ?>
		</td>
		<td><?php echo $staff['Staff']['first_name']; ?>&nbsp;</td>
		<td><?php echo $staff['Staff']['middle_name']; ?>&nbsp;</td>
		<td><?php echo $staff['Staff']['last_name']; ?>&nbsp;</td>
		<td><?php echo $staff['Staff']['birthday']; ?>&nbsp;</td>
		<td><?php echo $staff['Staff']['gender']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $staff['Staff']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $staff['Staff']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $staff['Staff']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $staff['Staff']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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
