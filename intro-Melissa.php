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
                <img src="./images/teacher/E/Melissa.jpg" alt="" />
                <h3>基本资料</h3><span>Basic information</span>
                <article>
                    <p>昵称：Melissa</p>
                    <p>国籍：美国</p>
                    <p>教师证书：TESL</p>
                    <p>兴趣爱好：美术、手工艺</p>
                    <p>擅长人群：<span>少儿</span><span>成人</span></p>
                    <p>擅长级别：<span>入门级</span><span>基础级</span><span>流利级</span></p>
                    <p>擅长课程：<span>综合</span><span>口语</span><span>写作</span><span>商务</span><span>free talk</span></p>
                </article>
            </section>

            <section class="info info_2">
                <h3>自我介绍</h3><span>Self-Appraisal</span>

                <div id="video">
                    <video class="video-js vjs-default-skin" controls preload="none" poster="images/video.jpg" data-setup="{}">
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Melissa.mp4" type='video/mp4' />
                        <source src="http://7sbxpa.com1.z0.glb.clouddn.com/Melissa.mp4" type='video/webm' />
                        您的浏览器不支持该视频，请更换浏览器后重试。
                    </video>
                </div>
                
                <article>
                    <p>Hello! My name is Melissa. I am an American who was born and raised in the Southern United Sates. I hold a bachelor’s degree in English from the University of Illinois at Chicago. In my degree program, I studied writing, grammar, and literature. I love to travel and learn about cultures around the globe. Currently, I am studying French and Italian and I hope to live in Italy one day. I also love arts and crafts. I enjoy making clothes and sharing crafts with friends and new people wherever I go.Before I began teaching, I worked as a volunteer ESL tutor in Chicago. After graduation, I earned my CELTA and taught for two years in Asia. I teach both adults and children, and I feel I am very lucky be a teacher because I can share my love of the English language with many people.I believe that learning English should be fun. Students should always have a positive learning experience so that they will learn as much as possible. I hope to see you soon!</p>
                    <p>嗨，大家好，我是Melissa老师，土生土长的美国人哦。大学时，主修英语专业，学习写作、语法、文学等专业知识。喜欢到处旅游，体验不同的文化习俗。学无止境，现在我还坚持学习法语和意大利语，期待有一天能定居到意大利。热爱艺术、手工艺，如缝制衣服等，外出游玩时喜欢和朋友欣赏工艺品。大学毕业前，我在芝加哥做非母语英语课程助教；毕业后，取得了剑桥成人英语教学证书，并在亚洲教学。教授郭儿童和成人。我喜欢当老师，可以把英语知识传授给更多的朋友，而且我相信学习英语是件快乐的事情。对英语充满兴趣时学好英语的前提，相信我们很快会见面的。</p>
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