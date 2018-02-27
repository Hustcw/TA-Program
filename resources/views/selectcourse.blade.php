<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TAT</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/chinese_font.css" rel="stylesheet"/>
    <link href="/bootstrap-table/src/bootstrap-table.css" rel="stylesheet"/>
    <link href="/css/course.css" rel="stylesheet"/>

    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap-table/dist/bootstrap-table.js" type="text/javascript"></script>
    <script src="/bootstrap-table/dist/locale/bootstrap-table-zh-CN.js" type="text/javascript"></script>
    <link href="/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet">
    <script src="/bootstrap-table/dist/extensions/editable/bootstrap-table-editable.js" type="text/javascript"></script>
    <script src="/x-editable-develop/dist/bootstrap3-editable/js/bootstrap-editable.js" type="text/javascript"></script>
    <script src="/js/course.js" type="text/javascript"></script>
    <style>
        /* 以下实际使用若已初始化可删除 .nav height父级需逐级设置为100%*/
        body, html {
            height: 100%;
            background:rgba(245,245,245,1.00);
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->username}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.edit',Auth::user()->id)}}">编辑信息</a></li>
                        <li><a href="{{route('users.show',Auth::user()->id)}}">个人主页</a></li>
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
@include('share._messages')
@include('share._errors')
<br/><br/><br/><br/>



<!--表格-->
<form action="" method="" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-group" id="chooseCourse">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#chooseCourse" href="#collapseTwo">
                                    全部课程
                                </a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table id="AllCourse" z-index="-1" data-toggle="table" dataclasses="table" data-undefined-text="-" data-striped="true"
                                       data-sort-order="asc" data-sort-stable="true" data-pagination="true" data-page-number="1"
                                       data-page-size="10" data-search="true" >
                                    <thead>
                                    <tr>
                                        <th>课程号</th>
                                        <th>课程名称</th>
                                        <th>任课教师</th>
                                        <th>选取课程</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <!--未加入选课样式-->
                                    <tr>
                                    @foreach($data as $dd)
                                        @if($user->ta_course === $dd->course_id)
                                            <tr>
                                                <td>{{$dd->course_id}}</td>
                                                <td>{{$dd->course_name}}</td>
                                                <td>{{$dd->teacher}}</td>
                                                <td><button type="submit" class="btn btn-default" disabled="disabled">已选中</button></td>
                                            </tr>

                                        @else
                                            <tr>
                                                <td>{{$dd->course_id}}</td>
                                                <td>{{$dd->course_name}}</td>
                                                <td>{{$dd->teacher}}</td>

                                                <td><form action="{{route('course.selectcourse',['user'=>Auth::user()])}}" method="POST" role="form">
                                                        {{csrf_field()}}
                                                        {{ method_field('PATCH') }}
                                                        <input name="course_id" type="hidden" class="form-control" value="{{$dd->course_id}}">
                                                        <button type="submit" class="btn btn-default" >选课</button>
                                                    </form></td>
                                            </tr>

                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
