<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Welcome To Your TA</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/chinese_font.css"/>
    <script src="bootstrap/js/jquery-1.11.2.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https:
      //cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
		
		$(document).ready(function(){
			if(window.innerWidth<768){
				  $("#textchange").addClass("text-center");
			  }else{
				  $("#textchange").addClass("text-left");
			  }
			
		    $(window).resize(function(){
              if(window.innerWidth<768){
				  $("#textchange").removeClass("text-left");
				  $("#textchange").addClass("text-center");
			  }else{
				  $("#textchange").removeClass("text-center");
				  $("#textchange").addClass("text-left");
			  }
			});	
			
			$("img").siblings(".name").hide();
			
			$("img").mouseover(function(){
				$(this).siblings(".name").show(500);
			});
			
			$("img").mouseleave(function(){
				$(this).siblings(".name").hide(500);
			});
		});
</script>
  </head>
  <body>
     <!--顶导航栏-->
	<div class="nav nav-pills navbar-fixed-top" style="z-index:1;background-color:#222222">
	  <div class="container-fluid" style="padding-left:5%;padding-right:5%">
		<!-- Brand and toggle get grouped for better mobile display --> 
		
		 <a class="navbar-brand" style="color:aliceblue;" href="#">TAT</a>	
			   
		 <a class="signupbtn " style="position:relative;top:10px;float:right" href="{{route('signup')}}">注册</a>
		  
	  </div>
	</div>
	 @include('share._messages')
	 @include('share._errors')
	 <!--welcome-->
   <div class="jumbotron" style="background-color: #2b3137; padding-top: 175px; padding-bottom: 175px; margin-top:0px;">
       <!--首页-->
	   <div class="container">
       <div class="row">
		  
		   <!--巨幕-->
		   <div id="textchange" class="col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 col-sm-6 col-xs-12" style="color:white;"> 
		   <h1>欢迎来到TAT！</h1>
		   <p class="hidden-sm hidden-xs">TAT是为当代大学生量身打造的学习管理平台</p>
		   <p>TAT，为了更好的助教管理</p>
		   <p>TAT,为了更好的学生学习</p>
		   <p>TAT,为了更好的未来！</p>
		   <p>TAT,为了更好的未来！</p>
		   <p>TAT,为了更好的未来！</p>
		   </div>
		   
		   <!--小屏幕注册按钮-->
		   <div class="col-xs-12 center-block visible-xs">
	   	     <br>
			   <a href="{{route('signin')}}"><button type="submit" class="btn btn-default center-block" style="width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登&nbsp;录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
		   </div>
		   <br/>
		   
		   <!--登陆框-->
		   <div class="signup col-lg-4  col-md-4  col-sm-5 hidden-xs" style="background-color: #FFFFFF;">
		   <form method="POST" action="{{route('signin')}}" role="form" style="margin:5%;">
			   {{csrf_field()}}

	         <div class="form-group">
				 <label for="邮箱">邮箱</label>
				 <input  name="email" type="text" class="form-control" id="邮箱" placeholder="email">
			 </div> 
	
			 <div class="form-group">
				 <label for="密码">密码</label>
				 <input  name="password" type="password" class="form-control" id="密码"
				 placeholder="password">
			 </div>
             <div align="center">
             <label class="radio-inline">
                 <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked>我是助教
             </label>
             <label class="radio-inline">
                 <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 我是学生
             </label>
		     </div>
			 <br/>
             <button type="submit" class="btn btn-default center-block" style="width:200px;">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
		 </form>    
		   </div>    
	   </div>
		   
	   </div>
	   	   
   </div>  
	  
   <!--关于我们-->
	   
		   <!--网站功能介绍-->
		   <div class="container-fluid sun">
		      <div class="row">
			   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				  <div id="container">
					<div id="sun" ></div>
						<div class="orbit" id="earth-orbit">
							<div class="globe" id="earth">
								<div class="orbit" id="moon-orbit">
									<div class="globe" id="moon"></div>
								</div>
							</div>
						</div>
				    </div>
			    </div>
				  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					  <br/><br/>
					  <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6">
					     <a href="https://www.cnblogs.com/ustc-rjgc2017/">
						  <button class="btn btn-default btn-block" style="font-size:22px">关于我们</button>
						  </a>
					  </div>
					  <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" align="center">
						  <br/><br/>
						  <h4>助教端</h4>
						  <p>提供了一种更简便的课程管理方式。实时发布任务、登记成绩，且任何登记在学生端都可见，
							  大大增强了成绩登记环节的交互。</p>
						  <br/>
						  <h4>学生端</h4>
						  <p>助教端实时登记的作业或考试成绩都可见，利于学生查询。对未在截止日期前完成的作业，
							  我们提供了提醒功能，减小了大家忘做作业的可能性。</p>
						  <br/><br/><br/><br/>
					  </div>
				  </div>
			  </div>
		   </div>
		   
		   <!--项目成员-->
		   <div class="container-fluid" style="background-color:rgba(29,32,36,1.00);padding:40px">
				 <br/><br/>
				 <div class="row">
					 <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8 us " align="center">
				        <span> 项目成员</span>
					 </div>
		        </div>
				 <br/><br/>
				 <div style="overflow-x:scroll;" id="member">
				 <div style="width:1500px" class="row">
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/ycd.JPG" class="img-responsive img-circle">
						 <div class="name">俞晨东</div>
						 <br/>
					 </div>
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/wh.jpg" class="img-responsive img-circle">
						 <div class="name">王皓</div>
						 <br/>
					 </div>
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/pml.jpg" class="img-responsive img-circle">
						 <div class="name">庞茂林</div>
						 <br/>
					 </div>
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/slq.JPG" class="img-responsive img-circle">
						 <div class="name">苏立群</div>
						 <br/>
					 </div>
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/zgd.jpg" class="img-responsive img-circle">
						 <div class="name">张桂栋</div>
						 <br/>
					 </div>
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
						 <img src="images/yjw.JPG" class="img-responsive img-circle">
						 <div class="name">易婧玮</div>
						 <br/>
					 </div>
		         </div>
				 </div>
		        <br/><br/>
	       </div>
   
	  <br/><br/>
	  <div style="background-color:#000000;height:150px">
	  </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  @include('share.footer')
  </body>
</html>