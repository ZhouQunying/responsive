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
                <img src="./images/teacher/E/Daniel.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Daniel</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：玩音乐、读史书、看电影、学习新语言等</p>
                    <p>擅长人群：<span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>流利级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Daniel.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Daniel.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>My name is Daniel and I'm an American.  I graduated from Virginia Commonwealth University with a degree in music and afterwards, moved to Bali where I got TEFL and TKT (Teacher Knowledge Test) certifications to enable me to teach online.  I've been teaching English online for the last two years.  I've taught students from all over the world but most of my students are from China.  My hobbies include playing traditional Balinese music, known as "gamelan," reading about history, learning about different cultures, watching movies and learning a new language myself, namely Bahasa Indonesia.  I look forward to meeting you in my class very soon and helping you improve your English!</p>
                    <p>大家好，我是Daniel，来自美国。毕业于弗吉尼亚联邦大学，获得音乐学士学位，之后在巴厘岛获得TEFL和TKT证书，开始从事线上教育。过去两年一直在从事线上英语教育。教授过世界各地的学生，大部分来自中国。平时呢，喜欢玩巴厘岛的传统音乐，一种叫“加麦兰”的乐器、读史书、学习不同的文化知识、看电影、学习新的语言（印度尼西亚语）等。期待与你早日课堂上见哦，并一起快乐的学习英语。</p>
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