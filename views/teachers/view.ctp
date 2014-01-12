<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name teachers">
								 <?php echo $this->Html->link( 'Teachers',
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
		<li><?php echo $this->Html->link(__('Teacher Affiliations', true), array('controller' => 'teacher_affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Teacher Contacts', true), array('controller' => 'teacher_contacts', 'action' => 'index')); ?> </li>
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
<div class="teachers view">
<h2><?php  __('Teacher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($teacher['User']['id'], array('controller' => 'users', 'action' => 'view', $teacher['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['birthday']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Teacher Affiliations');?></h3>
	<?php if (!empty($teacher['TeacherAffiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Teacher Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teacher['TeacherAffiliation'] as $teacherAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teacherAffiliation['id'];?></td>
			<td><?php echo $teacherAffiliation['teacher_id'];?></td>
			<td><?php echo $teacherAffiliation['key'];?></td>
			<td><?php echo $teacherAffiliation['value'];?></td>
			<td><?php echo $teacherAffiliation['esp'];?></td>
			<td><?php echo $teacherAffiliation['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teacher_affiliations', 'action' => 'view', $teacherAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teacher_affiliations', 'action' => 'edit', $teacherAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teacher_affiliations', 'action' => 'delete', $teacherAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacherAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher Affiliation', true), array('controller' => 'teacher_affiliations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teacher Contacts');?></h3>
	<?php if (!empty($teacher['TeacherContact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Teacher Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teacher['TeacherContact'] as $teacherContact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teacherContact['id'];?></td>
			<td><?php echo $teacherContact['teacher_id'];?></td>
			<td><?php echo $teacherContact['key'];?></td>
			<td><?php echo $teacherContact['value'];?></td>
			<td><?php echo $teacherContact['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teacher_contacts', 'action' => 'view', $teacherContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teacher_contacts', 'action' => 'edit', $teacherContact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teacher_contacts', 'action' => 'delete', $teacherContact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacherContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher Contact', true), array('controller' => 'teacher_contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teaching Loads');?></h3>
	<?php if (!empty($teacher['TeachingLoad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Teacher Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teacher['TeachingLoad'] as $teachingLoad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teachingLoad['id'];?></td>
			<td><?php echo $teachingLoad['teacher_id'];?></td>
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