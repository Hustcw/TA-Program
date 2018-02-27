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
    <link rel="stylesheet" type="text/css" href="/css/studenthws.css" />
    <link rel="stylesheet" type="text/css" href="/css/chinese_font.css" />
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/js/studenthws.js" type="text/javascript"></script>

    <script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
</head>
<body  data-spy="scroll" data-target="#myScrollspy">

<!--顶导航栏-->
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
                    <a href="{{route('users.show',$user->id)}}" role="button">个人中心</a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs" id="myScrollspy" >
            <ul class="nav nav-tabs nav-stacked"   data-spy="affix">
                <li class="active"><a href="#task">我的任务</a></li>
                <li><a href="#grade">我的成绩</a></li>
                <li><a href="#feedback">我的反馈</a></li>
            </ul>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div style="height:200px" id="task" ></div>
            <div class="title" >
                <span>我的任务</span>
            </div>
            <div class="container-fluid" style="padding-top:50px;">
                <div class="row panel-group" id="accordion">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12">

                        @foreach($tasks as $task)
                            @if(($loop->index+1) % 2)
                            <div class="hm-btn row" >
                                <div class="panel">
                                    <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="hm-btn-sign-ptn" style="font-size:35px;color:white;vertical-align:center;">
                                            <span class="glyphicon glyphicon-paperclip"></span>
                                        </div>
                                    </div>

                                    <div class="hm-btn-body col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                                        <div class="row">
                                            <div class="hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <span  style="font-size:18px;display:block">{{$task->title}}</span>
                                                <span  style="font-size:10px;display:block">截止时间：{{$task->deadline}}</span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <a class="hm-btn-hover2" style="position:relative;top:10px;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$task->id}}">
                                                    <span class="glyphicon glyphicon-list"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapse{{$task->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{$task->content}}
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12">

                        @foreach($tasks as $task)
                            @if(!(($loop->index+1) % 2))
                                <div class="hm-btn row" >
                                    <div class="panel">
                                        <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="hm-btn-sign-ptn" style="font-size:35px;color:white;vertical-align:center;">
                                                <span class="glyphicon glyphicon-paperclip"></span>
                                            </div>
                                        </div>

                                        <div class="hm-btn-body col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                                            <div class="row">
                                                <div class="hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <span  style="font-size:18px;display:block">{{$task->title}}</span>
                                                    <span  style="font-size:10px;display:block">截止时间：{{$task->deadline}}</span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <a class="hm-btn-hover2" style="position:relative;top:10px;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$task->id}}">
                                                        <span class="glyphicon glyphicon-list"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapse{{$task->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {{$task->content}}
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>





            <div style="height:200px" id="grade" ></div>
            <div class="title">
                <span>我的成绩</span>
            </div>

            <table class="table table-responsive table-hover table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>任务名称</th>
                    <th>截止时间</th>
                    <th>成绩</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->deadline}}</td>
                        <td>{{$user->grade($task->id)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>



            <div style="height:200px" id="feedback" ></div>
            <div class="title" >
                <span>我的反馈</span>


            </div>
        </div>
    </div>
</div>
</body>
</html>