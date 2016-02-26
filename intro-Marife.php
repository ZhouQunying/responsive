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
                <img src="./images/teacher/P/Marife.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Marife</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL、TESOL、TESL</p>
                    <p>兴趣爱好：品尝美食、旅游、读书等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Marife.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Marife.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>I am Teacher Rife. My interests are food, travel and leisure; as well as different languages and cultures. I love reading books, magazines and newspapers. Reading is my passion and I believe that it is one of the most effective ways of learning. I love to exchange conversation with people from all walks of life; and this also teaches me how to work with and learn from them. I am very much looking forward to teaching and learning from my students. I believe that this will enhance my intra and interpersonal skills. This is also a chance for me to share my learning and experience with my student(s) and hopefully make him or her become a well-rounded individual.</p>
                    <p>嗨，我是Rife老师。喜欢品尝美食、旅游和休闲活动，同时呢，对不同的语言文化也感兴趣。平时，喜欢读书、杂志和报纸等。热爱读书，并一直相信读书是学习的最好方式。善于与不同行业的人进行交流，取长补短。 期待早日与你们见面，教授你们英语知识同时也向你们学习。就让我把我的知识经验教授与你，助你早日成为一名多才多艺的优秀人才。</p>
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