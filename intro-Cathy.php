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
                <img src="./images/teacher/P/Cathy.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Cathy</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESOL</p>
                    <p>兴趣爱好：读书、看电影</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Cathy.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Cathy.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi my name is Teacher Cathy. I’m 33 years old. I’ve been teaching English online since 2005. My students are Korean, Chinese, and Japanese. Most of my students are children. It’s fun to have class with kids who are enthusiastic to study English. I always make my class fun and Interesting. I make sure that my students enjoy & learn in class. During my spare time, I love reading books and watching English movies. I’m really excited and looking forward to see you in my class.</p>
                    <p>大家好，我是Cathy老师，今年33岁。2005年开始从事英语在线教育，教授过韩国，中国和日本的学生，且主要以儿童为主。本人热爱教育事业，认为给小朋友们上英语课是件很有意思的事情。常常把课堂氛围调动的生动有趣，让学生寓乐于学。平时呢，我喜欢读书、看电影。期待与你早日在课堂上见哦！</p>
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