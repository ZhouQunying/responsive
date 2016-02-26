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
                <img src="./images/teacher/P/Catherine.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Catherine</p>
                    <p>国籍：菲律宾</p>
                    <p>教师证书：TEFL、TESOL、TESL</p>
                    <p>兴趣爱好：上网、和家人出去旅游、和朋友见面、听音乐等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>中高级</span><span>高级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Catherine.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Catherine.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>I'm Catherine and I graduated from The National Teachers College with the degree of Bachelor in Elementary Education, major in English. I've been teaching English online for 6 years and off-line for about a year. I chose this career because teaching is my passion. To impart knowledge to my students is such a great privilege for me. I find it truly rewarding to witness their improvement in different learning areas.I love browsing the internet I usually read news and articles and I've learned a lot from this. I also like watching Hollywood movies and listening to English songs.Teaching is my passion...Learning is a great success... Look forward to seeing you.</p>
                    <p>大家好，我是Catherine老师，来自国立师范学院，初等教育学学士，主修英语专业。已从事在线英语6年，线下英语1年。因为喜欢教育，所以一直从事这份职业。能将自己的所学传授给学生是我的荣幸，并见证他们在不同领域的进步。平时呢，喜欢上网浏览新闻和一些有见解的文章，并吸收精华。同时也喜欢看好莱坞大片，听音乐。教学是我的激情···学习是一个伟大的成功。期待早日与你见面。</p>
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