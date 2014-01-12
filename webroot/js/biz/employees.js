$('document').ready(function(){
	$(document).on('change','#EmployeeAffiliationOffice',function(){
	console.log($(this).find('option:selected').text());
		$('#org').val($(this).find('option:selected').text());
	});
	$(document).on('click','.action-add',function(){
		var EmployeeId =  $('#EmployeeId').val();
		var modal =  $(this).attr('href');
		var form = $(modal).parents('form:first');
		form[0].reset();
		$('input[role="foreign-key"]').val(EmployeeId);
	});
	$(document).on('click','.action-delete',function(){
		var row =$(this).parents('tr:first');
		var key  = row.attr('id');
		var data = $('.RECORD').trigger('access',{'key':key});
		var record =  window.RECORD.getActive();
		console.log(record);
		var id = record.EmployeeAffiliation.id;
		var col_count =  $('#EmployeeAffiliationTable.RECORD tbody td').length;
		var model =  'employee_affiliations';
		$.ajax({
			url:'/profile/'+model+'/delete/'+id,
			method:'POST',
			dataType:'json',
			success:function(data){
				var row_count = row.parent().find('tr').length;
				console.log(row_count);
				if(row_count  == 1){
					$('#EmployeeAffiliationTable.RECORD tbody').hide();
					$('#EmployeeAffiliationTable.RECORD tbody td span').empty();
					$('#EmployeeAffiliationTable.RECORD tfoot').fadeIn().html('<tr><td colspan="'+col_count+'" class="text-center"><div class="well text-center"><button class="btn  btn-medium action-btn" id="add-employee-affiliations" href="#employee-affiliations-modal" data-toggle="modal" data-dismiss="modal"><i class="icon-plus"></i> Employee Affiliations</button><div class="muted">No Employee Affiliations found, click to add.</div></div></td></tr>');	
				}else{
					row.remove();
				}
			}
		});
	});
	$(document).on('click','.action-edit',function(){
		var row =$(this).parents('tr:first');
		var key  = row.attr('id');
		var data = $('.RECORD').trigger('access',{'key':key});
		var record =  window.RECORD.getActive();
		var modal =  $(this).attr('href');
		var form = $(modal).parents('form:first');
		form[0].reset();
		var records = $.parseJSON(record.EmployeeAffiliation.value);
		console.log(records);
		$('#EmployeeAffiliationOffice').val(records.division_code);
		$('#EmployeeAffiliationPosition').val(records.position);
		$('#EmployeeAffiliationRank').val(records.title);
		$('#EmployeeAffiliationEmployedDate').val(records.since);
		$('#EmployeeAffiliationEsp').val(record.EmployeeAffiliation.esp);
	});
});