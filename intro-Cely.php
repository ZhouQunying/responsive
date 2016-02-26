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
                <img src="./images/teacher/P/Cely.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Cely</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Cely.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Cely.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi. I am Cely.I was able to teach high school students for four months. It was a great experience. Also, I taught young kids aging 2-5 years old. It was totally different. The experience was fun and I enjoy how kids handle their tasks. Lastly, I worked in a Korean company as an online teacher for at least a year. I had to make a big adjustment and the good thing I did. Teaching is a great adventure for me.</p>
                    <p>嗨，你们好！我是Cely。我教过高中生，也教过2-5岁的幼儿，这是两个完全不同的经历。教授幼儿是一个非常有趣的经历，我喜欢和孩子们一起找方法完成任务。此外，我还在一家韩国公司做过一年的在线教师。我喜欢教学，喜欢和你们在一起。期待与你们的见面！</p>
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