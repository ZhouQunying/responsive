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
                <img src="./images/teacher/E/Ross.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Ross</p>
                    <p>国籍：南非</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：橄榄球、水球、冲浪、壁球、铁人三项、了解外国文化、旅游、烹饪等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Ross.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Ross.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello everyone! My name is Ross. I am a Native English Speaker currently working in Thailand, Phuket, teaching English at Kindergartens and Primary schools as well as Business English to adults at Hotels. I have a bachelor's degree from Nelson Mandela Metropolitan University and a TEFL certificate. I have been teaching and tutoring English for the past four years and I have been able to gain experiences with students of all ages and levels. I started tutoring English to International students online. The students came from various different countries such as China, Russia, Germany, Japan and Columbia.I was able to spend a lot of one-on-one time with my students, helping them improve their conversational skills, as well as helping them grasp key concepts in English that they were unable to understand during former, conventional English training. Why do I like teaching English? Because I enjoy helping students and seeing them grow in their ability to understand a new language and watching their progress as they begin to get more and more fluent. I believe, that teaching is the art of assisting discovery. Now, I want to assist you to discover your English skills. So“Let's get started!”</p>
                    <p>大家好，我是Ross，英语是我的母语，现今在泰国的普吉岛教授幼儿英语，初级英语，同时还在酒店教授成人商务英语。拥有纳尔逊.曼德拉大学的学士学位和TEFL证书。过去四年都在从事英语教育事业，并积累了教授各年龄阶段、各种水平的教学经验。之后开始从事线上教育，教授来自世界各地的学生，包括中国、俄罗斯、德国、日本、哥伦比亚等。竭尽全力帮助学生进行一对一的学习，帮助他们提高口语交际能力、掌握疑点难点等。我之所以喜欢英语教学，是因为能够帮助学生掌握一门新的语言，并见证他们的成长。教学时循序渐进的过程。希望我可以帮助你探索学习，让我们开始吧！</p>
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