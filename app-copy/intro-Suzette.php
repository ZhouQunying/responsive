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
                <img src="./images/teacher/P/Suzette.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Suze</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：玩音乐、读书、当志愿者</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Suzette.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Suzette.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! I am teacher Suzette! I've been teaching ESL for almost 5 years now. I am a person who loves reading-English pocketbooks to be exact. My favourite author is Agatha Christie, because of her tricky way in creating stories. I'm also into singing. I just sing whenever I feel sad because music alleviates my mood. I'm really excited to have fun with you in class! I'll be waiting...see you soon!</p>
                    <p>大家好！我是Suzette。我一直从事非母语英语课程教学工作，至今已有5年。我非常喜欢英语口袋故事。我最喜欢的作者是阿加莎•克里斯蒂，因为她讲述故事的方式总是那么的精妙。我也很喜欢唱歌。每当心情不好的时候，我就唱歌，因为唱歌能缓解我的情绪。我非常希望在课堂上能和你玩得开心。期待和你的见面哟！</p>
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