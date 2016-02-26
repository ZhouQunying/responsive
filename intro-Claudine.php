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
                <img src="./images/teacher/P/Claudine.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Claude</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：每天看英文电影，和孩子们一起玩耍、和朋友们一起说笑</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>中高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Claudine.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Claudine.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello. My name is Claudine Meneses or Claude for short. I am a simple person. I take joy in little, everyday things like watching English movies (except horror films), playing with my children and laughing with my friends. I guess that's what life is all about...doing things that you enjoy and being with the people you love.So here I am to tell you that I'd be teaching for the rest of my life. I see myself teaching until I grow old. I'm here to help you because that's what I love to do. Goodbye and have a nice day.</p>
                    <p>你好！我的名字是Claudine Meneses，简称Claude。我是一个简单的人。我的爱好是每天看英文电影（恐怖片除外），和我的孩子们一起玩耍，和我的朋友们一起说笑。我想这就是人生：做自己喜欢的事情，和自己爱的人在一起。所以说，我的余生都将在教学中度过。我是用我的生命在教学。活到老，教到老！和你一起学习，这是我喜欢做的事情。</p>
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