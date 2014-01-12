<?php $SCHOOL = array(	'name'=>'Philippine College of Criminology',
						'address'=>'Calabash Road, Balic-Balic, Sampaloc, Manila',
						'since'=>1937,
				);?>
<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span8">		
				<div class="row-fluid">
					<div class="span7 module homepage">
						<div class="module-wrap">
							<div class="module-name ">
									 <?php echo $this->Html->link( $SCHOOL['name'],
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
					<div class="span3">
						</div>
				</div>
			</div>
		</div>
	</div>
	
 </div>

<div class="row-fluid">
	<div class="text-center span3 offset4" style="margin-top:3%">
	<?php echo $this->Form->create('User',array('action'=>'login','id'=>'home-login' ,'class'=>'text-left')); ?>
				<h4 class="lead">Account Login</h4>
				<hr />
					<div class="input-prepend ">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" id="login-username" placeholder="Username" class="span12" name="data[User][username]" required />
						
					</div>
						<div class="input-prepend input-append">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" id="login-password" placeholder="Password" class="span10"  name="data[User][password]"  required />
						<button type="submit" class="btn btn-medium btn-primary " id="login">&nbsp;GO</button>
					</div>
					<div class="text-right">
						
						
					</div>
					
				<?php echo $this->Form->end(); ?>
	</div>
</div>
