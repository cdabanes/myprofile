<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name sections">
								 <?php echo $this->Html->link( 'Sections',
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
								<li><?php echo $this->Html->link(__('Levels', true), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Classlists', true), array('controller' => 'classlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Section Affiliations', true), array('controller' => 'section_affiliations', 'action' => 'index')); ?> </li>
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
<div class="sections view">
<h2><?php  __('Section');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($section['Level']['name'], array('controller' => 'levels', 'action' => 'view', $section['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order Index'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['order_index']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Classlists');?></h3>
	<?php if (!empty($section['Classlist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Student Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Classlist'] as $classlist):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $classlist['id'];?></td>
			<td><?php echo $classlist['student_id'];?></td>
			<td><?php echo $classlist['section_id'];?></td>
			<td><?php echo $classlist['esp'];?></td>
			<td><?php echo $classlist['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'classlists', 'action' => 'view', $classlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'classlists', 'action' => 'edit', $classlist['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'classlists', 'action' => 'delete', $classlist['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Classlist', true), array('controller' => 'classlists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Section Affiliations');?></h3>
	<?php if (!empty($section['SectionAffiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Curriculum Id'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['SectionAffiliation'] as $sectionAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sectionAffiliation['id'];?></td>
			<td><?php echo $sectionAffiliation['section_id'];?></td>
			<td><?php echo $sectionAffiliation['curriculum_id'];?></td>
			<td><?php echo $sectionAffiliation['esp'];?></td>
			<td><?php echo $sectionAffiliation['created'];?></td>
			<td><?php echo $sectionAffiliation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'section_affiliations', 'action' => 'view', $sectionAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'section_affiliations', 'action' => 'edit', $sectionAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'section_affiliations', 'action' => 'delete', $sectionAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sectionAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section Affiliation', true), array('controller' => 'section_affiliations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teaching Loads');?></h3>
	<?php if (!empty($section['TeachingLoad'])):?>
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
		foreach ($section['TeachingLoad'] as $teachingLoad):
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