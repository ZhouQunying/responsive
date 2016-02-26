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
                <img src="./images/teacher/E/Robin.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Robin</p>
                    <p>国籍：英国</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：了解巴厘岛的加麦兰和舞蹈、旅游和阅读等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Robin.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Robin.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hi, my name is Robin. I have experience teaching English online to students from all over the world; from beginner to advanced level; with children and adults; and have taught conversational and business English classes as well as preparation classes for the IELTS and TOEIC exams. I also hold a Teaching Knowledge Test (TKT), certified by Cambridge English, and a first class honours degree in Music from Plymouth University, U.K. Because I am also learning a language myself (Indonesian), I understand how hard it can be as a student! Therefore I am always patient, friendly and encouraging. This is because I really enjoy meeting new people and helping them to learn English. In my spare time I enjoy studying Balinese gamelan and dance and I also love to travel and read. I can help you with all the elements of learning English and I look forward to meeting you soon!</p>
                    <p>嗨，大家好，我是Robin老师，从事线上教育，教授过世界各地的学生，包括各年龄阶段各水平，口语、商务英语、雅思、托业等各种课程。拥有剑桥英语TKT英语教学能力证书和英国普利茅斯大学一级荣誉音乐学位证书。因为我也在自学印度尼西亚语，所以我了解学生学习英语的困难。喜欢结识新的朋友并帮助他们学习英语，因此，具备耐心、友好和激励的心态来教授学生。平时呢，喜欢研究巴厘岛加麦兰和舞蹈，也喜欢旅游和阅读。相信我可以帮助你学习 英语的任何方面，期待与你早日见面！</p>
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