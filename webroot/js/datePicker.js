$('document').ready(function(){
//Date Picker
	
	$(document).bind('date-picker',function(){
		$('.datepicker').datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}).trigger('date-picker');
	
	
	$(document).bind('fromdate',function(){
		$("#txtFromDate").datepicker({
			numberOfMonths: 1,
			dateFormat: 'yy-mm-dd',
			onSelect: function(selected) {
			  $("#txtToDate").datepicker("option","minDate", selected)
			}
		});
	}).trigger('fromdate');
	
	$(document).bind('todate',function(){
		$("#txtToDate").datepicker({
			numberOfMonths: 1,
			dateFormat: 'yy-mm-dd',
			onSelect: function(selected) {
			   $("#txtFromDate").datepicker("option","maxDate", selected)
			}
		});
	}).trigger('todate');
    
});
	
