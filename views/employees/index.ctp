
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name employees">
									 <?php echo $this->Html->link( 'Employees',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
					<div class="span3 upAccount">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-chevron-left')).
													$this->Html->tag('span', 'BACK', array('class' => 'action-label')),
													'/pages/apps',array('escape' => false,'class'=>'btn btn-medium tree-back btn-block animate' ,'id'=>'intent-back')
													); ?> 					
					</div>
					<div class="span3">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-plus icon-white')).
														$this->Html->tag('span', 'CREATE', array('class' => 'action-label')),
														array('action' => 'add'), array('escape' => false,'class'=>'btn btn-medium btn-primary btn-block animate' ,'id'=>'intent-create')
													);  ?>					</div>
					
				</div>
			</div>
			<div class="span3 pull-right">
				 <div id="simple-root"></div> 
			</div>
		</div>
	</div>
 </div>
<div class="sub-content-container">
	<div class="w90 center">
		<div class="row-fluid">
			<div class="w90 center">
						<table class="table table table-striped table-bordered  table-condensed RECORD tablesorter canvasTable" id="EmployeeTable" model="Employee">
			<thead>
				<tr>
																								<th class="w10 text-center"><a >Employee No</a></th>
																				<th class="w10 text-center"><a >First Name</a></th>
																				<th class="w10 text-center"><a >Middle Name</a></th>
																				<th class="w10 text-center"><a >Last Name</a></th>
																				<th class="w10 text-center"><a >Birthday</a></th>
																				<th class="w10 text-center"><a >Gender</a></th>
																																<th class="actions w5"><a >Actions</a></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span data-field='Employee.employee_no'></span></td>
					<td><span data-field='Employee.first_name'></span></td>
					<td><span data-field='Employee.middle_name'></span></td>
					<td><span data-field='Employee.last_name'></span></td>
					<td><span data-field='Employee.birthday'></span></td>
					<td><span data-field='Employee.gender'></span></td>
					<td class="actions">
						<div class="btn-group">
							<div class="btn-group btn-center">
								<button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i><span class="caret"></span></button>
								<ul class="dropdown-menu">
										
												 <li><a href="#intent-modal" data-toggle="modal"  class="action-view view-employee_affiliations"><i class="icon-eye-open"></i> Employee Affiliations</a></li>
												
												 <li><a href="#intent-modal" data-toggle="modal"  class="action-view view-employee_contacts"><i class="icon-eye-open"></i> Employee Contacts</a></li>
												
												 <li><a href="#intent-modal" data-toggle="modal"  class="action-view view-teaching_loads"><i class="icon-eye-open"></i> Teaching Loads</a></li>
																		 
								  <li><a href="#" class="action-delete"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
			
						</div>
		</div>

	</div>
</div>
<?php echo $this->Form->create('Employee',array('name'=>'modalForm','action'=>'add','class'=>'form-horizontal', 'model'=> 'employees', 'canvas'=>'#EmployeeCanvasForm'));?>

<div id="intent-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="intent-label" aria-hidden="true">
  <div class="modal-header">
     <h3 id="intent-label"><span class="intent-text">Create </span><span class="intent-object">Employee</span></h3>
  </div>
  <div class="modal-body">
  

<div class="row-fluid">
<div class="employees form span12">

		<?php echo $this->Form->input('id',array('role'=>'primary-key'));?>
		<div class="row-fluid">
			<label for="EmployeeFullName">Full Name</label>
			<?php echo $this->Form->input('first_name',array('placeholder'=>'First Name','required'=>true,'label'=>false,'div'=>false,'class'=>'span3'));?>
			<?php echo $this->Form->input('middle_name',array('placeholder'=>'Middle Name','label'=>false,'div'=>false ,'class'=>'span3'));?>
			<?php echo $this->Form->input('last_name',array('placeholder'=>'Last Name','required'=>true,'label'=>false,'div'=>false,'class'=>'span3'));?>
		</div>
		<div class="row-fluid">
			<label for="EmployeeEmployeeNo">Employee Info</label>
			<?php echo $this->Form->input('employee_no',array('placeholder'=>'Employee No','class'=>'span3','required'=>true,'label'=>false,'div'=>false));?>
			<?php echo $this->Form->input('birthday',array('type'=>'text','placeholder'=>'Birthday','class'=>'datepicker span3','required'=>true,'label'=>false,'div'=>false));?>
			<?php echo $this->Form->input('gender',array('options'=>array('M'=>'Male','F'=>'Female'),'empty'=>'Select gender','placeholder'=>'Gender' ,'class'=>'span3','required'=>true,'label'=>false,'div'=>false));?>
		</div>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed RECORD tablesorter canvasTable" id="EmployeeAffiliationTable" model="EmployeeAffiliation">
				<caption class="caption-bordered">Employee Affiliations</caption>
				<thead>
				<tr>
						<th><?php __('Employee Id'); ?></th>
		<th><?php __('Key'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Esp'); ?></th>
		<th><?php __('Type'); ?></th>
					<th class="actions">Actions</th>
				</tr>
				</thead>
				<tbody class="hide">
					<tr>
								<td><span data-field='EmployeeAffiliation.employee_id'></span></td>
		<td><span data-field='EmployeeAffiliation.key'></span></td>
		<td><span data-field='EmployeeAffiliation.value'></span></td>
		<td><span data-field='EmployeeAffiliation.esp'></span></td>
		<td><span data-field='EmployeeAffiliation.type'></span></td>
						<td>
						<div class="btn-group">
							<div class="btn-group btn-center">
								<button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i><span class="caret"></span></button>
								<ul class="dropdown-menu">
									  <li><a  href="#employee-affiliations-modal" data-toggle="modal" data-dismiss="modal" class="action-add"><i class="icon-plus"></i> Add</a></li>
									 <li><a  href="#employee-affiliations-modal" data-toggle="modal" data-dismiss="modal" class="action-edit"><i class="icon-edit"></i> Edit</a></li>
									 <li><a href="#" class="action-delete"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
						</div>
						</td>
					</tr>
				</tbody>
					
				<tfoot>
					<tr class="no-details">
						<td colspan="6">
							<div class="well text-center">
								<button class="btn  btn-medium action-btn"  id="add-employee-affiliations" href="#employee-affiliations-modal" data-toggle="modal" data-dismiss="modal"><i class="icon-plus"></i> Employee Affiliations</button>
								<div class="muted">No Employee Affiliations found, click to add.</div>
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
	</div>
</div>
	
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary intent-save" type="submit">Save</button>
    <button class="btn intent-cancel" data-dismiss="modal" aria-hidden="true" type="submit">Cancel</button>
  </div>
  
</div>
<?php echo $this->Form->end();?>
<!-- CANVASFORM -->
<?php echo $this->Form->create('Employee',array('action'=>'index',
															'class'=>'canvasForm',
															'id'=>'EmployeeCanvasForm',
															'model'=> 'Employee',
															'canvas'=>'#EmployeeTable'
														)
											);?>
<?php echo $this->Form->end();?>

	<?php echo $this->Form->create('EmployeeAffiliation',array('name'=>'EmployeeAffiliationModal','action'=>'add','class'=>'form-horizontal', 'model'=> 'employeeAffiliations', 'canvas'=>'#EmployeeAffiliationCanvasForm',
																	'inputDefaults' => array( 	'label'=>array('class'=>'control-label'),
																								'div'=>array('class'=>'control-group')
																							)
																	)
											);?>

		<div id="employee-affiliations-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="intent-label" aria-hidden="true">
			<div class="modal-header">
				<h3 id="intent-label"><span class="intent-text">Create </span><span class="intent-object">EmployeeAffiliation</span></h3>
			</div>
			<div class="modal-body">
  
				<div class="row-fluid">
					<div class="employeeAffiliations form span12">
						<?php echo $this->Form->input('id',array('placeholder'=>'Id','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
						<?php echo $this->Form->input('employee_id',array('type'=>'hidden','placeholder'=>'Employee Id','role'=>'foreign-key','between'=>'<div class="controls">','after'=>'</div>' ,'class'=>'span11'));?>
						<?php echo $this->Form->input('organi',array('type'=>'hidden','id'=>'org','div'=>false));?>
						
						<?php echo $this->Form->input('office',array('options'=>$organizations,'empty'=>'Select','class'=>'w60 pop-tree'));?>
							<?php echo $this->Form->input('position',array('options'=>array('Supervisor'=>'Supervisor'),'empty'=>'Select','class'=>'w40'));?>
							<?php echo $this->Form->input('rank',array('options'=>array('Vice president'=>'Vice president'),'empty'=>'Select','class'=>'w40'));?>
							<?php echo $this->Form->input('employed_date',array('placeholder'=>'Start','maxlength'=>4,'class'=>'input-mini','div'=>false));?>
							<?php echo $this->Form->input('esp',array('placeholder'=>'End','class'=>'input-mini','maxlength'=>4,'label'=>false,'div'=>false));?>
							<div class="w100 hide">
								<?php echo $this->Form->input('key',array('value'=>'AFFIL','div'=>false));?>
								<?php echo $this->Form->input('value',array('class'=>'value','div'=>false));?>
								<?php echo $this->Form->input('type',array('value'=>'D','div'=>false));?>
							</div></div>		
				</div>
			</div>
			 <div class="modal-footer">
				<button class="btn btn-primary intent-save" type="submit">Save</button>
				<button class="btn intent-cancel" data-dismiss="modal" aria-hidden="true" type="submit">Cancel</button>
			 </div>
		</div>
<?php echo $this->Form->end();?>
<?php echo $this->Form->create('EmployeeAffiliation',array('action'=>'index',
															'class'=>'canvasForm',
															'id'=>'EmployeeAffiliationCanvasForm',
															'model'=> 'EmployeeAffiliation',
															'canvas'=>'#EmployeeAffiliationTable'
														)
											);?>
<?php echo $this->Form->input('employee_id',array('type'=>'hidden','value'=>null,'role'=>'foreign-key')); ?>
<?php echo $this->Form->end();?>
<?php echo $this->Html->script(array('ui/uiTable1.1','utils/canvasTable'),array('inline'=>false));?>
<?php echo $this->Html->script('biz/employees',array('inline'=>false));?>