<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TAT</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<link href="css/chinese_font.css" rel="stylesheet"/>
	<link href="css/assCenter.css" rel="stylesheet"/>
	<script src="bootstrap/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/assCenter.js"></script>
</head>

	
<body>
	<!--顶导航栏-->
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="z-index:1">
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
			 <li >
			  <a href="#" role="button">个人中心</a>
			 </li>
		  </ul>
		
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
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
						<span >真实信息绑定</span><span style="color:#9A292B">(必填项)</span>
					   </div>
						<form role="form">
							 <div class="input-group">
								<span class="input-group-addon">真实姓名</span>
								<input type="text" class="form-control" placeholder="姓名" style="z-index: -1000">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">学号</span>
								<input type="text" class="form-control" placeholder="学号" style="z-index: -1000">
							</div>
							<br>
							<div class="input-group">
								<div>
									<button class="btn btn-primary">点击验证学号&nbsp;<span class="glyphicon glyphicon-link"></span>&nbsp;</button>
									&nbsp;&nbsp;&nbsp;&nbsp;
									<button class="btn btn-default" type="submit">
										提交绑定
									</button>
								</div>
							</div>
						</form>
					</div>
					  
					<div class="wr-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
					   <div class="sm-title">
						<span >已有信息修改</span>
					   </div>
						<form role="form">
							 <div class="input-group">
								<span class="input-group-addon">修改用户名</span>
								<input type="text" class="form-control" placeholder="用户名" style="z-index: -1000">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">修改邮箱</span>
								<input type="text" class="form-control" placeholder="邮箱" style="z-index: -1000">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">修改手机号</span>
								<input type="text" class="form-control" placeholder="手机号" style="z-index: -1000">
							</div>
							<br>
							<div class="input-group">
								<div>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ChangePW">
										&nbsp;点击修改密码&nbsp;
									</button>&nbsp;&nbsp;&nbsp;&nbsp;
									<button class="btn btn-default" type="submit">
										提交修改
									</button>
								</div>
							</div>
						</form>
					</div>
				   </div>
			  </div> 

			</div>
		
		<br/>
		
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
			  <div class="title" >
				 <span>修改课堂信息</span>
			  </div>
				<br/><br/>
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">
				<form role="form">
					<div class="input-group">
						<span class="input-group-addon">&nbsp;&nbsp;课堂号&nbsp;&nbsp;</span>
						<input type="text" class="form-control" placeholder="请输入课堂号" style="z-index: -1000">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">课程名称</span>
						<input type="text" class="form-control" placeholder="请输入课程名称" style="z-index: -1000">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">任课教师</span>
						<input type="text" class="form-control" placeholder="请输入任课教师" style="z-index: -1000">
					</div>
					<br>
					<div>
					     <button class="btn btn-primary" type="submit">
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提交课堂信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 </button>
					</div>
				</form>
		</div>
		  </div>
	    </div>
		
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
								<form role="form">
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">原密码</span>
										<input type="text" class="form-control" placeholder="请输入原密码" style="z-index: -1000">
									</div>
									<br/>
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">新密码</span>
										<input type="text" class="form-control" placeholder="请输入新密码" style="z-index: -1000">
									</div>
									<br/>
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">确认密码</span>
										<input type="text" class="form-control" placeholder="请再次输入新密码" style="z-index: -1000">
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
