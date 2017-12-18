<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tzhe私人空间</title>
    <link rel="stylesheet" href="/static/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/home/css/flexslider.css">
    <link rel="stylesheet" href="/static/home/css/main.css">
    <link rel="stylesheet" href="/static/home/css/responsive.css">
    <link rel="stylesheet" href="/static/home/css/animate.min.css">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header Section -->
<section class="tophead" role="tophead">
    <!-- Navigation Section -->
    <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="#">tzhe·私人空间</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-family: 'Adobe 楷体 Std R'"><b style="font-size: 30px">欢</b>迎回来【<?=$uName['uname'];?>】</b>

            <nav class="navigation" role="navigation">

                <ul class="primary-nav">
                    <li><a href="#header-slider">个人中心</a></li>
                    <li><a href="#services">我的日志</a></li>
                    <li><a href="#portfolio">个人分享</a></li>
                    <li><a href="#testimonials">我的相册</a></li>
                    <li><a href="#contact">我的音乐</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- Navigation Section -->
</section>
<!-- Header Section -->
<!-- Slider Section -->
<section id="header-slider" class="section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="/static/home/images/slider/slid1.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>感恩之心</h3>
                    <p>你时刻关心别人，对别人发生兴趣，在两个月的时间里所交的朋友，要比只想让别人关心你，对你发生兴趣，在两年的时间里所交的朋友还多</p>
                </div>
            </div>
            <div class="item"> <img src="/static/home/images/slider/slid2.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>我会对你好</h3>
                    <p>我能叫你做任何事情的办法，把你所需要的给你</p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
</section>
<!-- Slider Section -->
<!-- Service Section -->
<section id="services" class="section services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="services-content">
                    <h4>学而不思则罔 思而不学则殆</h4>
                    <p>-----只是学习却不思考就会迷惑而无所得，只是思考却不学习就会精神疲倦而无所得.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services-content">
                    <h5>时刻分享</h5>
                    <ul>
                        <li><a href="#">留下您的分享</a></li>
                        <li><a href="#">你吃鸡我喝汤</a></li>
                        <li><a href="#">曝光事件</a></li>
                        <li><a href="#">好人好事</a></li>
                        <li><a href="#">项目开发</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services-content">
                    <h5>阅读篇</h5>
                    <ul>
                        <li><a href="#">最新新闻</a>&nbsp;&nbsp;&nbsp;<span style="font-size: 10px">更新时间</span>：</li>
                        <li><a href="#">吃货世界</a></li>
                        <li><a href="#">留言板</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

<!-- portfolio grid section -->
<section id="portfolio" class="section portfolio">
    <div class="container-fluid">
        <div class="row">
            <li><a href="<?=url('index/photo');?>">添加我的相册</a></li>
            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoBeijing');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>Beijing一游</h3>
                            <h4>北京</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 portfolio-item"><a href="<?=url('index/photoGansu');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>嘉峪关一游</h3>
                            <h4>嘉峪关</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-2.jpg" class="img-responsive" alt=""> </a> </div>
            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoLaojia');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>老家畅游</h3>
                            <h4>self</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-3.jpg" class="img-responsive" alt=""> </a> </div>
            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoOther');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>随时随拍</h3>
                            <h4>any time</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-4.jpg" class="img-responsive" alt=""> </a> </div>
            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoChongqing');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>重庆经历</h3>
                            <h4>重庆-></h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-5.jpg" class="img-responsive" alt=""> </a> </div>
            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoChengdu');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>成都畅游</h3>
                            <h4>成都-></h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-6.jpg" class="img-responsive" alt=""> </a> </div>

            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoGansu');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>甘肃游</h3>
                            <h4>甘肃有</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-6.jpg" class="img-responsive" alt=""> </a> </div>


            <div class="col-sm-6 portfolio-item"> <a href="<?=url('index/photoXian');?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <h3>西安一游</h3>
                            <h4>西安</h4>
                        </div>
                    </div>
                    <img src="/static/home/images/portfolio/work-6.jpg" class="img-responsive" alt=""> </a> </div>
        </div>
    </div>
</section>
<!-- portfolio grid section -->

<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"该醒醒" </h1>
                                <p>我不知道什么叫完美，我只知道全力以赴去完成；哪怕要我变的自私</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"不用努力做自己;顺其自然就好吧."</h1>
                                <p>该醒醒</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"人生经历...." </h1>
                                <p>话少；话多；话少；</p>
                            </blockquote>
                        </div>
                    </li>
<!--                    <li>-->
<!--                        <div class="col-md-12">-->
<!--                            <blockquote>-->
<!--                                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elitPhasellus non dolor nibh. Nullam elementum tellus pretium feugiat. Cras dictum tellus dui sollcitudin." </h1>-->
<!--                                <p>Kristy Gabbor, Martix Media</p>-->
<!--                            </blockquote>-->
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->

<!-- footer section -->
<footer id="contact" class="footer">
    <div class="container-fluid">
       <h3>不要迷茫、该醒醒.</h3>
    </div>
</footer>
<!-- footer section -->

<!-- JS FILES -->
<script src="/static/home/js/jquery.min.js"></script>
<script src="/static/home/js/bootstrap.min.js"></script>
<script src="/static/home/js/jquery.flexslider-min.js"></script>
<script src="/static/home/js/retina.min.js"></script>
<script src="/static/home/js/modernizr.js"></script>
<script src="/static/home/js/main.js"></script>
</body>
</html>