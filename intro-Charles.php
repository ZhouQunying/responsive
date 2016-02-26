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
                <img src="./images/teacher/E/Charles.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Charles</p>
                    <p>国籍：美国</p>
                    <p>教师证书：CELTA</p>
                    <p>兴趣爱好：旅游等</p>
                    <p>擅长人群：<span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Charles.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Charles.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! I am Charles and comes from Boston, Massachusetts, USA but I am currently travelling the world. I have lived in Ireland, France and Korea, and visited many other places. I hope to visit China some day! I have a bachelor's degree in English from the University of San Diego and a CELTA from the University of Cambridge. I have taught middle school and adult students in Korea and France, in classes of all sizes. My favorite part of teaching is helping my students find confidence in their speech and inspiring them to love their new language. Advanced, intermediate, or beginner, let’s work together to take your English to the next level!</p>
                    <p>大家好，我是Charles，来自美国曼彻斯特州波士顿市。现在呢，正在环球旅游。曾到过爱尔兰、法国、韩国等不同的国家，期待有一天能来到中国。大学时，主修英语专业，毕业于圣地亚哥大学，并在剑桥大学获得剑桥成人英语教学证书。之后，在韩国、法国等国家教授过中学生、成人等阶段的不同课程。本人热爱教学，喜欢鼓励学生用英语自信的表达观点，并激发他们喜欢英语。不管你是高级的、进阶级的，还是入门级的，让我们一起快乐的学习英语，成功抵达另一个阶段。</p>
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