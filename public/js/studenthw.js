$("document").ready(function(){
	//hover
	
	$(".hm-btn-hover1").mouseover(function(){
		$(this).parents(".hm-btn").css("background-color","#D6D4D4");
	});
	
	$(".hm-btn-hover1").mouseleave(function(){
		$(this).parents(".hm-btn").css("background-color","#FFFFFF");
	});
	
	var width=$(".hm-btn-sign").css("width");
	$(".hm-btn-sign").css("height",width);
	var WidthPart=width.slice(0,width.length-2);
	var WidthNum=parseInt(WidthPart);
	$(".hm-btn-body").css("height",WidthNum+5+"px");
	var btnPadding=WidthNum/2-16;
	var bodyPadding=WidthNum/5;
	$(".hm-btn-sign").css("padding-top",btnPadding+"px");
	$(".hm-btn-body").css("padding-top",bodyPadding+"px");
	
	$(window).resize(function(){
		var Width=$(".hm-btn-sign").css("width");
		$(".hm-btn-sign").css("height",Width);
		var WidthPart=Width.slice(0,Width.length-2);
		var WidthNum=parseInt(WidthPart);
		$(".hm-btn-body").css("height",WidthNum+5+"px");
		var btnPadding=WidthNum/2-16;
		var bodyPadding=WidthNum/5;
		$(".hm-btn-sign").css("padding-top",btnPadding+"px");
		$(".hm-btn-body").css("padding-top",bodyPadding+"px");
	});
});

