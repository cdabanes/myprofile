<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name relations">
								 <?php echo $this->Html->link( 'Relations',
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
								<li><?php echo $this->Html->link(__('Relationships', true), array('controller' => 'relationships', 'action' => 'index')); ?> </li>
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
<div class="relations view">
<h2><?php  __('Relation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $relation['Relation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $relation['Relation']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="span6">
<div class="related">
	<h3><?php __('Related Relationships');?></h3>
	<?php if (!empty($relation['Relationship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Primary'); ?></th>
		<th><?php __('Auxiliary'); ?></th>
		<th><?php __('Relation Id'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($relation['Relationship'] as $relationship):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $relationship['id'];?></td>
			<td><?php echo $relationship['primary'];?></td>
			<td><?php echo $relationship['auxiliary'];?></td>
			<td><?php echo $relationship['relation_id'];?></td>
			<td><?php echo $relationship['esp'];?></td>
			<td><?php echo $relationship['modified'];?></td>
			<td><?php echo $relationship['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'relationships', 'action' => 'view', $relationship['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'relationships', 'action' => 'edit', $relationship['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'relationships', 'action' => 'delete', $relationship['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $relationship['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Relationship', true), array('controller' => 'relationships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
</div>
</div>