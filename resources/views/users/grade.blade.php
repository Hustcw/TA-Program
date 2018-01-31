<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TA</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/chinese_font.css" rel="stylesheet"/>
    <link href="css/assscore.css" rel="stylesheet"/>
    <link href="bootstrap-table/src/bootstrap-table.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="font/iconfont.css"/>
    <script src="bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap-table/dist/bootstrap-table.js" type="text/javascript"></script>
    <script src="bootstrap-table/dist/locale/bootstrap-table-zh-CN.js" type="text/javascript"></script>
    <link href="bootstrap-table/dist/bootstrap-table.css" rel="stylesheet">
    <script src="bootstrap-table/dist/extensions/editable/bootstrap-table-editable.js" type="text/javascript"></script>
    <script src="x-editable-develop/dist/bootstrap3-editable/js/bootstrap-editable.js" type="text/javascript"></script>
    <script src="js/assscore.js"></script>
    <script src="js/nav.js"></script>
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
            <img src="images/mini.png">
        </div>
    </div>
    <ul>
        <li class="nav-item1"><a href="javascript:;"><em class="my-icon nav-icon1 icon_1"></em><span>作业成绩</span><em
                        class="my-icon nav-more1"></em></a>
            <ul>
                <li><a href="javascript:;"><span>作业1</span></a></li>
                <li><a href="javascript:;"><span>作业2</span></a></li>
                <li><a href="javascript:;"><span>作业3</span></a></li>
                <li><a href="javascript:;"><span>作业4</span></a></li>
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
<!--顶导航栏-->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container-fluid" style="padding-left: 10%;padding-right:10%">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#TAstudent"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:aliceblue;" href="#">TAT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="TAstudent">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">你的课程 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">数据结构</a></li>
                        <li><a href="#">线性电子电路</a></li>
                        <li><a href="#">数字逻辑电路</a></li>
                        <li><a href="#">c++程序设计</a></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-plus"></span>
                                &nbsp;添加课程</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">个人中心<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">修改个人信息</a></li>
                        <li><a href="#">设置提醒方式</a></li>
                        <li><a href="#">退出登录</a></li>
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
</body>
</html>
