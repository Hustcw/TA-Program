<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TAT</title>
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<link href="/css/chinese_font.css" rel="stylesheet"/>
	<link href="/css/assCenter.css" rel="stylesheet"/>
	<script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/js/assCenter.js"></script>
</head>

	
<body>
	<!--顶导航栏-->
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
		  <a class="navbar-brand" style="color:aliceblue;" href="#">TAT</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			@can('bind_course',$user)
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">跳转至 <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">发布任务</a></li>
			  </ul>
			</li>
		  </ul>
			@endcan
		  
			
		  <ul class="nav navbar-nav navbar-right">
			 <li >
			  <a href="{{route('users.show',Auth::user()->id)}}" role="button">个人中心</a>
			 </li>
		  </ul>
		
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	@include('share._errors')
	@include('share._messages')
	<br/><br/><br/><br/><br/>
	
	<!--修改个人信息-->
	<div class="container" >
		<div class="row">
		  <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
			  <div class="title" >
				 <span>修改个人信息</span>
			  </div>

			  <br/>
			  
				  <div class="row">
					<div class="wr-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
					   <div class="sm-title">
						<span >真实信息填写</span><span style="color:#9A292B">(必填项)</span>
					   </div>
						<form action="{{route('users.update',Auth::user()->id)}}" method="POST" role="form">
							{{ method_field('PATCH') }}
							{{ csrf_field() }}

							 <div class="input-group">
								<span class="input-group-addon">真实姓名</span>
								<input name="realname" type="text" class="form-control" placeholder="姓名" value="{{$user->realname}}">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">学号</span>
								<input type="text" name="student_id" class="form-control" placeholder="学号" value="{{$user->student_id}}">
							</div>
							<br>
							<div class="input-group">
								<button class="btn btn-default" type="submit">
									提交修改
								</button>
							</div>
						</form>
					</div>
					  
					<div class="wr-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
					   <div class="sm-title">
						<span >已有信息修改</span>
					   </div>
						<form action="{{route('users.update',['user'=>Auth::user()])}}" method="POST" role="form">
							{{ method_field('PATCH') }}
							{{ csrf_field() }}

							 <div class="input-group">
								<span class="input-group-addon">用户名</span>
								<input name="username" type="text" class="form-control" value="{{ $user->username }}">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">邮箱</span>
								<input name="email" type="text" class="form-control" placeholder="邮箱"  value="{{$user->email}}"disabled>
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">手机号</span>
								<input name="phonenumber" type="text" class="form-control" placeholder="手机号" value="{{$user->phonenumber}}">
							</div>
							<br>
							<div class="input-group">
								<div>
									<div>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ChangePW">
											&nbsp;点击修改密码&nbsp;
										</button>&nbsp;&nbsp;&nbsp;&nbsp;
										<button class="btn btn-default" type="submit">
											提交修改
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				   </div>
			  </div> 

			</div>
		
		<br/>

		@can('bind_course',$user)
            @if(!$user->ta_course)
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
			  <div class="title" >
				 <span>修改课堂信息</span>
			  </div>
				<br/><br/>
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">

					<div class="input-group">
						<span class="input-group-addon">&nbsp;&nbsp;课堂号&nbsp;&nbsp;</span>
						<input name="course_id" type="text" class="form-control"  value="{{$user->ta_course}}">
					</div>
					<br>
					<div class="input-group">

						<span class="input-group-addon">课程名称</span>
						<input name="course_name" type="text" class="form-control"  value="{{$user->assistant_course()->course_name}}">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">任课教师</span>
						<input name="teacher" type="text" class="form-control"  value="{{$user->assistant_course()->teacher}}">
					</div>
					<br>
					<div>
					     <a href="{{route('course.select',Auth::user()->id)}}"> <button class="btn btn-primary" type="submit">
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;选取助教课程&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 </button></a>
					</div>
		</div>
		  </div>
	    </div>
                @else
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
                        <div class="title" >
                            <span>修改课堂信息</span>
                        </div>
                        <br/><br/>
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon">&nbsp;&nbsp;课堂号&nbsp;&nbsp;</span>
                                    <input name="course_id" type="text" class="form-control" value="{{$user->ta_course}}" disabled >
                                </div>
                                <br>
                                <div class="input-group">

                                    <span class="input-group-addon">课程名称</span>
                                    <input name="course_name" type="text" class="form-control" value="{{$user->assistant_course()->course_name}}"disabled >
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">任课教师</span>
                                    <input name="teacher" type="text" class="form-control"  value="{{$user->assistant_course()->teacher}}"disabled >
                                </div>
                                <br>
                                <div>
                                    <a href="{{route('course.select',Auth::user()->id)}}"> <button class="btn btn-primary" type="submit">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提交课堂信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button></a>
                                </div>
                        </div>
                    </div>
                </div>
                @endif
		@endcan
		<!-- footer -->
		
     </div>
	
	<!--修改密码-->
	<div class="modal fade" id="ChangePW" tabindex="-1" aria-hidden="true" data-show="false">
		<div class="container-fluid">
			  <div class="row">
				   <div style="height:100px"></div>
					  <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
						<div class="panel panel-default"> 
							<div class="panel-heading" >
							  <a id="close">
								 <span class="glyphicon glyphicon-remove" data-dismiss="modal"></span>
							  </a>
							</div>

							<div class="panel-body">						
								<form action="{{route('users.update', $user->id )}}" method="POST" role="form">
									{{ method_field('PATCH') }}
									{{csrf_field()}}

									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">原密码</span>
										<input name="former_password" type="password" class="form-control" placeholder="请输入原密码" >
									</div>
									<br/>
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">新密码</span>
										<input name="password" type="password" class="form-control" placeholder="请输入新密码" >
									</div>
									<br/>
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">确认密码</span>
										<input name="password_confirmation" type="password" class="form-control" placeholder="请再次输入新密码" >
									</div>
									<br/>
									<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6">
									<div>
										<button type="submit" class="btn btn-primary btn-block" id="submit">提交</button>
									</div>
								    </div>
								</form>
							</div>
						</div>
					 </div>
			  </div>
		  </div>
	</div>
	
</body>
</html>
