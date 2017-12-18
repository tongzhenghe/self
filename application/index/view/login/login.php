<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>登录进入</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        #id{
            margin: 80px;
            padding: 50px;
            color:gray;
        }
        #img{

        }
    </style>
</head>
<body>
<!--<img id="img" src="http://img0.imgtn.bdimg.com/it/u=2957760265,1908463701&fm=27&gp=0.jpg" style="width: 40px"/>-->
<div id="id">
    <h1 id="id1">首页登录</h1>
    <form class="form-horizontal" method="post">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-10">
            <input type="email" id="emails" onblur="validateEmail()"  name="email" style="width: 300px" class="form-control"  placeholder="Email" >
            <tr><td class="td"></td><td class="td"></td><div id="divName"></div></td></tr>

        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password"  name="password" style="width: 300px"  class="form-control" id="inputPassword3" onblur="validatePass()" placeholder="Password">
            <tr><td class="td"></td><td class="td"></td><div id="divPass"></div></td></tr>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-10">
            <input type="text" name="captcha" style="width: 300px" class="form-control" id="inputCaptcha" onblur="validateCaptcha()" placeholder="请输入验证码">
            <tr><td class="td"></td><td class="td"></td><div id="divCaptcha"></div></td></tr>
            <div><a href="javascript:void(0)" onclick="fresh()"><img id="captcha" src="{:captcha_src()}" alt="captcha" />刷新</a></div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="submit" onclick="validateSubmit();" class="btn btn-default">登录</button>
        </div>
    </div>
</form>
</div>
</body>
<script>
    /*验证码局部刷新*/
    function fresh() {
       var img = document.getElementById('captcha');
       img.src = "{:captcha_src()}?rnd="+Math.random();
    }
    /*email验证*/
    function validateEmail() {
        var name = document.getElementById("emails");
        var divName = document.getElementById("divName");
        //console.dir(divName.innerText);
        divName.innerText = "";
        if (name.value === "") {
            divName.style = "color:red";
            divName.innerText = "邮箱不能为空";
            return false;
        }
    }
    /*密码验证*/
    function validatePass() {
        var name = document.getElementById('inputPassword3');
        var divPass = document.getElementById('divPass');
        divPass.innerText = "";
        if (name.value === "") {
            divPass.style = "color:red";
            divPass.innerText = "密码不能为空";
            return false;
        }
    }
    /*验证码*/
    function validateCaptcha() {
            var name = document.getElementById('inputCaptcha');
            console.dir(name);
            var divCaptcha = document.getElementById('divCaptcha');
            divCaptcha.innerText = "";
        if (name.value === "") {
                divCaptcha.style = "color:red";
                divCaptcha.innerText="验证码不能为空";
                return false;
            }
}
/*登录非空判定不跳转*/
/*function validateSubmit() {
    var email = document.getElementById('emails');
    var pass = document.getElementById('inputPassword3');
    var data = document.getElementById('inputCaptcha');
    if (email.value === "" || data.value === "" || pass.value === "") {
        confirm("不能为空");return false;
    }

}*/
</script>
</html>