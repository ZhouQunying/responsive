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
                <img src="./images/teacher/P/Blou.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Blou</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：旅游、阅读名著、看电影或英剧、和朋友出去玩</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span><span>专家级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Blou.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Blou.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Inhale… Exhale… Breathe and relax and let me take you on a little tour. You are about to enter my world. Indulge yourself into my 29 years of existence. My name is Blou. B- as in bubbly and brave. L- as in lovely, listener,and loves to travel and explore different cultures and languages. O- as in opinionated and outgoing. And U- as in understanding and undeniably confident. Now you know a little bit about me, next time it's my turn to know a bit a bit about you. I'm looking forward to our endless conversations.</p>
                    <p>吸气···呼气···，深呼吸放轻松，让我带你轻松一下。接下来，你将走进我的世界，了解我的一些人生经历。我是Blou老师，B代表幻想和勇敢；L代表可爱，倾听，并且喜欢旅游，探索不同的文化和语言；O代表主见，活泼开朗；而U呢，则代表善于理解，充满自信。哈哈，已经对我有一些了解了吧。下一次，让我也了解一下你吧。期待我们的早日见面，并互相交流。</p>
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