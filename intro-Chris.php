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
                <img src="./images/teacher/E/Chris.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Chris</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESOL、IELTS</p>
                    <p>兴趣爱好：旅游、户外活动等</p>
                    <p>擅长人群：<span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Chris.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Chris.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello,I’m Chris. I have taught ages 4 and up for three years abroad. It was a wonderful experience that I wish to continue.I taught in private schools and international tutoring centers. In the school setting, I taught children the acquisition of reading, writing, speaking and listening. In the tutoring center, I taught adults reading comprehension, grammatical composition and coversation. I have also tutored for the IELTS.I am a supportive teacher that analyzes how one learns. I take this knowledge and apply it to our lessons.Hope to see you soon.</p>
                    <p>你好，我是Chris，从事线上教育已有3年，教授过四岁以上的各年龄阶段的学生。热衷这样的教学方式，并希望一直从事。我不仅在私立学校教授过课程，还在国际学校任教。在私立学校时，教授小学生掌握阅读、写作、听说等技巧；在国际学校时，教授成人阅读理解、语法知识、对话等，也曾教授过雅思。喜欢钻研教学方式，因材施教.期待与你早日见面。</p>
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