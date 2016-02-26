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
                <img src="./images/teacher/E/Fern.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Fern</p>
                    <p>国籍：澳大利亚</p>
                    <p>教师证书：TESOL、TESL</p>
                    <p>兴趣爱好：读书、冲浪、旅游、慢跑、了解不同文化</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Fern.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Fern.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>I am a natural communicator and I love language. My interests include writing, speaking and learning about different cultures. I am an experienced tutor and I have a love of teaching. I have a communicative approach with a task based focus, so I would have to say my approach is eclectic. I am very student focused and I like to tailor the lesson to suit the student’s needs. My methods include techniques such as games, conversations, role play and worksheets.</p>
                    <p>嗨，大家好，我是Fern。不要紧张哦，我是一位很和蔼的老师，钟爱语言，喜欢写随笔，聊天，了解不同的文化差异等。热爱教学，经验丰富，且教学方法不拘一格，能为学生量身定做课程，如设计游戏、对话、角色扮演等一系列课堂活动。课堂上见哦！</p>
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