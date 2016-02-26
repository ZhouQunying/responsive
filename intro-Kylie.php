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
                <img src="./images/teacher/E/Kylie.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Kylie</p>
                    <p>国籍：澳大利亚</p>
                    <p>教师证书：TESOL</p>
                    <p>兴趣爱好：旅游、读书、写作、烹饪</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Kylie.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Kylie.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Kylie . For the past five years I have been teaching and tutoring English to non-English speakers. I like teaching English because I enjoy helping students and seeing them grow in their ability to understand the language. Now, I want to help you to improve your English ability. Let's get started!</p>
                    <p>hi，大家好，我是Kylie。过去五年，一直从事母语非英语的英语教学。我非常热爱英语教学，乐于看到学生们语言学习能力的提高。期待我们早日见面，让我帮助你提升英语水平，一起享受英语的快乐！：）</p>
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