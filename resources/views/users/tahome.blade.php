<!DOCTYPE html>
<html lang="zh-CN">

<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,  user-scalable=no">
<title>助教主页</title>
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/student.css" />
 <script src="/js/student.js" type="text/javascript"></script>
	 <script src="/bootstrap/js/jquery.min.js"></script>
<link href="/css/chinese_font.css" rel="stylesheet"/>
<script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.beattext.js"></script>
<script type="text/javascript" src="/js/easying.js"></script>

	  <script type="text/javascript">
			$(document).ready(function() {
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
			$('#beatText4').beatText({isAuth:false,isRotate:false});
			$('#beatText5').beatText({isAuth:false,isRotate:false});
			$('#beatText6').beatText({isAuth:false,isRotate:false});
			});

	</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https:
      //cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	
</head>

<body style="background:#2C2C2C;">
	
  <!--导航栏-->
   <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" style="color:aliceblue;font-size:40px;padding-top:20px;" href="#">TAT</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">跳转至 <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">发布任务</a></li>
				<li><a href="#">反馈</a></li>
				<li><a href="#">Something else here</a></li>
			  </ul>
			</li>
		  </ul>


		  <ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->username}}<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="{{route('users.edit',Auth::user()->id)}}">编辑信息</a></li>
					  <li>
						  <form action="{{ route('signout') }}" method="POST">
							  {{ csrf_field() }}
							  {{ method_field('DELETE') }}
							  <button class="btn btn-block btn-danger" type="submit" name="button">退出登陆</button>
						  </form>
					  </li>
				  </ul>
			  </li>
		  </ul>

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav> 
    	
  <!--main-->
  		@include('share._messages')
	  <div class="container" style="margin-top: 60px">
		  <div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" align="center">
				  <!--TAT-->
				  <div class="sign">
				  <span style="color:aqua" id="beatText1">T</span><span class="hidden-xs" id="beatText2">eaching </span><span style="color:aqua" id="beatText3">A</span><span class="hidden-xs" id="beatText4">ssis</span><span style="color:aqua" id="beatText5">T</span><span id="beatText6" class="hidden-xs">ant</span>
				  </div>
				  <div style="color:rgba(153,153,153,1.00);position:relative;top:-100px">
					<h1>欢迎登陆助教端</h1>
					<p>点击跳转至跳转到您想去的页面</p>
					<p>点击导航栏右侧"个人中心"按钮修改、完善、绑定个人信息</p>
				  </div>
			    </div>
			    <br/>
			  </div>
		  </div>
	
	  <div class="cont s--inactive container" style="position:relative;top:-100px;">
		  <!-- cont inner start -->
		  <div class="cont__inner"  style="height: 100%">
              <div class="row" style="height: 100%">
					<!-- el start -->
				 <div class="el_pr col-lg-3 col-md-3 col-sm-3 col-xs-6" style="height: 100%">
					 <a href="{{route('tasks.show',$user->id)}}">
					<div class="el">
					  <div class="el__overflow">
						<div class="el__inner">
						  <div class="el__bg"></div>
						  <div class="el__preview-cont">
							<h2 style="font-size: 80px"><span class="glyphicon glyphicon-edit" style="height:40px;width:40px;color:white"></span></h2>
							<h2 class="el__heading" style="font-size: 40px">&nbsp;&nbsp;作&nbsp;业</h2>
						  </div>
						</div>
					  </div>
					  <div class="el__index">
						<div class="el__index-back">1</div>
						<div class="el__index-front">
						  <div class="el__index-overlay" data-index="1">1</div>
						</div>
					  </div>
					</div>
					 </a>
				 </div>
					<!-- el end -->
				
			  
			    	<div class="el_pr col-lg-3 col-md-3 col-sm-3 col-xs-6" style="height: 100%">
					<!-- el start -->
					<div class="el">
					  <div class="el__overflow">
						<div class="el__inner">
						  <div class="el__bg"></div>
						  <div class="el__preview-cont">
					
							<h2 style="font-size: 80px"><span class="glyphicon glyphicon-check" style="height:40px;width:40px;color:white"></span></h2>
							<h2 class="el__heading" style="font-size: 40px">&nbsp;&nbsp;成&nbsp;绩</h2>
							
						</div>
						</div>
					  </div>
					  <div class="el__index">
						<div class="el__index-back">2</div>
						<div class="el__index-front">
						  <div class="el__index-overlay" data-index="2">2</div>
						</div>
					  </div>
					</div>
						</div>
					<!-- el end -->
				
			  
			    	<div class="el_pr col-lg-3 col-md-3 col-sm-3 col-xs-6" style="height: 100%" >
					<!-- el start -->
					<div class="el">
					  <div class="el__overflow">
						<div class="el__inner">
						  <div class="el__bg"></div>
						  <div class="el__preview-cont">
							<h2 style="font-size: 80px"><span class="glyphicon glyphicon-search" style="height:40px;width:40px;color:white"></span></h2>
							<h2 class="el__heading" style="font-size: 40px">&nbsp;&nbsp;查&nbsp;询</h2>
						  </div>
						</div>
					  </div>
					  <div class="el__index">
						<div class="el__index-back">3</div>
						<div class="el__index-front">
						  <div class="el__index-overlay" data-index="3">3</div>
						</div>
					  </div>
					</div>
						</div>
					<!-- el end -->
				  
					<div class="el_pr col-lg-3 col-md-3 col-sm-3 col-xs-6" style="height: 100%">
					<!-- el start -->
					<div class="el">
					  <div class="el__overflow">
						<div class="el__inner">
						  <div class="el__bg"></div>
						  <div class="el__preview-cont">
							<h2 style="font-size: 80px"><span class="glyphicon glyphicon-thumbs-up" style="height:40px;width:40px;color:white"></span></h2>
							<h2 class="el__heading" style="font-size: 40px">&nbsp;&nbsp;反&nbsp;馈</h2>
						  </div>
						</div>
					  </div>
					  <div class="el__index">
						<div class="el__index-back">4</div>
						<div class="el__index-front">
						  <div class="el__index-overlay" data-index="4">4</div>
						</div>
					  </div>
					</div>
						</div>
					<!-- el end -->
		  <!-- cont inner end -->
		</div>
	  </div>
  </div>
<script src="/js/Tahome.js"></script>

</body>
</html>