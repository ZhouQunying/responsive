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
                <img src="./images/teacher/P/Khenneth.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Khen</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：看电影、听音乐、网上冲浪</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Khenneth.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Khenneth.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello there! My name is Khenneth Mari Feb Estabillo. You can call me KM for short. I'm 23 years old . I'm interested in watching movies, surfing the internet and reading different textbooks. I also love animals specially cats. I have a cat named "Owee". My favorite TV show is Power Rangers and different animations. I hope we could talk in class soon. I would like to know more about you as well. I'm so excited to meet you.</p>
                    <p>嗨，你们好！我是Khenneth Mari Feb Estabillo，你也可以叫我KM。我今年23岁。我喜欢看电影，网上冲浪，看各种不同的教科书。我也喜欢动物，尤其是猫。我有一只猫，叫Owee。我最喜欢的电视节目是超级战队和各种动画片。希望我们可以很快地在课堂中交流哦，也希望能更多的了解你。期待与你的见面！</p>
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