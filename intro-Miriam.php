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
                <img src="./images/teacher/E/Miriam.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Miriam</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESOL</p>
                    <p>兴趣爱好：旅游等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Miriam.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Miriam.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello. My name is Miriam Shir. I live in Miami, Florida, and I love my job teaching English to international students. My favorite part of my job is getting to know my students and sharing our cultures. I have taught hundreds of students of all ages, from 4 – 84, and always use creative, fun techniques to make my students comfortable and successful. I am proud to know I have helped my students reach their goals as students and professionals, including doctors, business administrators, lawyers, teachers, engineers, and political leaders. I have taught courses dedicated to students’ specific professional needs, including TOEFL Preparation, Business English, and English for Engineers. I have my Bachelor’s Degree from the University of Florida and my English Teaching Certification and ESOL Teaching Endorsement from the State of Florida in the United States.English is my native language, but I also speak Spanish pretty well. I know a little French as well. I have traveled throughout the U.S. and to countries in the Caribbean, Europe, the Middle East, and Asia, and I have met wonderful people everywhere I go. I hope to travel much more in the future.I look forward to speaking with you soon!</p>
                    <p>大家好，我是Miriam Shir，住在弗罗里达州迈阿密市。热爱英语教学，喜欢和学生分享我们之间的不同文化差异。教授过各年龄阶段的学生，最小的4岁，最大的84岁，哈哈，差距很大吧。课堂上喜欢用新颖有趣的教学方式来吸引学生的注意力，让学生快乐的掌握英语知识。能帮助学生达到学习目标是最值得我骄傲的，而且学生涉及各行各业，例如，医生、商务经理、律师、教师、工程师、政府工作人员等。致力于满足学生的需求，包括托福、商务英语、职业英语等。本人毕业于弗洛里达州大学，获得英语教师资格证，并得到了美国弗洛里达州关于ESOL的认可证书。英语是我的母语，但我还熟练掌握了西班牙语，略懂法语。喜欢旅游，游览过美国、加勒比海、欧洲、中东和亚洲，并结识了许多朋友。希望以后能到更多的地方旅游。期待早日认识你，我们一起学习英语。：）</p>
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