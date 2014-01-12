<?php $SCHOOL = array(	'name'=>'Holy Trinity Academy',
						'address'=>'Calabash Road, Balic-Balic, Sampaloc, Manila',
						'since'=>1937,
				);
?>
<div class="profile_banner">
	<div class="profile-banner-inner-overlay">
		<div class="profile-banner-img-wrap thumbnail">
		<?php  echo $this->Html->image('trademarks/student_photo.jpg', array('id'=> 'school_logo', 'alt' =>  $SCHOOL['name'])); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="span3 profile-picture-wrap " >
				<?php  echo $this->Html->image('trademarks/school_logo.png', array('id'=> 'school_logo', 'alt' =>  $SCHOOL['name'])); ?>
			</div>	
			<div class="span9 profile-info-wrap">
				<div class="profile_info">
					<h2 id="school_name"><?php echo $SCHOOL['name']; ?></h2>
					<address id="school_address"><?php echo $SCHOOL['address']; ?></address>
					<span>Since <time id="school_establish"><?php echo $SCHOOL['since']; ?></time> </span>
				</div>
			</div>
		</div>
	</div>	
</div>

		