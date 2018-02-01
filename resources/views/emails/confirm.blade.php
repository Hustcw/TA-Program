<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teaching Assistance——请确认注册链接</title>
</head>
<body>
<h1>感谢您在Teaching Assistance注册！</h1>

<p>
    请点击下面的链接完成激活：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>
<br>
<p>
    如果您没有验证电子邮件，我们需要临时冻结您的账号，直到验证完成
    如果您需要助教端功能，请联系我们验证您的身份：notification@ustcta.com
</p>
<br>
<p>
    祝您生活愉快!
</p>
<p>
    USTC-TA Team
</p>
</body>
</html>