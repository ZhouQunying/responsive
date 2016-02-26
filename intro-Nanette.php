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
                <img src="./images/teacher/E/Nanette.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Nanette</p>
                    <p>国籍：美国</p>
                    <p>教师证书：</p>
                    <p>兴趣爱好：旅游、读书、写作</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Nanette.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Nanette.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Nanette Jaynes, PhD, was born and grew up in Virginia in the United States. Always fascinated by language. I majored in Russian for my bachelor’s degree. Later I discovered my love of literature and began my life-long of study of Shakespeare for my master and PhD degrees. I traveled abroad and discovered the joys of teaching English to East Asian students. Since then I has taught hundreds of students from all over the world. Hope to meet you soon.</p>
                    <p>hi，大家好，我是Nanette，土生土长的美国弗吉尼亚州人。一直对语言有极大的兴趣。大学本科学的俄语，后来发现自己特别喜欢文学，硕士和博士时从事莎士比亚文学研究。喜欢旅游并热衷于东亚学生的英语教学，所以我的学生遍布全世界。课堂上见哦！</p>
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