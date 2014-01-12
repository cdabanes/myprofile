$(document).ready(function(){
	var logInW;
	$(document).bind('init',function(){
		//Initial homepage animation		
		logInW =  $('.login-input').css('width');
		$('#home-brief,#home-user').fadeIn();
		$('#login-username').focus();
		$('.login-input').css('width',logInW);
	});
	$('#login').click(function(e){
		var form = $(this).parents('form:first');
		var self =  $(this);
		var addon = form.find('.add-on');
		//Validate login
		if(form[0].checkValidity()){			
			//Submit data for account creation
			form.ajaxSubmit({
				beforeSend:function(){
					self.attr("disabled","disabled");
					$('.login-input').css('width','0px');
					$(addon).find('i').removeAttr('class').addClass('icon-refresh').addClass('rotating');
				},
				success:function(data){
					self.removeAttr("disabled");
					addon.find('i').addClass(data?'icon-ok':'icon-remove').removeClass('icon-refresh').removeClass('rotating');
					if(!data){
						$('#login-password').val('');
						$('#login-username').select().focus();
						$('.login-input').css('width',logInW);
					}else{
						$('#home-login').fadeOut();
						$('#register-user').slideUp('slow');
						$('#profile').attr('href',$('#profile').attr('href')+data.User.username);
						$('.username').text(data.User.info.full_name);
						$('#welcome').slideDown('slow');
					}
				},
			});
		}
	});
	$('#login-username').change(function(){
		var self  =  $(this);
		var addon = self.parents('form:first').find('.add-on');
		addon.find('i').removeAttr('class').addClass('icon-user');
	});
	$('#register').click(function(e){
		var form = $(this).parents('form:first');
		var self =  $(this);		
		if(form[0].checkValidity()){			
			form.ajaxSubmit({
				beforeSend:function(){
					$('#alert-msg').slideUp();
					$('#create-header').text($('#create-header').attr('data-load-text'));
					self.attr("disabled","disabled");
				},
				success:function(){
					form.ajaxSubmit({
						url:'users/add',
						success:function(data){
							form[0].reset();
							self.removeAttr("disabled");
							$('#home-register').slideToggle(); $('#user-details').slideToggle();
						}
					});
					
				}
			});
		}else{
			$('#alert-msg').slideDown();
		}
	});
	$('#password').keyup(function(){
		$('#confirm-password').attr('pattern',$(this).val());
	});
	$('#confirm').click(function(e){
		var form = $(this).parents('form:first');
		var self =  $(this);		
		if(form[0].checkValidity()){
			form.ajaxSubmit({
				beforeSend:function(){
					$('#confirm-header').text($('#confirm-header').attr('data-load-text'));
					self.attr("disabled","disabled");
				},
				success:function(data){
					data =  $.parseJSON(data);
					$('#user-details').slideToggle(); $('#thank-you').slideToggle();
					self.removeAttr("disabled");
				}
			});
		}
	});
	$('#alert-msg .close').click(function(){
		var form = $(this).parents('form:first');
		form.find('input,select,button').removeAttr('disabled');
		$('#alert-msg').slideUp();
	});
	$('#birthday').focus(function(){$(this).attr('placeholder','yyyy-mm-dd');}).blur(function(){$(this).attr('placeholder','Birthday');});
	$('#user-type').change(function(){
		var form = $(this).parents('form:first');
		var action, model;
		switch($(this).val()){
			case 'E': action =  'employees/add'; model='Employee'; break;
			case 'S': action =  'students/add'; model='Student'; break;
			case 'D': action =  'developers/add'; model='Developer'; break;
		}
		form.attr('action',action);
		form = $('#user-details');
		switch($(this).val()){
			case 'E': action =  'employees/confirm'; model='Employee'; break;
			case 'S': action =  'students/confirm'; model='Student'; break;
			case 'D': action =  'developers/confirm'; model='Developer'; break;
		}
		form.find('.user-type-title').text(model);
		form.attr('action',action);
		form =  $('#home-register,#user-details');
		$.each(form.find('input,select'),function(i,o){
			var vname = $(o).attr('vname');
			if(vname){
				vname =  vname.replace('%', model);
				vname =  vname.replace('x', model.toLowerCase());
				$(o).attr('name', vname);
			}
		});
	});
	$('#username').blur(function(){
		var self  =  $(this);
		var username = self.val();
		var addon = self.parent().find('.add-on');
		if(username){
			//Validate username availability
			$.ajax({
				type:'POST',
				url:'users/check',
				data:{'data':{'User':{'username':username}}},
				beforeSend:function(){
					self.attr('disabled','disabled');				
					$('#register').attr('disabled','disabled');				
					addon.find('i').removeAttr('class').addClass('icon-refresh').addClass('rotating');
				},
				success:function(data){
					data = $.parseJSON(data);
					self.removeAttr('disabled');
					addon.find('i').addClass(!data.result?'icon-ok':'icon-remove').removeClass('icon-refresh').removeClass('rotating');
					if(data.result){
						self.val('').focus();
					}else{
						$('#register').removeAttr('disabled');
					}
				}
			});
		}else{
			//Reset ui
			addon.find('i').removeAttr('class').addClass('icon-user');
		}
	});
	//Initialize page
	$(document).trigger('init');
});