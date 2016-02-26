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
                <img src="./images/teacher/P/Michael.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Mike</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：跳舞、读书、看电影、旅游、和朋友出去玩、上网、听音乐等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Michael.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Michael.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi! Good day! I am Teacher Michael and I'm 33. I have been teaching English as Second Language to kids, youth, and adults for more than 2 years now. I am a very positive person and I love talking to people. Teaching is actually my passion because it inspires me to see that the lives of my students are being changed through our lessons. I can easily connect to my students, allowing me to build a healthy relationships with them. I love singing, dancing and listening to music. During my free time, I usually watch English movies and TV series. I also like to surf the internet. I would love to see you in class so we can learn together and have fun! See you! :)</p>
                    <p>大家好，我是Michael老师，今年33岁。从事英语作为第二种语言的教育已有两年多，教授过儿童、青少年和成人。性格开朗乐观，善于交谈。热爱教学，乐于看见学生的进步，并且容易和学生建立友谊关系。喜欢唱歌、跳舞、听音乐等，平时，看一些电影和电视剧，上上网。期待我们早日一起步入英语的乐园！Bye！:)</p>
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