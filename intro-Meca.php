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
                <img src="./images/teacher/P/Meca.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Meca</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESOL、TESL</p>
                    <p>兴趣爱好：听音乐、唱歌、网上冲浪、阅读</p>
                    <p>擅长人群：<span>成人</span><span>少儿</span></p>
                    <p>擅长级别：<span>入门级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Meca.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Meca.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi! My name’s Teacher Meca. I’ve been in the teaching industry for 2 years now. Being a Teacher has been a childhood dream and I have passion for Teaching, especially children because I believe that education is one of the best treasures a person can have. I enjoy reading books and writing stories and poems. I’m also into music as I love singing. I love being around people and learning different cultures. I hope to see you in class!</p>
                    <p>嗨，我是Meca老师。我从事教学工作两年了。成为一名老师是我儿时的梦想，我对教学充满了热情，尤其是儿童教学，因为我相信教育是一个人可以拥有的最好的财富。我喜欢阅读，喜欢写小说和诗。我也喜欢音乐，喜欢唱歌。我喜欢与人交流，可以学习不同的文化。期待与你见面哦！</p>
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