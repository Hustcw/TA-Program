// JavaScript 
$("document").ready(function(){
	$('#ChangePW').modal({
		keyboard: true
	});
	

	$('#close').click(function(){
		$('#ChangePW').fadeOut("fast");
	});
	
	});