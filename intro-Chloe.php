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
                <img src="./images/teacher/E/Chloe.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Chloe</p>
                    <p>国籍：加拿大</p>
                    <p>教师证书：TEFL</p>
                    <p>兴趣爱好：交朋友、旅游、攀岩等</p>
                    <p>擅长人群：<span>少儿</span><span>青少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>进阶级</span><span>高阶级</span><span>流利级</span><span>精通级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Chloe.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Chloe.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Chloe graduated from the University of British Columbia. As a teaching assistant at UBC I realized my passion for teaching.  For the past three years I have worked with hundreds of English language learners of all ages, teaching everything from conversation to essay writing. I love including different subjects and topics into my English lessons too, like science! I really enjoy watching my students progress in their English ability, and I find it really inspiring when my students can share their humour and interests with me in English. I love meeting new people and talking about our different cultures and hobbies. I travel whenever I can, and I enjoy rock climbing, swing dancing, and playing the drums. I’m looking forward to meeting you!</p>
                    <p>大家好，我是Chloe，毕业于加拿大英属哥伦比亚大学。大学时，从事曾助教工作，当时的我就发现自己对教授英语非常感兴趣。过去的三年，和数百名、各年龄阶段的英语学习者一起学习，教授过所有科目，从对话到论文写作。自己呢，也很喜欢教授学科英语教学，比如，科学。我很高兴能够见证学生们的进步，同时学生们愿意和我分享学习英语的快乐。平时呢，喜欢交朋友，互相了解不同的文化差异和爱好，有时间就会旅游，也喜欢攀岩，跳舞、打鼓等。期待与你早日见面。：）</p>
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