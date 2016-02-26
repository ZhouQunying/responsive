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
                <img src="./images/teacher/P/Sarah.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Sarah</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL、TESOL、TESL</p>
                    <p>兴趣爱好：看电视、旅游、和朋友出去玩</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Sarah.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Sarah.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi there,I am Sarah.I'm 29 years old. I have been teaching English for 5 years already and teaching is actually my passion.Although I studied nursing as my major I never felt the desire to practice it.I enjoy watching TV and hanging out with my friends.I am full of energy when I have class with students and I make sure I transfer my positive energy to my student so they would look forward to having class with me again.Studying English should be fun so I make sure to get to know my students first and be their friends then I try my best to help them to improve their skills.Let's learn English together!</p>
                    <p>大家好，我是Sarah，今年29岁，已有5年的英语教学经验，并且十分热衷教学。虽然我的专业是护理学，但我从未想实践。平时呢，喜欢看电视、和朋友出去玩等。上课时精力充沛并能感染学生，让他们期待下一节课的早日到来。学习英语是件快乐的事情，所以我会先了解学生并和他做朋友，然后帮助他提高学习英语的技巧。期待我们一起快乐的学习英语哦。</p>
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