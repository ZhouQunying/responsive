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
                <img src="./images/teacher/P/Christine.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Christine</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL、TESOL、TESL</p>
                    <p>兴趣爱好：看电影、听音乐、烹饪等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Christine.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Christine.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi! My name is Christine and I am 29 years old. I have been teaching online and offline for about 3-4 years now. My previous students always tell me that I am very friendly and nice so I think my new and upcoming students will like me, too. I like trying out new things and going to different places whenever I get the chance to, but, I am not adventurous when it comes to tasting or trying out new delicacies or cuisine.</p>
                    <p>  嗨，大家好，我是Christine老师，今年29岁。现已从事线上和线下教育3-4年时间。教过学生对我的评价是热情友好，相信你们也会喜欢我的。平时呢，喜欢尝试新鲜的事物并一有机会就到各处旅游，但是，对于尝试新的菜品佳肴，我并不是十分热衷</p>
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