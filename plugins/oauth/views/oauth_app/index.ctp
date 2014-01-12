<div class="actions-container row-fluid animate">
	 <div id="profile-navigation" class="span12 nav-marginTop">		
		<div class="row-fluid">
			<div class="span6">		
				<div class="row-fluid">
					<div class="span4 module">
						<div class="module-wrap">
							<div class="module-name developers">
									 <?php echo $this->Html->link( 'Access Tokens',
															'javascript:void()'
														);  ?>								
							</div>
						</div>
					</div>
						<div class="span3 upAccount">
					 <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'icon-chevron-left')).
													$this->Html->tag('span', 'BACK', array('class' => 'action-label')),
													array('controller'=>'developers','action'=>'tokens','plugin'=>null),array('escape' => false,'class'=>'btn btn-medium tree-back btn-block animate' ,'id'=>'intent-back')
													);  ?>					
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
	<div class="developers  span6 offset3">
		<div class="well m-t-5e">
		<?php if(isset($error)):?>
			
				<h3>Error: Could not create access token</h3>
				<p>
				<i class="icon-bolt"></i>
				<?php echo $error; ?>
				</p>
							
		<?php else:?>
			<h3>Info: Access Token has been created successfully </h3>
			<p >Please take note of the following credentials to access the API.</p>
		<?php
			echo 'CONSUMER ID: <strong>' . $consumer['id'] . '</strong><br />';
			echo 'KEY: <strong>' . $consumer['consumer_key'] . '</strong><br />';
			echo 'SECRET: <strong>' . $consumer['consumer_secret'] . '</strong><br />';
		endif;
		?>
		</div>
	</div>
</div>
