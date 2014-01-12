<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name staffs">
								 <?php echo $this->Html->link( 'Staffs',
															array('action' => 'index')
														);  ?>							</div>
						</div>
					</div>
					<div class="span3">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-plus icon-white')).
														$this->Html->tag('span', 'CREATE', array('class' => 'action-label')),
														array('action' => 'add'), array('escape' => false,'class'=>'btn btn-medium btn-info btn-block animate')
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
<div class="span6">
<div class="staffs view">
<h2><?php  __('Staff');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($staff['User']['id'], array('controller' => 'users', 'action' => 'view', $staff['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($staff['Position']['name'], array('controller' => 'positions', 'action' => 'view', $staff['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['birthday']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $staff['Staff']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Staff Affiliations');?></h3>
	<?php if (!empty($staff['StaffAffiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Staff Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($staff['StaffAffiliation'] as $staffAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $staffAffiliation['id'];?></td>
			<td><?php echo $staffAffiliation['staff_id'];?></td>
			<td><?php echo $staffAffiliation['key'];?></td>
			<td><?php echo $staffAffiliation['value'];?></td>
			<td><?php echo $staffAffiliation['esp'];?></td>
			<td><?php echo $staffAffiliation['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'staff_affiliations', 'action' => 'view', $staffAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'staff_affiliations', 'action' => 'edit', $staffAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'staff_affiliations', 'action' => 'delete', $staffAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $staffAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff Affiliation', true), array('controller' => 'staff_affiliations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Staff Contacts');?></h3>
	<?php if (!empty($staff['StaffContact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Staff Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($staff['StaffContact'] as $staffContact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $staffContact['id'];?></td>
			<td><?php echo $staffContact['staff_id'];?></td>
			<td><?php echo $staffContact['key'];?></td>
			<td><?php echo $staffContact['value'];?></td>
			<td><?php echo $staffContact['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'staff_contacts', 'action' => 'view', $staffContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'staff_contacts', 'action' => 'edit', $staffContact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'staff_contacts', 'action' => 'delete', $staffContact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $staffContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff Contact', true), array('controller' => 'staff_contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
</div>
</div>