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
                <img src="./images/teacher/E/Makayla.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Makayla</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESOL、TESL</p>
                    <p>兴趣爱好：旅游、读书、写作、绘画等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Makayla.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Makayla.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Makayla Vehorn. I was born in Arizona, US and currently live in California, US. I am a native English-speaker but I also learned how to speak Italian and some Spanish. I have experience teaching English to foreign students of all backgrounds and ages at a Language School. I used to be a full-time volunteer teacher for six years and still enjoy doing it weekly. I love teaching in a creative, goal-oriented way! One of my favorite things is seeing students progress in their language abilities. I really enjoy meeting new people and learning about different cultures. Traveling is something I love to do! My interests also include reading, writing, and doing art. I enjoy outdoor activities, such as running and hiking. I love to make the learning process fun and exciting. I really hope to meet you soon!</p>
                    <p>Hi，大家好，我是Makayla，生在美国长在美国哦。英语是我的母语，我还学习了意大利语和西班牙语，因为学无止境。曾在一家语言学校教授英语课程，从儿童到成人都接触过。平时呢，喜欢当志愿者，全职的老师，已经6年了，现在有时间仍然会去帮忙。擅长目标明确、具有创意的教学方式，而令我最高兴的是，看见学生的进步。喜欢结识新朋友、了解不同的文化特色。我的兴趣颇多，如：旅游、读书、写作、绘画等；平时还喜欢做运动，如：跑步、徒步旅行等。我热爱教学，并喜欢让课堂充满乐趣和欢乐，相信你一定会喜欢的。</p>
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