<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TA</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/chinese_font.css" rel="stylesheet"/>
    <link href="/css/assscore.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/font/iconfont.css"/>
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/nav.js"></script>
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
        <li class="nav-item1"><a href="javascript:;"><em class="my-icon nav-icon1 icon_1"></em><span>作业成绩</span><em
                        class="my-icon nav-more1"></em></a>
            <ul>
                @foreach($tasks as $task)
                <li><a href="{{route('tasks.showgrade',['user'=>Auth::user(),'$task'=>$task])}}"><span>{{$task->title}}</span></a></li>
                @endforeach
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
            <a class="navbar-brand" style="color:aliceblue;" href="{{route('users.show',Auth::user()->id)}}">TAT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->username}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.edit',Auth::user()->id)}}">编辑信息</a></li>
                        <li><a href="{{route('users.show',Auth::user()->id)}}">个人主页</a> </li>
                        <li><a href="{{route('tasks.show',Auth::user()->id)}}">发布任务</a></li>
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

</body>
</html>
