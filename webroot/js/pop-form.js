var DIVISION_CODE = '';
var ORGANIZATION = '';
var TRUE =1;
var FORMAT = '.json';
$('document').ready(function(){
	$('.pop').popover({'content':$('.pop-form').clone()});
	$('.pop-form').remove();
	$(document).on('click','.pop-save',function(e){
		e.preventDefault();
		var form = $(this).parents('form:first');
		var self =  $(this);
		if(form[0].checkValidity()){
			DIVISION_CODE = $('#EmployeeAffiliationOffice option:selected').attr('division_code');
			ORGANIZATION = $('#EmployeeAffiliationOffice option:selected').text();
			var position = $('#EmployeeAffiliationPosition option:selected').text();
			var rank = $('#EmployeeAffiliationRank option:selected').text();
			var start = $('#EmployeeAffiliationEmployedDate').val();
			var data = {"division_code":DIVISION_CODE,"organization":ORGANIZATION,'title':position,'rank':rank,'since':start}
			$('.value').val(JSON.stringify(data));
			
			form.ajaxSubmit({
				beforeSend:function(){
					self.attr("disabled","disabled");
				},
				success:function(){
					form[0].reset();
					$('.pop-save').removeAttr("disabled");
				}
			});
		}

	});	
	
	
	$(document).on('click','#AddAffiliation',function(e){
		var source ='http://localhost/accounting/organizations/requestChildren';// $('.pop-tree').attr('data-source');
		var parent = 1;//$('.pop-tree').attr('data-parent');
		var level = 1;//$('.pop-tree').attr('data-level');
		
		var uri = [source,parent,level];
		$.ajax({
			url:uri.join('/')+FORMAT,
			type:'post',
			success:function(data){
				var json = $.parseJSON(data);
				$.each(json,function(i,o){
					var  obj = o.Organization;
					$('#EmployeeAffiliationOffice').append("<option is_sub="+obj.is_sub+" id="+obj.id+" level_index="+obj.level_index+" division_code="+obj.division_code+">"+obj.description+"</option>");
				});
			}
		})
	});
	
	$(document).on('change','#EmployeeAffiliationOffice',function(e){	
		if($(this).find('option:selected').attr('return') == TRUE){ //Back To Top
			var source = $('.pop-tree').attr('data-source');
			var parent = 1;
			var level = 1;
			var uri = [source,parent,level];
			$.ajax({
				url:uri.join('/')+FORMAT,
				type:'post',
				beforeSend:function(){
					$('#EmployeeAffiliationOffice option').remove();
					$('#EmployeeAffiliationOffice').append('<option>Select</option>');
				},	
				success:function(data){
					var json = $.parseJSON(data);
					$.each(json,function(i,o){
						var  obj = o.Organization;
						$('#EmployeeAffiliationOffice').append("<option is_sub="+obj.is_sub+" id="+obj.id+" level_index="+obj.level_index+" division_code="+obj.division_code+">"+obj.description+"</option>");
					});
				}
			})
		}else{ //FORWARD
			var last_option_selected = $(this).find('option:selected').text();//View Last option selected
			var division_code = $(this).find('option:selected').attr('division_code');
			
			$('.pop-tree').attr('data-parent',$(this).find('option:selected').attr('id'));//change  data-parent value
			$('.pop-tree').attr('data-level',parseInt($(this).find('option:selected').attr('level_index'))+1);//change data-level value	
			var is_sub = $(this).find('option:selected').attr('is_sub');
			var source = $('.pop-tree').attr('data-source');
			var parent = $('.pop-tree').attr('data-parent');
			var level = $('.pop-tree').attr('data-level');

			var uri = [source,parent,level];
			if(is_sub == TRUE){
				$.ajax({
					url:uri.join('/')+FORMAT,
					type:'post',
					beforeSend:function(){$('#EmployeeAffiliationOffice option').remove()},	
					success:function(data){
						var json = $.parseJSON(data);
						$('#EmployeeAffiliationOffice').append('<option division_code='+division_code+'>'+last_option_selected+'</option>');
						$.each(json,function(i,o){
							var  obj = o.Organization;				
							$('#EmployeeAffiliationOffice').append("<option is_sub="+obj.is_sub+" id="+obj.id+" level_index="+obj.level_index+"  division_code="+obj.division_code+">"+obj.description+"</option>");
						});
						$('#EmployeeAffiliationOffice').append('<option data-parent="1" data-level="1" return="1">Back To Top</option>');
					}
				})
			}
		}
	});
	

});
			
