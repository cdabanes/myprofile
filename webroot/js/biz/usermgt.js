$(document).ready(function(){
	$('.modal').css('width', '600px'); //modal size 
	$(document).on('click','.action-cmd',function(){
		var cmd = $(this).attr('data-cmd');
		$('#user-cmd').val(cmd);
		$('#UserStatusForm').ajaxSubmit({
			'beforeSend':function(){
			},
			'success':function(data){
				var json_data =  $.parseJSON(data);
				console.log(json_data);
				$('.modal-body').html(json_data.message);
				$('.modal').modal('show');
			},
		});
	});
});