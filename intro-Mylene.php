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
                <img src="./images/teacher/P/Mylene.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Sky</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL、TESOL、TESL</p>
                    <p>兴趣爱好：</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Sky.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Sky.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! I'm teacher Sky. I've been teaching English online for more than five years now. I take my duties as a teacher seriously and prapare thoroughly before each of my classes. I am very friendly, cooperative, and patient with my students. I am fond of watching American drama series and movies, listening to music, surfing the internet, reading books, and I also love cooking. I believe that learning is a beatiful thing that no one can take away from you. I am very passionate about learning and teaching. See you!</p>
                    <p> 大家好，我是Sky老师，已从事5年英语在线教育。工作态度端正，并课前及时备课。热情友好、擅于合作，并富有耐心。平时呢，喜欢看美剧、电影、听音乐、上网、读书、烹饪等。一直相信，学习是件快乐的事情，是任何人不能剥夺的。热衷学习和教学。拜拜~</p>
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