<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>互动英语</title>
    <link href="favicon.ico" rel="icon" />
    <link rel="stylesheet" media="screen and (max-width:480px)" href="css/mobile.css" />
    <link rel="stylesheet" media="screen and (min-width:480px) and (max-width:960px)" href="css/tablet.css" />
    <link rel="stylesheet" media="screen and (min-width:960px)" href="css/style.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/effect.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/decide.js"></script>

    <!--[if lt IE 9]>
        <link rel="stylesheet" media="screen and (max-width:480px)" href="css/mobile-ie.css" />
        <link rel="stylesheet" media="screen and (min-width:480px) and (max-width:960px)" href="css/tablet-ie.css" />
        <link rel="stylesheet" media="screen and (min-width:960px)" href="css/style-ie.css" />
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script src="js/selectivizr.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
        <script src="./js/PIE.js"></script>
        <script src="./js/ie-css3.js"></script>
    <![endif]-->
    <link href="css/video.css" rel="stylesheet" />
</head>
<body>
    <header class="header">
		<div class="head">
            <div class="logo">
                <img src="images/logo.png" />
            </div>
            <div class="right">
                <div class="tel">
                    <p>咨询电话：4008-886-905</p>
                    <p><a href="apply.php" target="_blank">申请免费试听</a></p>
                </div>
                
                <nav class="nav">
                    <ul>
                        <li><a href="index.php" target="_self">首页</a></li> 
                        <li><a href="about.php" target="_self">关于我们</a></li>
                        <li><a href="class.php" target="_self">课程体系</a></li>
                        <li><a href="teacher.php" target="_self">外教团队</a></li>
                        <li><a href="learn/my" target="_blank">学员中心</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <div>
        <aside class="aside_menu">
            <div><img src="./images/aside_menu.png" alt="" /></div>
        </aside>

        <aside class="aside_up">
            <div><img src="./images/aside_up.png" alt="" /></div>
        </aside>
    </div>

    <div class="content">
    	<div class="banner banner04">
            <div class="banner_img">
                <img src="./images/10.png" alt="banner">
            </div>   
        </div>

        <div class="teacher_info">
            <div class="info_tit">
                <h2>菲律宾老师详细资料</h2>
            </div>
            
            <section class="info info_1">
                <img src="./images/teacher/P/Ruth.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Ruth</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：看书、看电影、听有趣的故事，打篮球和羽毛球</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Ruth.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Ruth.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello everyone! My name is Ruth. I am a mother of 2. I like reading books, watching movies and hearing funny stories. In weekends, i spend my day playing with my kids, watching cartoons and eating snacks. I also play sports like basketball and badminton.Again this is Teacher Ruth and I am very excited to work and play with you soon.</p>
                    <p>大家好！我是Ruth。我有两个小孩。我很喜欢看书，看电影，听有趣的故事。周末，我都是和我的孩子们度过的，我们一起看动画片，一起吃零食。我也很喜欢篮球和羽毛球哦。呵呵，Ruth老师很期待能和你们一起学习哟！</p>
                </article>
            </section>
        </div>
	</div><!-- end content -->    

    <footer class="footer">
        <article class="footer_main">
            <p><a href="http://mis.121learn.com/login">管理员登陆</a></p>
            <div>
                <p>联系方式及地址</p>
            </div>
            <p>Copyright &copy;<time>2010-<?php echo date("Y") ?></time> Inc. All rights reserved. 互动英语版权所有 京ICP备10024580号</p>
        </article>
    </footer>    
</body>
<script src="js/video.js"></script>
</html>