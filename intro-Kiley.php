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
                <img src="./images/teacher/E/Kiley.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Kiley</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：阅读、旅游等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Kiley.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Kiley.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi! My name is Kiley. I am a US trained educator. I received my undergraduate degree in Education at Smith College and then obtained a Master’s degree in Education from Boston College. I taught elementary age children from ages 5-16  for nine years. In addition to teaching all general education subjects I focused on literacy skills including reading, writing and comprehension. I enjoy working with students on a one to one basis and learning about their individual learning style. Look forward to seeing you.</p>
                    <p>嗨，我是Kiley，一名美国老师哦。大学的时候，在史密斯大学，获得了教育学学士学位；在波士顿大学获得了教育学硕士学位。毕业后，从事初级教学，教授5-16周岁的孩子。除了教授主要课程外，还教授文学技巧，包括阅读、写作、理解等。喜欢和学生进行一对一的教学，互相学习，一起进步。期待与你早日见面哦！：）</p>
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