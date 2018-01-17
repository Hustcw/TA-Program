$("document").ready(function(){
	$('#AddNewHW').modal({
			keyboard: true
		});


	$('#close').click(function(){
		$('#AddNewHW').fadeOut("fast");
	});

	$(".item").mouseover(function(){
	     $(this).children("a").css("color","#f4ac83");
	     $(this).css({"border-bottom":"3px solid #f4ac83","text-decoration":"none"});				 
	});
	
	$(".item").mouseleave(function(){
	     $(this).children("a").css("color","#000000");
	     $(this).css({"border-bottom":"3px solid #000000","text-decoration":"none"});				 
	});
    
});

