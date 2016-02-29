<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php include("./html/meta.html") ?>
    <base target="_blank"/>
</head>
<body>
    <header class="header">
		<?php include("html/header.html") ?><!-- end head -->	
    </header>
    
    <div>
        <aside class="aside_menu">
            <div><img src="./images/aside_menu.png" alt="" /></div>
        </aside>

        <aside class="aside_up">
            <div><img src="./images/aside_up.png" alt="" /></div>
        </aside>
    </div>

    <div class="content">
    	<div class="banner banner04">
            <div class="banner_img">
                <img src="./images/10.png" alt="banner">
            </div>   
        </div>

        <section class="teacher_sec">
            <div class="teacher_tit">
                <h2>欧美老师</h2>
                <a href="teacher-e.php">点击查看更多欧美老师</a>
            </div>
            <div class="teacher_avatar teacher_div">
                <div><a href="intro-Gina.php"><img src="./images/teacher/E/Gina.jpg" alt="" /></a><span>Gina</span></div>
                <div><a href="intro-Nanette.php"><img src="./images/teacher/E/Nanette.jpg" alt="" data-position="top_40"/></a><span>Nanette</span></div>
                <div><a href="intro-Ana.php"><img src="./images/teacher/E/Ana.jpg" alt="" data-position="top_10"/></a><span>Ana</span></div>
                <div><a href="intro-Miriam.php"><img src="./images/teacher/E/Miriam.jpg" alt="" /></a><span>Miriam</span></div>
                <div><a href="intro-Charles.php"><img src="./images/teacher/E/Charles.jpg" alt="" /></a><span>Charles</span></div>
                <div><a href="intro-Jason.php"><img src="./images/teacher/E/Jason.jpg" alt="" /></a><span>Jason</span></div>
            </div>
        </section>

        <section class="teacher_sec">
            <div class="teacher_tit">
                <h2>菲律宾老师</h2>
                <a href="teacher-p.php">点击查看更多菲律宾老师</a>
            </div>
            <div class="teacher_avatar teacher_div">
                <div><a href="intro-Janice.php"><img src="./images/teacher/P/Janice.jpg" alt="" /></a><span>Janice</span></div>
                <div><a href="intro-Mitch.php"><img src="./images/teacher/P/Mitch.jpg" alt="" /></a><span>Mitch</span></div>
                <div><a href="intro-Meca.php"><img src="./images/teacher/P/Meca.jpg" alt="" /></a><span>Meca</span></div>
                <div><a href="intro-Suzette.php"><img src="./images/teacher/P/Suzette.jpg" alt="" /></a><span>Suzette</span></div>
                <div><a href="intro-Michael.php"><img src="./images/teacher/P/Michael.jpg" alt="" /></a><span>Michael</span></div>
                <div><a href="intro-Christian.php"><img src="./images/teacher/P/Christian.jpg" alt="" /></a><span>Christian</span></div>
            </div>
        </section>
	</div><!-- end content -->    

    <footer class="footer">
        <article class="footer_main">
            <p><a href="http://mis.121learn.com/login">管理员登陆</a></p>
            <div>
                <p>联系方式及地址</p>
            </div>
            <p>Copyright &copy;<time>2010-<?php echo date("Y") ?></time> Inc. All rights reserved. 互动英语版权所有 京ICP备10024580号</p>
        </article>
    </footer>  
</body>
</html>