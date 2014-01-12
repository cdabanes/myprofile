<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name families">
								 <?php echo $this->Html->link( 'Families',
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
								<li><?php echo $this->Html->link(__('Family Affiliations', true), array('controller' => 'family_affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Family Contacts', true), array('controller' => 'family_contacts', 'action' => 'index')); ?> </li>
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
<div class="families view">
<h2><?php  __('Family');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['birthday']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Family Affiliations');?></h3>
	<?php if (!empty($family['FamilyAffiliation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Family Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Family Affiliationscol'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($family['FamilyAffiliation'] as $familyAffiliation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $familyAffiliation['id'];?></td>
			<td><?php echo $familyAffiliation['family_id'];?></td>
			<td><?php echo $familyAffiliation['key'];?></td>
			<td><?php echo $familyAffiliation['value'];?></td>
			<td><?php echo $familyAffiliation['esp'];?></td>
			<td><?php echo $familyAffiliation['type'];?></td>
			<td><?php echo $familyAffiliation['family_affiliationscol'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'family_affiliations', 'action' => 'view', $familyAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'family_affiliations', 'action' => 'edit', $familyAffiliation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'family_affiliations', 'action' => 'delete', $familyAffiliation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $familyAffiliation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family Affiliation', true), array('controller' => 'family_affiliations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Family Contacts');?></h3>
	<?php if (!empty($family['FamilyContact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Family Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($family['FamilyContact'] as $familyContact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $familyContact['id'];?></td>
			<td><?php echo $familyContact['family_id'];?></td>
			<td><?php echo $familyContact['key'];?></td>
			<td><?php echo $familyContact['value'];?></td>
			<td><?php echo $familyContact['type'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'family_contacts', 'action' => 'view', $familyContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'family_contacts', 'action' => 'edit', $familyContact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'family_contacts', 'action' => 'delete', $familyContact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $familyContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family Contact', true), array('controller' => 'family_contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
</div>
</div>