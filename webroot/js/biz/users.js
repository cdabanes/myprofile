$(document).ready(function(){
	var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
	$('.modal').css('width', '700px'); //modal size 
	$('#change_pass_btn').click(function(){
		$('#change_pass').ajaxSubmit({ 
			success: function(data) {
				var json_data =  $.parseJSON(data);
				console.log(json_data);
				$('.modal-body').html(json_data.message);
				$('.modal').modal('show');
				$('.modal').on('hidden', function () {
					if(json_data.status != 'ERROR'){
						window.location.href = BASE_URL+'users/logout';
					}
				});
			}
		});
	});
		
	$('#change_info_btn').click(function(){
		$('#change_info').ajaxSubmit({ 
			success: function(data) {
				var json_data =  $.parseJSON(data);
				console.log(json_data);
				$('.modal-body').html(json_data.message);
				$('.modal').modal('show');
				$('.modal').on('hidden', function () {
					if(json_data.status != 'ERROR'){
						window.location.href = BASE_URL+'users/logout';
					}
				});
			}
		});
	});
	$('form').bind('check',function(e,param){
			switch(param.status){
					case 1:
						if($(this).find('.error-message').length==0){
							$(this).find('.submit-button').removeAttr('disabled');
							$(this).find('.art-button-wrapper').removeClass("hover");
						}
						break;
					case -1:
						$(this).find('.submit-button').attr('disabled','disabled');
						$(this).find('.art-button-wrapper').addClass("hover");
						break;
			}
			
		});
	
	$('input').attr('autocomplete','off');
	$('input, select').bind('validate',function(e,param){
		var msg = mrk_up ="";
		switch(param.status){
			case 1:
				mrk_up = '<span class="message"><i class="icon-ok" /><span>';
				break;
			case -1:
				msg = param.msg!=""?param.msg:'Invalid';
				mrk_up = '<div class="error-message message"><i class="icon-remove" />'+msg+'</div>';
				break;
			case 0 :
				msg = param.msg!=""?param.msg:'Checking...';
				mrk_up = '<span class="message"><img src="/isms/img/icons/loader.gif"  height="16px"/>'+msg+'<span>';
				break;
			
		}
		$(this).attr('valid',param.status);
		$(this).parent().find('.message').remove();
		$(this).parent().append(mrk_up);
		$(this).parent().parent().parent().trigger('check',{status:param.status});
	});
	$('input,select').change(function(){
		$(this).parent().removeClass('error');
		$(this).parent().find('.error-message').remove();
	});
	
	$(".text input:not(.notrequired)").blur(function(){
		if($(this).val()==""){
			$(this).trigger('validate',{status:-1,msg:'Required'});
		}else{
			if(!$(this).hasClass('ajax')){
				$(this).trigger('validate',{status:1});
			}
		}
	});
	
	$("select:not(.notrequired)").blur(function(){
		if($(this).find('option:selected').val()=="%"){
			$(this).trigger('validate',{status:-1,msg:'Required'});
		}else{
			$(this).trigger('validate',{status:1});
		}
	});
	$('input.ajax').attr('init',function(e){
		$(this).attr('init',$(this).val());
	}).blur(function(){
		var THIS =  this;
		var VAL = $(THIS).val();
		var INIT = $(THIS).attr('init');
		if(VAL==INIT){	
			$(THIS).parent().find('.message').remove();
		}
	}).change(function(){
		var THIS =  this;
		var VAL = $(THIS).val();
		var INIT = $(THIS).attr('init');
		var LINK_TO = $(this).attr('linkto');
		var FORM = $(this).attr('frm');
		$(LINK_TO).val($(this).val());
		if(VAL==INIT){	
			return;
		}
		$(FORM).ajaxSubmit({ 
			success: function(data) {
				var json_data =  $.parseJSON(data);
				if(json_data.status=='ERROR'){
					$(THIS).trigger('validate',{status:-1,msg:json_data.message});
				}else{
					$(THIS).trigger('validate',{status:1});
				}
			},
			beforeSend:function(e){
				$(THIS).attr('disabled','disabled');
				$(THIS).trigger('validate',{status:0,msg:'Checking...'});
			},
			complete:function(){
				$(THIS).removeAttr('disabled');
			}
		});
	});
	$('input.password').change(function(){
		var THIS = this;
		if($(THIS).val().length<8){
			$(THIS).trigger('validate',{status:-1,msg:"Password must be 8 or more characters long."});
		}else{
			$(THIS).trigger('validate',{status:1});
		}
	});
	$('input.cpassword').change(function(){
		var THIS =  this;
		var LINK_TO = $(this).attr('linkto');
		if($(LINK_TO).attr('valid')==-1){
			$(THIS).val('');
			$(LINK_TO).focus();
		}else{
			if($(THIS).val()!=$(LINK_TO).val()){
				$(THIS).trigger('validate',{status:-1,msg:"Password mismatch"});
			}else{
				$(THIS).trigger('validate',{status:1});
			}
		}
	});
	
});