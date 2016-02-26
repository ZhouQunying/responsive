<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php include("./html/meta.html") ?>
</head>
<body>
    <header class="header">
		<?php include("html/header.html") ?>
    </header>

    <div class="aside">
    	<?php include("html/aside.html") ?>
    </div><!-- end aside -->

    <div class="content index_content">

	    <div class="banner">
			<div class="slider">
				<ul class="slider__wrapper">
					<li class="slider__item"><div class="box"><img class="img-responsive" src="./images/1.png"/></div></li>
					<li class="slider__item"><div class="box"><img class="img-responsive" src="./images/2.png"/></div></li>
					<li class="slider__item"><div class="box"><img class="img-responsive" src="./images/3.png"/></div></li>
					<li class="slider__item"><div class="box"><img class="img-responsive" src="./images/4.png"/></div></li>
				</ul>
			</div>
		</div>

	    <div class="main">

		    <section class="section_01">
		    	<div class='font'>
		    		<h2>在线英语课堂精彩瞬间</h2>
		    		<div class="moment">
			    		<img src="./images/girl_side.png" alt="" />
			    		<img src="./images/girl.png" alt="" />
		    		</div>
		    	</div>
		    </section><!-- end section_01 -->

		    <section class="section_02">
		    	<?php include("./html/diary.html") ?>
		    </section><!-- end section_02 -->

		   	<section class="section_03">
		   		<?php include("./html/teacher.html") ?>
		   	</section><!-- end section_03 -->

		   	<section class="section_04">
			   	<div class="font">
			   		<h2>简单快捷的上课流程</h2>
			   		<div class="section_04_main">
			   			<div class="step_summary">
			   				<p>课前准备</p>
			   				<p>设备调试 &gt; 免费体验课 &gt; 获取水平评测报告</p>
			   			</div>
			   			<div class="step_detials">
			   				<div class="step">
			   					<p>第一步<br/>学员登陆</p>
			   					<p>登陆学员中心</p>
		   					</div>
			   				<div class="step">
			   					<p>第二步<br/>进入课程</p>
			   					<p>找到电子教室入口</p>
		   					</div>
			   				<div class="step">
			   					<p>第三步<br/>开始上课</p>
			   					<p>进入电子教室，开始你<br/>的在线英语课堂之旅吧！</p>
		   					</div>
			   				<div class="stepline"></div>
			   			</div>
			   		</div>
		   		</div>
		   	</section><!-- end section_04 -->
	    </div><!-- main -->
	</div><!-- end content --> 

    <footer class="footer">
    	<?php include("./html/footer.html") ?>
    </footer>  
</body>
<script src="js/glide.min.js"></script>
</html>