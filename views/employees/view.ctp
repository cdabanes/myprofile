<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name employees">
								 <?php echo $this->Html->link( 'Employees',
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
								<li><?php echo $this->Html->link(__('Employee Affiliations', true), array('controller' => 'employee_affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Employee Contacts', true), array('controller' => 'employee_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Teaching Loads', true), array('controller' => 'teaching_loads', 'action' => 'index')); ?> </li>
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
<div class="employees view">
<h2><?php  __('Employee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['employee_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['birthday']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Employee Affiliations');?></h3>
	<?php if (!empty($employee['EmployeeAffiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['EmployeeAffiliation'] as $employeeAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employeeAffiliation['id'];?></td>
			<td><?php echo $employeeAffiliation['employee_id'];?></td>
			<td><?php echo $employeeAffiliation['key'];?></td>
			<td><?php echo $employeeAffiliation['value'];?></td>
			<td><?php echo $employeeAffiliation['esp'];?></td>
			<td><?php echo $employeeAffiliation['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employee_affiliations', 'action' => 'view', $employeeAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employee_affiliations', 'action' => 'edit', $employeeAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employee_affiliations', 'action' => 'delete', $employeeAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employeeAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee Affiliation', true), array('controller' => 'employee_affiliations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Employee Contacts');?></h3>
	<?php if (!empty($employee['EmployeeContact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Employee Contactscol'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['EmployeeContact'] as $employeeContact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employeeContact['id'];?></td>
			<td><?php echo $employeeContact['employee_id'];?></td>
			<td><?php echo $employeeContact['key'];?></td>
			<td><?php echo $employeeContact['value'];?></td>
			<td><?php echo $employeeContact['type'];?></td>
			<td><?php echo $employeeContact['employee_contactscol'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employee_contacts', 'action' => 'view', $employeeContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employee_contacts', 'action' => 'edit', $employeeContact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employee_contacts', 'action' => 'delete', $employeeContact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employeeContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee Contact', true), array('controller' => 'employee_contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teaching Loads');?></h3>
	<?php if (!empty($employee['TeachingLoad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['TeachingLoad'] as $teachingLoad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teachingLoad['id'];?></td>
			<td><?php echo $teachingLoad['employee_id'];?></td>
			<td><?php echo $teachingLoad['subject_id'];?></td>
			<td><?php echo $teachingLoad['section_id'];?></td>
			<td><?php echo $teachingLoad['esp'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teaching_loads', 'action' => 'view', $teachingLoad['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teaching_loads', 'action' => 'edit', $teachingLoad['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teaching_loads', 'action' => 'delete', $teachingLoad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teachingLoad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teaching Load', true), array('controller' => 'teaching_loads', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
</div>
</div>