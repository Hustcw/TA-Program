// JavaScript Document
$("document").ready(function(){
	$('#AddAnswer').modal({
			keyboard: true
		});


	$('#close').click(function(){
		$('#AddNewHW').fadeOut("fast");
	});
});