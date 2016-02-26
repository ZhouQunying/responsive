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
                <img src="./images/teacher/P/Janice.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Jah</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESOL</p>
                    <p>兴趣爱好：看好莱坞大片、旅行、打乒乓球、听音乐、看书</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Janice.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Janice.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi, I’m Teacher Janice. You may also call me Teacher “Jah”. I have been teaching online for almost six years. I have experienced teaching kids and I love it. I enjoy a lot of things because I am an outgoing person. My hobbies are playing sports, reading, writing, and watching movies. I hope to meet you in my class. Let us enjoy and learn!</p>
                    <p>嗨，我是Janice，你也可以叫我Jah。我从事在线教学将近6年时间了。我有丰富的儿童教学经验，而且我很喜欢这项工作。我是一个外向的人，我有很多喜欢的东西。我的爱好有体育运动、阅读、写作、看电影。很期待在我的课堂见到你。让我们一起享受学习吧。</p>
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