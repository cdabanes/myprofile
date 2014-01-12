<?php $this->Html->script(array('pop-form','biz/profile'),array('inline'=>false)); ?>

<?php $positions = array('Secretary'=>'Secretary','Officer'=>'Officers');?>
<?php $ranks = array(
						'Chairperson'=>'Chairperson','President'=>'President',
						'SVPAdministration'=>'Senior VP for Administration',
						'SVPFinance'=>'Senior VP for Finance',
						'AFO'=>'Administraive Finance Officer',
						'BO'=>'Budget Officer',
						'PO'=>'Purchasing Officer',
					);
?>
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name users">
								 <?php echo $this->Html->link( 'Profile','#');  ?>							
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="span6 text-right">
			</div>
		</div>
	</div>
 </div>


<div class="row-fluid">
	<div class="span12">
		<div class="users view">
			<div class="user-profile" >
			
				<div  class="btn btn-primary pull-left profile-pic" id="upload_btn">
					<i class="icon-camera"></i>
					<?php echo $this->Html->image('/'.($user['User']['username']).'/profile_pic/',array('width'=>'100px'));?>
				</div>

				<div class="pull-left basic-info" >
					<h3 class="user-fullname">
						<?php echo $user[$model]['full_name'] ?>
					</h3>
					<ul class="user-info">
						<li class="id_no"><i class="icon-user"></i> 
							<span>
								<?php 
									switch($model){
										case 'Employee': echo $user[$model]['employee_no']; break;
										case 'Student': echo $user[$model]['student_no']; break;
										case 'Developer': echo $user[$model]['developer_no']; break;
									}
								?>
							</span>
						</li>
						<li class="basic_info">
							<i class="icon-gift"></i>
							<span>
								<?php echo date('M d,Y', strtotime($user[$model]['birthday'])); ?>
								<?php echo $user[$model]['gender']=='M'?'Male':'Female'; ?>
							</span>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div><hr />
				<div class="row-fluid">
					<section class="span6 well profile-section">
						<div class="section-btn pull-right">
							<button class="btn btn-mini pop" data-toggle="popover" data-placement="left" title="" data-original-title="Add Affiliation" id='AddAffiliation'>
								<i class="icon-plus"></i>
							</button>
						</div>
						<!--Pop-over Form-->
						<?php echo $this->Form->create($model.'Affiliation',array('action'=>'add','class'=>'pop-form'));?>
				
							<?php echo $this->Form->input('office',array('options'=>'','empty'=>'Select','class'=>'w100 pop-tree',
								'data-source'=>'http://localhost/accounting/organizations/requestChildren',
								'data-parent'=>'1',
								'data-level'=>'1',
							));?>
							
							<?php echo $this->Form->input('position',array('options'=>$positions,'empty'=>'Select','class'=>'w100'));?>
							<?php echo $this->Form->input('rank',array('options'=>$ranks,'empty'=>'Select','class'=>'w100'));?>
							<?php echo $this->Form->input('employed_date',array('placeholder'=>'Start','maxlength'=>4,'class'=>'input-mini','div'=>false));?>
							<?php echo $this->Form->input('esp',array('placeholder'=>'End','class'=>'input-mini','maxlength'=>4,'label'=>false,'div'=>false));?>
							<div class="w100 hide">
								<?php echo $this->Form->input('employee_id',array('type'=>'text','value'=>$user[$model]['id'],'div'=>false));?>
								<?php echo $this->Form->input('key',array('value'=>'AFFIL','div'=>false));?>
								<?php echo $this->Form->input('value',array('class'=>'value','div'=>false));?>
								<?php echo $this->Form->input('type',array('value'=>'D','div'=>false));?>
							</div>
							
							<div class='text-center'>
								<button class='btn btn-primary pop-save' type="submit">Save</button>
								<button class='btn pop-cancel' type="reset">Cancel</button>
							</div>
						<?php echo $this->Form->end();?>
						<!--End-->
						
						<h4 class="section-title">Affiliations</h4>
						
						<ul class="affilations-list">
							<?php if(count($user[$model.'Affiliation'])):?>
								<?php foreach($user[$model.'Affiliation'] as $aff):?>
									<?php if($aff['type']=='D'):?>
										<?php $details =  json_decode($aff['value'],true);?>
										<li class="affliation">
											<span class="organzation"><?php echo $details['organization']?></span> - <span class="title"><?php echo $details['title']?></span>
											<div class="membership">
												Since <span class="since"><?php echo $details['since']?></span> - <?php echo (int)$aff['esp']==(int)date('Y') ? 'Present':(int)$aff['esp']; ?>
											</div>
										</li>
									<?php endif;?>
								<?php endforeach;?>
							<?php else:?>
							<li class="no-affliation muted">
								No affiliations found.
							</li>
							<?php endif;?>
						</ul>
					</section>
					<section class="span6 well profile-section">
						<div class="section-btn pull-right">
							<button class="btn btn-mini">
								<i class="icon-plus"></i>
							</button>
						</div>
						<h4 class="section-title">Applications</h4>
						<?php $apps =  array(
										array('name'=>'Application 1','url'=>'#'),
										array('name'=>'Application 2','url'=>'#'),
										array('name'=>'Application 3','url'=>'#'),
										array('name'=>'Application 4','url'=>'#'),
										array('name'=>'Application 5','url'=>'#'),
						);?>
						<ul class="apps-list">
							<?php if(isset($apps)):?>
								<?php foreach($apps as $app):?>
									<li class="application">
										<a href="<?php echo $app['url'];?>">
											<span class="app-name"><?php echo $app['name'];?></span>
										</a>
									</li>
								<?php endforeach;?>
							<?php else:?>	
									<li class="no-application muted">
										No applications found.
									</li>
							<?php endif;?>
						</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
