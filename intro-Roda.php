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
                <img src="./images/teacher/P/Roda.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Roda</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：非常喜欢教育工作，热爱教学</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Roda.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Roda.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi there! Good morning,you can call me Teacher Roda. I’m a graduate of Secondary Education major in English. I’ve been teaching English to Koreans for three years now and I really love what I’m doing. I’ve taught different levels from kids to adults and even Senior citizens. I love teaching and it’s more exciting to do with kids. They are vulnerable, adorable and so cute. The progress of my students would be the most interesting part of doing this job. It serves as a reward and your hint to make a new room for the improvements of your teaching style. I would love to do this work for the rest of my life. Thank you</p>
                    <p>嗨，大家好！你可以叫我Roda老师，毕业于教育学院英语专业。我有三年教授韩国学生的工作经历，一直非常喜欢教育工作。我还教授过从小学到成人甚至老年人的学员。我热爱教学，和孩子一起上课更加有趣。孩子们十分天真，可爱。我的学生们的进步是这个工作最有趣的部分。学生的进步让我感觉很有成就感。我会终身投入教育工作。谢谢！</p>
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