<script>
	$(document).ready(function(){
		$('#CoursesTable').dataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": true,
			"bSort": true,
			"bInfo": true,
			"bScrollCollapse": true,
		});
	});
</script>
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name courses">
									 <?php echo $this->Html->link( 'Courses',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
					<div class="span3">
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-plus icon-white')).
												$this->Html->tag('span', 'CREATE', array('class' => 'action-label')),
												array('action' => 'add'), array('escape' => false,'class'=>'btn btn-medium btn-primary btn-block animate' ,'id'=>'intent-create')
											);  ?>	
					</div>
					<div class="btn-group span3">
						<a class="btn btn-medium btn-block dropdown-toggle" data-toggle="dropdown" href="#">
							<i class=" icon-th-list"></i><span class="action-label">LINKS</span>	
						</a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link(__('Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Levels', true), array('controller' => 'levels', 'action' => 'index')); ?> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>

<div class="sub-content-container">
	<div class="w90 center">
		<table class="table table-striped table-condensed table-hover table-bordered tablesorter display" id="CoursesTable">
			<thead>
				<tr>
					<th><a>ID</a></th>
					<th><a>Curriculum ID</a></th>
					<th><a>Subject ID</a></th>
					<th><a>Level ID</a></th>
					<th><a>Weight Compute</a></th>
					<th><a>Weight Display</a></th>
					<th><a>Tree Index</a></th>
					<th><a>Order Index</a></th>
					<th><a>Has Child</a></th>
					<th><a>Has Parent</a></th>
					<th class="w5"><a>Actions</a></th>
				</tr>
			</thead>
			<?php
			$i = 0;
			foreach ($courses as $course):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $course['Course']['id']; ?></td>
				<td><?php echo $course['Curriculum']['id']; ?></td>
				<td><?php echo $course['Subject']['id']; ?></td>
				<td><?php echo $course['Level']['id']; ?></td>
				<td><?php echo $course['Course']['weight_compute']; ?></td>
				<td><?php echo $course['Course']['weight_display']; ?></td>
				<td><?php echo $course['Course']['tree_index']; ?></td>
				<td><?php echo $course['Course']['order_index']; ?></td>
				<td><?php echo $course['Course']['has_child']; ?></td>
				<td><?php echo $course['Course']['has_parent']; ?></td>
				<td class="actions">
					<div class="btn-group">
						<button class="btn btn-center dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i><span class="caret"></span></button>
						<ul class="dropdown-menu pull-right">
							<li><a href="#" class="action-edit"><i class="icon-edit"></i> Edit</a></li>
							<li><a href="#" class="action-delete"><i class="icon-remove"></i> Delete</a></li>
						</ul>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<!-- Modal -->
	<?php echo $this->Form->create('Course',array('action'=>'add','name'=>'modalForm','model'=>'courses'));?>
	<div id="intent-modal" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
			<h3 id="myModalLabel">Add Course</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<?php echo $this->Form->input('curriculum_id',array('class'=>'span2','div'=>false));?>	
				<?php echo $this->Form->input('subject_id',array('class'=>'span2','div'=>false));?>	
				<?php echo $this->Form->input('level_id',array('class'=>'span2','div'=>false));?>	
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('weight_compute',array('class'=>'span2','label'=>'Wgt Compute','div'=>false));?>	
				<?php echo $this->Form->input('weight_display',array('class'=>'span2','label'=>'Wgt Display','div'=>false));?>	
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('tree_index',array('class'=>'span2','div'=>false));?>	
				<?php echo $this->Form->input('order_index',array('class'=>'span2','div'=>false));?>	
			</div>
			<div class="row-fluid">
				<? echo $this->Form->label('has_child','Has Child');?>
				<?php echo $this->Form->checkbox('has_child', array('hiddenField' => false,'class'=>'mBottom6px'));?>	
				<? echo $this->Form->label('has_parent','Has Parent');?>
				<?php echo $this->Form->checkbox('has_parent', array('hiddenField' => false,'class'=>'mBottom6px'));?>	
			</div>
		</div>
		<?php echo $this->Form->end();?>
		<div class="modal-footer">
			<button class="btn btn-primary intent-save" type="button">Save</button>
			<button class="btn intent-cancel" data-dismiss="modal" aria-hidden="true" type="button">Cancel</button>
		</div>
	</div>
</div>
