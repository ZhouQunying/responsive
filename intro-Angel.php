<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php include("./html/meta.html") ?>
    <link href="css/video.css" rel="stylesheet" />
</head>
<body>
    <header class="header">
		<?php include("html/header.html") ?><!--end head-->	
    </header>
    
    <div>
        <?php include("html/aside.html") ?>
    </div><!-- end aside -->

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
                <img src="./images/teacher/P/Angel.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Angel</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TOEIC</p>
                    <p>兴趣爱好：看书、画画、看电视，认识新朋友，网上冲浪，和朋友们网上聊天</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Angel.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Angel.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi, I’m Angel. Most of the time, I’m at work, but during my free time, I usually do a lot of things. My hobbies are reading, drawing, watching TV and sometimes hanging out with friends. I like knowing people. I also love surfing the internet and chatting with my online friends. However, if my friends aren’t available, I usually spend time with my nephews. There are also times that I just hang out alone, but I prefer being with people mosttime. I’m very excited to get to know you. I’m looking forward to being your teacher. I hope to meet you soon.</p>
                    <p>你好！我是Angel。大多数时间，我都在工作。但是业余时间，我会做很多事情。我的爱好是看书，画画，看电视，有时也和朋友们闲逛。我喜欢认识新的朋友，也喜欢网上冲浪，和朋友们网络聊天。不过，当我的朋友们没有时间时，我通常和我的侄子玩。有时候我也会独自出去逛，不过大多数时间，我还是喜欢和朋友们在一起。期待认识你，期待成为你的老师！</p>
                </article>
            </section>
        </div>
	</div><!-- end content -->    

    <footer class="footer">
        <?php include("./html/footer.html") ?>
    </footer>  
</body>
<script src="js/video.js"></script>
</html>