// JavaScript Document
/*beattext.js*/
$(document).ready(function(){
	   /*
		 *  参数详解:
		 *	upTime			上移的时间
		 *	downTime		下落的时间
		 *	beatHeight		上移高度
		 *	isAuth			是否自动
		 *	isRotate		是否旋转
		*/
		$('#beatText1').beatText({isAuth:false,isRotate:false});
		$('#beatText2').beatText({isAuth:false,isRotate:false});
		$('#beatText3').beatText({isAuth:false,isRotate:false});
		$('#rotateText1').beatText({isAuth:false,isRotate:true});
		$('#rotateText2').beatText({isAuth:false,isRotate:true});
		$('#rotateText3').beatText({isAuth:false,isRotate:true});

});