<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--Bootstrap==End-->
    <title>Document</title>
    <style type="text/css">
        *{margin:0;padding:0;}
        .box{position: relative; }
        img{position: absolute; top:0;left:0;}
    </style>
    <script type="text/javascript" src="/static/photo_wall/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            //alert($("img").length)
            var Column=0;
            fun(); /* 当打开窗口，自己先调用一次*/
            $(window).resize(function(event) {   /*调整窗口大小*/
                fun();
            });
            function fun(){

                Column=parseInt($(window).width()/500);
                console.log($(window).width()/500);
                /*用窗口的宽度/ 图片的宽度即可     就能算出列数来 别忘了取整*/
                for(var i=0;i<$("img").length;i++)
                {
                    /*$("img").eq(i).css("left",i%3*192); 让盒子的索引号 取余 * 192  可以得到每个盒子的 left值。*/
                    /* 需要一个累加器*/
                    var num=0;   /* i=9*/
                    for(var j=i-Column;j>=0;j=j-Column)  /*遍历top值*/
                    {
                        num=num+$("img").eq(j).height()+10;
                    }
                    $("img").eq(i).stop().animate({"left":i%Column*518,"top":num},1500);
                }
            }
        });
    </script>
</head>
<body>
<div><a href="<?=url('index/index')?>" class="btn btn-default" style="width: 600px;font-size: 20px">返回</a></div>
<div class="box">
    <?php foreach ($ret as $k):;?>
        <?php foreach ($k as $v):;?>
            <?php if ($address = "老家") $matching = '/\w.('.$address.')\.(jpg|png)$/';
            $result = preg_match_all($matching,$v['key']);
            switch ($result){
                case 1:
                    echo "<img src=".$domain.'/'.$v['key']." alt='' style='width: 500px'/>";
            }
            ?>
        <?php Endforeach;?>
    <?php Endforeach;?>
</div>
</body>
</html>