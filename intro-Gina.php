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
                <img src="./images/teacher/E/Gina.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Gina</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESOL、TESL</p>
                    <p>兴趣爱好：写博客</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Gina.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Gina.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi, I'm Gina. Highly talented and accomplished managerial professional with more than 15 years of management experience in finance and teaching. Tutor and supervisor of college tutoring center providing grammar, writing and literature tutoring to college students. Freelance as guest and ghost blogger, provide proofreading and editing services for academic, business and creative writing including screenwriting and novels/short stories. Courses taught include: study skills, ESL, Grammar, Sentence Writing, Paragraph Writing, English Composition, Introduction to Literature and so on. So I am experienced.</p>
                    <p>大家好，我是Gina，拥有丰富的长达15年的金融和教学管理经验。曾担任大学生助教，教授语法、写作、文学等课程。平时呢，是一个自由撰稿者，写写博客，校对一些有关学术、贸易、文学创作的文章，如：电影剧本、小说或短故事等。这些年教授过的有学习技巧培训，非母语课程，语法，短句、小文章、英语论文写作，文学等课程，所以我的经验很丰富。期待我们早日见面。</p>
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