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
                <img src="./images/teacher/E/Daisy.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Daisy</p>
                    <p>国籍：加拿大</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：阅读、写作、游泳、户外活动等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Daisy.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Daisy.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Daisy, a certified teacher with a Master’s in Education and a Bachelor’s in French, Spanish, and Italian. I am very passionate about teaching English as a Second Language. I have been teaching Languages, History, and working as a tutor for various subjects for the past 5 years. I loves the inquisitiveness and energy a student brings to the ESL classroom. When I am not teaching, I enjoy reading, writing, swimming, and getting outdoors as much as possible. Hope to see you soon and have a happy time!</p>
                    <p>大家好，我是Daisy老师，拥有教育学硕士学位和法语、西班牙语、意大利语学士学位。乐于从事英语作为第二语言的教学，过去的5年，一直在教授语言、历史等不同的学科。喜欢看见学生在课堂上表现的的求知欲和活力。闲暇时间，喜欢阅读、写作、游泳、户外活动等。希望能早日与你见面，一起遨游在英语的乐园。：）</p>
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