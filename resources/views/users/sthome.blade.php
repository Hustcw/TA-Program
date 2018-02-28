<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,  user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Welcome To Your TA</title>
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<style>

	/*下面两个是核心样式*/
	.beat-char {
		position: relative;
		display: inline-block;
		background: transparent;

	}

	.rotate{
		transform:rotate(360deg) ;
		-ms-transform:rotate(360deg); 	/* IE 9 */
		-moz-transform:rotate(360deg); 	/* Firefox */
		-webkit-transform:rotate(360deg); /* Safari 和 Chrome */
		-o-transform:rotate(360deg);
		-webkit-transition-duration: 0.5s;

	}
	</style>
    <link rel="stylesheet" type="text/css" href="/css/student.css" />
    <link rel="stylesheet" type="text/css" href="/css/chinese_font.css" />
	  <script src="/bootstrap/js/jquery.min.js"></script>
	  <script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
	  <script type="text/javascript" src="/js/jquery.beattext.js"></script>
	  <script src="/js/student.js" type="text/javascript"></script>
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
  <body style="background-color:#2B3138">

		  
   <!--顶导航栏-->
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
	  <div class="container-fluid" style="padding-left: 10%;padding-right:10%">
		<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#TAstudent" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
			<a class="navbar-brand" style="color:aliceblue;" href="{{route('users.show',Auth::user()->id)}}">TAT</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="TAstudent">
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我的课程 <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				  @foreach($courses as $course)
					  <li>
						  <a href="{{route('tasks.stshow',['user'=>Auth::user(),'course'=>$course])}}">{{$course->course_name}}</a>
					  </li>
				  @endforeach
				<li>
					<a href="{{route('courses.show',['user'=>Auth::user()])}}">
					<span class="glyphicon glyphicon-plus"></span>
					&nbsp;添加课程</a>
				</li>
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
   

                    
   	<!--主体-->
   		@include('share._messages')
   		@include('share._errors')
	  <div class="container" style="margin-top: 70px">
		  <div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" align="center">
				  <!--调整小屏幕上间距-->
				  <div style="height:10vh" class="hidden-xs">
				  </div>
				  <!--TAT-->
				  <div class="sign">
				  <span style="color:aqua" id="beatText1">T</span><span class="hidden-xs" id="beatText2">eaching </span><span style="color:aqua" id="beatText3">A</span><span class="hidden-xs" id="beatText4">ssis</span><span style="color:aqua" id="beatText5">T</span><span id="beatText6" class="hidden-xs">ant</span>
				  </div>
				  <div style="background-color:#2B3138;color:rgba(153,153,153,1.00);position:relative;top:-50px">
					<h1>欢迎你登陆学生端!</h1>
					<p>点击下方按钮或导航栏右侧"你的课程"按钮选取、添加课程</p>
					<p>点击导航栏右侧"个人中心"按钮修改、完善、绑定个人信息</p>
					<p>
				   <div class="btn-group dropup">
					   <br/>
					  <button type="button" id="btn-course" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						选取课程 <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						  @foreach($courses as $course)
							  <li>
								  <a href="{{route('tasks.stshow',['user'=>Auth::user(),'course'=>$course])}}">{{$course->course_name}}</a>
							  </li>
						  @endforeach
						<li>
							<a href="{{route('courses.show',['user'=>Auth::user()])}}">
								<span class="glyphicon glyphicon-plus"></span>
								&nbsp;添加课程</a>
						</li>
					  </ul>
					</div>
					</p>
				  </div>
			    </div>
			    <br/>
			  </div>
		  </div>
  </body>
</html>