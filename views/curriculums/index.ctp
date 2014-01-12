<script>
	$(document).ready(function(){
		$('#CurriculumsTable').dataTable({
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
							<div class="module-name curriculums">
									 <?php echo $this->Html->link( 'Curriculums',
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
							<li><?php echo $this->Html->link(__('Departments', true), array('controller' => 'departments', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('Section Affiliations', true), array('controller' => 'section_affiliations', 'action' => 'index')); ?> </li>
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

<div class="sub-content-container">
	<div class="w90 center">
		<table class="table table-striped table-condensed table-hover table-bordered tablesorter display" id="CurriculumsTable">
			<thead>
				<tr>
					<th><a>ID</a></th>
					<th><a>Department ID</a></th>
					<th><a>Name</a></th>
					<th><a>ESP</a></th>
					<th class="w5">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				foreach ($curriculums as $curriculum):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr<?php echo $class;?>>
					<td><?php echo $curriculum['Curriculum']['id']; ?></td>
					<td><?php echo $curriculum['Department']['id']; ?></td>
					<td><?php echo $curriculum['Curriculum']['name']; ?></td>
					<td><?php echo $curriculum['Curriculum']['esp']; ?></td>
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
			</tbody>
		</table>
	</div>
	<!-- Modal -->
	<?php echo $this->Form->create('Curriculum',array('action'=>'add','name'=>'modalForm','model'=>'curriculums'));?>
	<div id="intent-modal" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
			<h3 id="myModalLabel">Add Curriculum</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<?php echo $this->Form->input('department_id',array('class'=>'span2','div'=>false));?>	
				<?php echo $this->Form->input('esp',array('class'=>'span2','label'=>'ESP','div'=>false));?>	
			</div>
			<div class="row-fluid">
				<?php echo $this->Form->input('name',array('class'=>'span7','div'=>false));?>	
			</div>
		</div>
		<?php echo $this->Form->end();?>
		<div class="modal-footer">
			<button class="btn btn-primary intent-save" type="button">Save</button>
			<button class="btn intent-cancel" data-dismiss="modal" aria-hidden="true" type="button">Cancel</button>
		</div>
	</div>
	
</div>
