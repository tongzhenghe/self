<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        .bootstrap-frm {
            margin-left:auto;
            margin-right:auto;
            max-width: 500px;
            background: #FFF;
            padding: 20px 30px 20px 30px;
            font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #888;
            text-shadow: 1px 1px 1px #FFF;
            border:1px solid #DDD;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        .bootstrap-frm h1 {
            font: 25px "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 0px 0px 10px 40px;
            display: block;
            border-bottom: 1px solid #DADADA;
            margin: -10px -30px 30px -30px;
            color: #888;
        }
        .bootstrap-frm h1>span {
            display: block;
            font-size: 11px;
        }
        .bootstrap-frm label {
            display: block;
            margin: 0px 0px 5px;
        }
        .bootstrap-frm label>span {
            float: left;
            width: 20%;
            text-align: right;
            padding-right: 10px;
            margin-top: 10px;
            color: #333;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bold;
        }
        .bootstrap-frm input[type="text"], .bootstrap-frm input[type="email"], .bootstrap-frm textarea, .bootstrap-frm select{
            border: 1px solid #CCC;
            color: #888;
            height: 20px;
            line-height:15px;
            margin-bottom: 16px;
            margin-right: 6px;
            margin-top: 2px;
            outline: 0 none;
            padding: 5px 0px 5px 5px;
            width: 70%;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
        .bootstrap-frm select {
            background: #FFF url('down-arrow.png') no-repeat right;
            background: #FFF url('down-arrow.png') no-repeat right;
            appearance:none;
            -webkit-appearance:none;
            -moz-appearance: none;
            text-indent: 0.01px;
            text-overflow: '';
            width: 70%;
            height: 35px;
            line-height:15px;
        }
        .bootstrap-frm textarea{
            height:100px;
            padding: 5px 0px 0px 5px;
            width: 70%;
        }
        .bootstrap-frm .button {
            background: #FFF;
            border: 1px solid #CCC;
            padding: 10px 25px 10px 25px;
            color: #333;
            border-radius: 4px;
        }
        .bootstrap-frm .button:hover {
            color: #333;
            background-color: #EBEBEB;
            border-color: #ADADAD;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>文件上传</title>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <style>
    </style>
</head>
<body>
<h2>传照片</h2>
<form action="" method="post" enctype="multipart/form-data">
<div class="bootstrap-frm" style="margin :0px auto; width:990px;">
    <input style="height: 39px" type="text" name="title" class="form-control" id="exampleInputName2" placeholder="标题">
                <?php foreach($cateGory as $v):;?>
                <input type="radio" name="cateGory" id="inlineRadio1" value="<?=$v['name'];?>">
                    <span><?=$v['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <?php Endforeach;?>
    <textarea name="intro" placeholder="描述"></textarea>
    <input  type="file" class="form-group" name="path" id="doc" multiple="multiple" style="width:150px;" onchange="javascript:setImagePreviews();" accept="image/*">
    <div id="dd" style=" width:100%;"></div>
    <div><input type="submit" class="btn btn-info" style="width: 350px" value="上传"/></div>
</div>
</form>
<script>
    //下面用于多图片上传预览功能
    function setImagePreviews(avalue) {
        var docObj = document.getElementById("doc");
        var dd = document.getElementById("dd");
        dd.innerHTML = "";
        var fileList = docObj.files;
        for (var i = 0; i < fileList.length; i++) {
            dd.innerHTML += "<div style='float:left' > <img id='img" + i + "'  /> </div>";
            var imgObjPreview = document.getElementById("img" + i);
            imgObjPreview.style.width = '200px';
            imgObjPreview.style.display = 'block';
            imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);
            //console.log(docObj.files[i]);
       /*     if (docObj.files && docObj.files[i]) {
                //火狐下，直接设img属性
                imgObjPreview.style.display = 'block';
                imgObjPreview.style.width = '150px';
                imgObjPreview.style.height = '180px';
                //imgObjPreview.src = docObj.files[0].getAsDataURL();
                //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
                imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);
            } else {
                //IE下，使用滤镜
                docObj.select();
                var imgSrc = document.selection.createRange().text;
                alert(imgSrc)
                var localImagId = document.getElementById("img" + i);
                //必须设置初始大小
                localImagId.style.width = "150px";
                localImagId.style.height = "180px";
                //图片异常的捕捉，防止用户修改后缀来伪造图片
                try {
                    localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                    localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
                } catch (e) {
                    alert("您上传的图片格式不正确，请重新选择!");
                    return false;
                }
                imgObjPreview.style.display = 'none';
                document.selection.empty();
            }*/
        }
        return true;
    }
</script>

</body>
</html>
