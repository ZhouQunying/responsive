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
                <h2>欧美老师详细资料</h2>
            </div>
            
            <section class="info info_1">
                <img src="./images/teacher/E/Jason.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Jason</p>
                    <p>国籍：英国</p>
                    <p>教师证书：TESOL</p>
                    <p>兴趣爱好：音乐、舞蹈、户外活动等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>流利级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Jason.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Jason.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi there, my name’s Jason. I’m a qualified school teacher here in the UK where I’ve taught in the classroom for over ten years. I started teaching on-line two years ago after completing an English Teaching Certificate. I am passionate about finding new ways to help learners improve their English. My family live near a beautiful national park (an area of mountains and lakes) so we like to go for walks, cycle rides in the countryside and boat rides. I enjoy all kinds of music and dancing too. Well, it’s time to say ‘see you later’ and I look forward to speaking to you soon! Bye for now!</p>
                    <p>大家好，我是Jason，一名英国老师，已有10年的线下教育经验。从两年前获得了英语教学证书开始，从事线上教育。喜欢因材施教，帮助学生提高英语技能。我和我的家人居住在一个风景宜人的国家公园附近，有山有水，所以我们喜欢散步，骑自行车，划船等。本人还热衷各种音乐和舞蹈。好了，是时候说再见了，期待与你早日见面。拜拜！</p>
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