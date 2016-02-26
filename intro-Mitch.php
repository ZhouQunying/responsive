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
                <img src="./images/teacher/P/Mitch.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Mitch</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：喜欢在线看电影，尤其是悬疑电影；喜欢旅行；喜欢美食；喜欢聊天</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Michel.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Michel.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>A pleasant day to everyone! I am Ms. Michel Cuaresma. I graduated with a degree in Secondary Education Major . I like to read books and watch movies online because I don’t have that much time to go out and drop by to the nearest movie house. I like suspense movies; in fact I’m a fan of the series “Wrong Turn”. Whenever I have a free time, I usually spend it with my family; we usually go out and spend some time to talk to each other. I like to travel; in fact I’m planning to visit a beach here. I like to eat, I like to talk, In short I love meeting new people.</p>
                    <p>大家好！我是Michel。大学时，我主修中等教育专业。我喜欢看书，喜欢在线看电影，因为我没有太多时间出去，即便是最近的电影院。我喜欢悬疑电影，实际上我是“致命弯道”系列电影的粉丝哦。无论什么时候，只要我有时间，我都是和家人一起度过，我们通常是出去一起聊天。我喜欢旅行，而且我正在计划去附近的一个海滩哦。我喜欢美食，喜欢聊天 。总而言之，我就是喜欢不断地认识新的人。</p>
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