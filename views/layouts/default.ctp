<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php __('Simplified Profile'); ?>
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
  
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css(array('cssRed/bootstrap','cssRed/simple','cssRed/template','cssRed/profile','cssRed/modal','font-awesome','jquery_ui'));
			echo '<!--[if IE 7]>';
			echo $this->Html->css(array('font-awesome-ie7.min'));
			echo '<![endif]-->';
			echo $this->Html->css(array('profile/banner','profile/home','profile/navigation','profile/pagination'));
			echo $this->Html->css(array('card/info_card','effects/index'));
			echo $this->Html->css(array('ss/ssMetrics','ss/ssInterface','record/recordDatagrid','ui/uiIScroll'));
			echo $this->Html->css(array('advancedTable'));
		?>
		<style>
			.pBottom{
				padding-bottom:20px;
			}
		</style>

	</head>
	<body class="paper" >
	<!--Side Navigation-->
	<nav class="main-nav animate" id="main-nav">
		<?php echo $this->Html->link('Home',array('controller'=>'pages','action'=>'display','home')); ?>
		<?php echo $this->Html->link('Settings',array('controller'=>'account_charts','action'=>'index')); ?>
		<?php echo $this->Html->link('FAQ',array('controller'=>'ap_vouchers','action'=>'index')); ?>
		<?php echo $this->Html->link('Trademarks',array('controller'=>'check_vouchers','action'=>'index')); ?>
	</nav>
		<div class="page-wrap animate">
			<!--Header-->
			<div class="header-container">
				<header class="main-header animate">
					<a href="#main-nav" class="open-menu " ><i class=" icon-reorder icon-white"></i></a>
					<a href="#" class="close-menu "><i class=" icon-reorder icon-white"></i></a>
					<span class="simpilified-solution-header-inner ">Simplified Profile</span>
				</header>	
			</div>
			<!--CONTENT-->
			<div class="content">  
				<?php //echo $this->Session->flash(); ?>
				<?php echo $content_for_layout; ?>


				<!--Footer-->
				<!--<div class="footer-container">
					<footer>
						The SimplifiedSolutions, Inc. &copy; <?php echo date('Y'); ?> 
					</footer>
				</div>
				-->
				<?php
					//echo $this->element('sql_dump'); 
					echo $this->Html->script(array('jquery','jquery_ui','bootstrap','navigation','intents', 'jqueryForm','utils/advancedtable'));
					echo $this->Html->script(array('datePicker'));
					echo $scripts_for_layout;
				?>
			<!--END CONTENT-->
			</div>
		</div>
	</body>
</html>