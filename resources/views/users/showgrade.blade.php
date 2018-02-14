<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TA</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/chinese_font.css" rel="stylesheet"/>
    <link href="/css/assscore.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/font/iconfont.css"/>
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap-table/dist/bootstrap-table.js" type="text/javascript"></script>
    <script src="/bootstrap-table/dist/locale/bootstrap-table-zh-CN.js" type="text/javascript"></script>
    <link href="/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet">
    <script src="/bootstrap-table/dist/extensions/editable/bootstrap-table-editable.js" type="text/javascript"></script>
    <script src="/x-editable-develop/dist/bootstrap3-editable/js/bootstrap-editable.js" type="text/javascript"></script>
    <script src="/js/nav.js"></script>
    <script src="/bootstrap-table/dist/extensions/export/bootstrap-table-export.js" type="text/javascript"></script>
    <script src="/tableExport/tableExport.js" type="text/javascript"></script>
   <script type="text/javascript">
        $(document).ready(function(){
            $('#StuTable').bootstrapTable({
                columns: [{
                    checkbox:true
                },
                    {
                        field: 'StuNumber',
                        title: '学生学号'
                    }, {
                        field: 'StuName',
                        title: '学生姓名'
                    }, {
                        field: 'StuScore',
                        title: '学生成绩',
                        editable:{
                            type:"text"
                        }
                    }],
                url: "{{route('tasks.getJson',$task->id)}}",
                onEditableSave:function (field,row,oldvalue,$el) {
                    $.ajax({
                        type: "post",
                        url: "{{route("tasks.editgrade",$task->id)}}",
                        data: row,
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        success: function (data, status) {

                        },
                        error: function () {

                           },
                        complete: function () {

                        }
                    });
                },
                showExport:true,
                exportDataType:'all',
                exportTypes:['excel','json'] //导出文件类型
            });
        });
    </script>
	<script type="text/javascript">
		//关闭模态框
		$(function(){
			$('#close').click(function(){
		        $('#AddNewHW').fadeOut("fast");
	        });
		});	
	</script>
    <style>
        /* 以下实际使用若已初始化可删除 .nav height父级需逐级设置为100%*/
        body, html {
            height: 100%;
            background: #E2E2E2
        }

        body, ul {
            margin: 0;
            padding: 0
        }

        body {
            font: 14px Chinese2, HELVETICA;
            -webkit-text-size-adjust: 100%;
        }

        li {
            list-style: none
        }

        a {
            text-decoration: none;
        }

        /* 以上实际使用若已初始化可删除 */
    </style>
</head>

<body>
<!--侧导航栏-->
<div class="nav1 nav-mini1" style="position:fixed;top:50px;z-index:2">
    <div class="nav-top1">
        <div id="mini" style="border-bottom:1px solid rgba(255,255,255,.1)">
            <img src="/images/mini.png">
        </div>
    </div>
    <ul>
		<li class="nav-item1" style="height:45px">
			<a href="javascript:;" data-toggle="modal" data-target="#AddNewGrade"><em class="my-icon nav-icon1 icon_3"></em><span>添加新成绩</span></a>
        </li>
        <li class="nav-item1"><a href="javascript:;"><em class="my-icon nav-icon1 icon_1"></em><span>作业成绩</span><em
                        class="my-icon nav-more1"></em></a>
            <ul>
                @foreach($tasks as $t)
                <li><a href="{{route('tasks.showgrade',['user'=>Auth::user(),'$task'=>$t])}}"><span>{{$t->title}}</span></a></li>
                @endforeach
            </ul>
        </li>
        <li class="nav-item1">
            <a href="javascript:;"><i class="my-icon nav-icon1 icon_2"></i><span>考试成绩</span><i
                        class="my-icon nav-more1"></i></a>
            <ul>
                <li><a href="javascript:;"><span>考试1</span></a></li>
                <li><a href="javascript:;"><span>考试2</span></a></li>
                <li><a href="javascript:;"><span>考试3</span></a></li>
            </ul>
        </li>

    </ul>
</div>

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

<br/><br/><br/><br/>

<div class="container" z-index="-1">
    <!--表格-->
    <div class="row">
        <div class="col-lg-offset-1 col-lg-11	col-md-offset-1 col-md-11 col-sm-offset-1 col-sm-11 col-xs-offset-2 col-xs-10">
            <table id="StuTable" z-index="-1" dataclasses="table" data-undefined-text="-" data-striped="true"
                   data-sort-order="asc" data-sort-stable="true" data-pagination="true" data-page-number="1"
                   data-page-size="10" data-search="true"></table>
        </div>
    </div>
</div>

	<!--添加新成绩-->
 <div class="modal fade" id="AddNewGrade" role="dialog" tabindex="-1" data-show="false" aria-hidden="true" style="position:fixed">
	  <div >
		  <div class="container-fluid">
			  <div class="row">
				   <div style="height:100px"></div>
					  <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
						<div class="panel panel-default"> 
							<div class="panel-heading" >
							  <a id="close">
								 <span class="glyphicon glyphicon-remove" data-dismiss="modal"></span>
							  </a>
							</div>

							<div class="panel-body">						
								<form role="form" method="" action="">
									<br/>
									<div class="input-group">
										<span class="input-group-addon" style="font-family:chinese2">成绩单名</span>
										<input type="text" class="form-control" placeholder="请输入任务名称">
									</div>
									
									<div style="margin:15px">
										<span class="pull-left">成绩类型：&nbsp;&nbsp;&nbsp;</span>
										<input type="radio" name="" value="option1" > 考试
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="" value="option1" > 作业
									    <br/>
									</div>
										
									
									<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6">
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
