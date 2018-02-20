<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TAT</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/css/ForgetPswd.css" />
    <link rel="stylesheet" type="text/css" href="/css/chinese_font.css"/>
    <script src="/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color:rgba(226,226,226,1.00)">
<!--顶导航栏-->
<div class="nav nav-pills navbar-fixed-top" style="z-index:1;background-color:#222222">
    <div class="container-fluid" style="padding-left:5%;padding-right:5%">
        <!-- Brand and toggle get grouped for better mobile display -->

        <a class="navbar-brand" style="color:aliceblue;" href="#">TAT</a>

        <a class="signupbtn " style="position:relative;top:10px;float:right" href="#">注册</a>

    </div>
</div>

<!--main-->
<div class="container" style="margin-top:100px">
    <!--circle-->
    <div class="row">
        <div class="hidden-xs" style="height:100px"></div>

        <div class="visible-xs col-xs-4"></div>
        <div class="col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-4" align="center">
            <div class="circle1-active">
                <div class="circle2">
                    <span class="circle-num">1</span>
                </div>
                <p class="circle-content">填写账号</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-2  col-sm-2  hidden-xs" align="center">
            <div class="circle1">
                <div class="circle2">
                    <span class="circle-num">2</span>
                </div>
                <p class="circle-content">身份验证</p>
            </div>
        </div>

        <div class=" col-lg-2 col-md-2  col-sm-2  hidden-xs" align="center">
            <div class="circle1">
                <div class="circle2">
                    <span class="circle-num">3</span>
                </div>
                <p class="circle-content">重置密码</p>
            </div>
        </div>

        <div class=" col-lg-2 col-md-2 col-sm-2  hidden-xs" align="center">
            <div class="circle1">
                <div class="circle2">
                    <span class="circle-num">4</span>
                </div>
                <p class="circle-content">完成修改</p>
            </div>
        </div>

    </div>

    <!--form-->
    <br/><br/><br/><br/>
    <div class="row">
        <div class="col-lg-offset-4 col-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
            <div class="step text-center">
                <span>第一步</span>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">邮箱地址：</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div align="center" style="margin:30px">
                    <button type="submit" id="continue" class="btn btn-default ">&nbsp;&nbsp;继&nbsp;续&nbsp;&nbsp;</button>
                </div>

                <script>
                    //submit按钮实现页面跳转
                    $(document).ready(function(){
                        $("#continue").click(function(){
                            window.location.href="http://www.baidu.com"; //换成步骤2地址
                        });
                    });
                </script>

            </form>
        </div>
    </div>


</div>
</body>
</html>
