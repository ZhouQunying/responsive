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
                <img src="./images/teacher/P/Blou.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Blou</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：旅游、阅读名著、看电影或英剧、和朋友出去玩</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Blou.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Blou.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Inhale… Exhale… Breathe and relax and let me take you on a little tour. You are about to enter my world. Indulge yourself into my 29 years of existence. My name is Blou. B- as in bubbly and brave. L- as in lovely, listener,and loves to travel and explore different cultures and languages. O- as in opinionated and outgoing. And U- as in understanding and undeniably confident. Now you know a little bit about me, next time it's my turn to know a bit a bit about you. I'm looking forward to our endless conversations.</p>
                    <p>吸气···呼气···，深呼吸放轻松，让我带你轻松一下。接下来，你将走进我的世界，了解我的一些人生经历。我是Blou老师，B代表幻想和勇敢；L代表可爱，倾听，并且喜欢旅游，探索不同的文化和语言；O代表主见，活泼开朗；而U呢，则代表善于理解，充满自信。哈哈，已经对我有一些了解了吧。下一次，让我也了解一下你吧。期待我们的早日见面，并互相交流。</p>
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