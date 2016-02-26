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
                <img src="./images/teacher/E/Joseph.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Joseph</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：旅游、读书、写作</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Joseph.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Joseph.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Joseph and I live in Portland, Oregon, USA. For the past three years I have been teaching and tutoring English to non-English speakers. I started tutoring English to international students at my university in 2011. I got to spend a lot of one-on-one time with my students, helping them improve their conversational English, as well as helping them grasp concepts in English that they could not understand. After tutoring, I went to the vibrant city of Hong Kong to teach English to primary and secondary school students. I taught reading, writing, grammar, and phonics to students as young as 4 years old and up. I like teaching English because I enjoy helping students and seeing them grow in their ability to understand the language. Now, I want to help you to improve your English ability. Let's get started!</p>
                    <p>hi，大家好，我是Joseph，土生土长的美国人哦。过去三年，一直从事母语非英语的英语教学。大学期间就开始家教，辅导国际班的学生进行英语学习，一对一，帮助学生提高英语沟通能力及掌握英语盲点。毕业后，来到香港，一个充满活力的城市，从事中小学英语教学，教授过各年龄阶段的学生的阅读、写作、语法、语音等知识。本人热爱英语教学，乐于看到学生们语言学习能力的提高。期待我们早日见面，让我帮助你提升英语水平，一起享受英语的快乐！：）</p>
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