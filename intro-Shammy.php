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
                <img src="./images/teacher/P/Shammy.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Shammy</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：上网、烹饪、社交网络、阅读博客</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Shammy.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Shammy.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello there! My name is Teacher Shammy, I have been teaching English as Second Language for 2 years now. I had experiences teaching Koreans and Chinese students like you. I enjoy teaching because I don’t just teach but I also learn from my students. My students loved me because I make sure that they’re having fun in my class. I love traveling, I love trying exotic food (I have eaten Crocodile in Palawan, Philippines), I love taking pictures and sharing it to other people thru social networking sites like Facebook and Instagram, I love talking to other people and learn how cultures of different countries are also different from each other but they can still connect to one another. I am so excited to share more about myself and know more about you as well, so I hope to see you in my class one of these days. Have a nice day!</p>
                    <p>你好，我是Shammy老师，有两年的英语教学经验。我有教授韩国学生、中国学生的经验。我热爱教学因为不仅可以传授知识还可以从学生身上学到很多。学生们都很喜欢我，因为我的课堂非常有趣。我的爱好有很多，喜欢旅游、品尝美食、拍照并分享在社交网络上，如Facebook、Instagram等。喜欢和他人沟通，因为可以了解不同文化的差异。希望能尽早在课堂上见到你，这样我就可以分享彼此的故事哦，祝你心情愉快！</p>
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