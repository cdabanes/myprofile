$(document).ready(function(){
	var OAUTH_SUFFIX = 'oauth';
	var OAUTH_REDIRECT;
	$('.application a').click(function(e,a){
		OAUTH_REDIRECT = $(this).attr('data-oauth');
		window.open(OAUTH_REDIRECT+OAUTH_SUFFIX,'Simply Connect','width=900,height=500');
	});
	$(document).bind('callback',function(evt,args){
		window.location=OAUTH_REDIRECT;
	});
});
function callback(data){
	$(document).trigger('callback',{'data':data});
}