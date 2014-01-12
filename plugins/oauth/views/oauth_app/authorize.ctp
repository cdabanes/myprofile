<style type="text/css">
	.bgGreen{
		background-color:green;
	}
</style>
<?php echo $this->Html->css('plugins/oauth');?>
<div class="oauth-container">
	<h2><?php echo $app['application_title']; ?></h2><hr/>
	<div class="row-fluid">
		<div class="span7 border-right" >
			<h3><?php echo $app['application_descr']; ?></h3>
			<div class="apps">
				<ul>
					<li>
						<div class="app-icon span1">
							<i class="icon-info-sign"></i>
						</div>
						<div class='app-info span11'>
							<h5>Access Basic Information</h5>
							<span>This app can access your basic information such as fullname,grades,birthday.</span>
						</div>
					</li>
					<li>
						<div class="app-icon span1">
							<i class="icon-group"></i>
						</div>
						<div class='app-info span11'>
							<h5>Access Affiliation(s)</h5>
							<span>This app can access your basic affiliations such as organization,membership,position and ranks.</span>
						</div>
					</li>

				</ul>
			</div>
		</div>
		<div class="span5">
			<h3>Do you want to authorize this app?</h3>
			<?php echo $this->Form->create('OAuth',array('url'=>'/oauth/authorize?oauth_token='.$_GET['oauth_token']));?>
			<button type="submit" class="btn btn-primary" > Authorize </button>
			<button type="reset" class="btn" onclick="javascript:window.close()" > Deny </button>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>