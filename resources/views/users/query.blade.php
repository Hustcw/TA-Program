<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TAT</title>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="/css/chinese_font.css" rel="stylesheet"/>
    <link href="/css/asshm.css" rel="stylesheet"/>
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/asshm.js"></script>
</head>
<body style="background-color:#ebeaea">

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
                <li >
                    <a href="{{route('users.show',$user->id)}}" role="button">个人中心</a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


@include('share._errors')
@include('share._messages')
<!--body-->
<div class="container" style="position:relative;top:70px">
    <!--未登记-->
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6,col-xs-12">
            <div class="title" >
                <span>未登记</span>
            </div>
            <br/>
            <div class="sm-title" >
                <span>未截止</span>
            </div>

            <!--添加新的作业-->
            <div class="container-fluid">
                <div class="hm-btn row" data-toggle="modal" data-target="#AddNewHW">
                    <div>
                        <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="hm-btn-sign-ptn" style="font-size:35px;color:white">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                        </div>

                        <div class="hm-btn-body hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span  style="font-size:18px;display:block">添加新作业</span>
                            <span  style="font-size:10px;display:block">点击添加作业内容</span>
                        </div>
                    </div>
                </div>
            </div>

            <!--已有的未登记作业-->
            <div class="container-fluid panel-group" id="accordion">
                @include('tasks.st_show_content',['tasks'=>$tasks])
            </div>



            <div class="sm-title" >
                <span>已截止</span>
            </div>

            <div class="container-fluid panel-group" id="accordion1">
                <div class="hm-btn row" >
                    <div>
                        <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2" >
                            <div class="hm-btn-sign-ptn" style="font-size:35px;color:white">
                                <span class="	glyphicon glyphicon-wrench"></span>
                            </div>
                        </div>

                        <div class="hm-btn-body col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                            <div class="row">
                                <div class="hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <span  style="font-size:18px;display:block">第二次作业</span>
                                    <span  style="font-size:10px;display:block">截止日期：</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <a class="hm-btn-hover2" style="position:relative;top:10px;" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
                                        <span class="glyphicon glyphicon-list"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        作业内容
                    </div>
                    <button class="btn btn-primary" href="">登记成绩</button>
                    <br/>
                </div>
            </div>
        </div>


        <!--已登记-->
        <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6,col-xs-12">
            <div class="title" >
                <span>已登记</span>
            </div>
            <br/>

            <!--已有的未登记作业-->
            <div class="container-fluid panel-group" id="accordion2">
                <div class="hm-btn row" >
                    <div>
                        <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="hm-btn-sign-ptn" style="font-size:35px;color:white">
                                <span class="	glyphicon glyphicon-wrench"></span>
                            </div>
                        </div>

                        <div class="hm-btn-body col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                            <div class="row">
                                <div class="hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <span  style="font-size:20px;display:block">第二次作业</span>
                                    <span  style="font-size:10px;display:block">截止日期：</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <a class="hm-btn-hover2" align="center" style="position:relative;top:10px;" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
                                        <span class="glyphicon glyphicon-list"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        作业内容
                    </div>
                    <button class="btn btn-primary" href="">登记成绩</button>
                    <br/>
                </div>
            </div>

        </div>
    </div>
</div>

<!--添加新作业-->
<div class="modal fade" id="AddNewHW" role="dialog" tabindex="-1" data-show="false" aria-hidden="true" style="position:fixed">
    <div >
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
                            <form action="{{route('tasks.store',['user'=>Auth::user()])}}" method="POST" role="form">
                                {{csrf_field()}}

                                <div class="input-group">
                                    <span class="input-group-addon" style="font-family:chinese2">任务名</span>
                                    <input name="title" type="text" class="form-control" placeholder="请输入任务名称">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <input name="ta_course" type="hidden" class="form-control" placeholder="请输入任务名称" value="{{Auth::user()->ta_course}}">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" style="font-family:chinese2">截止日期</span>
                                    <input name="deadline" type="datetime-local" class="form-control">
                                </div>
                                <br/>
                                <div class="form-group">
                                    <textarea name="taskcontent" class="form-control" placeholder="输入任务内容（请勿超过200字)" rows="8"></textarea>
                                </div>

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
</div>
</body>
</html>
