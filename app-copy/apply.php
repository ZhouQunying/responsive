<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>互动英语</title>
    <link href="favicon.ico" rel="icon" />
    <link rel="stylesheet" media="screen and (max-width:480px)" href="css/mobile.css" />
    <link rel="stylesheet" media="screen and (min-width:480px) and (max-width:960px)" href="css/tablet.css" />
    <link rel="stylesheet" media="screen and (min-width:960px)" href="css/style.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/effect.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/decide.js"></script>

    <!--[if lt IE 9]>
        <link rel="stylesheet" media="screen and (max-width:480px)" href="css/mobile-ie.css" />
        <link rel="stylesheet" media="screen and (min-width:480px) and (max-width:960px)" href="css/tablet-ie.css" />
        <link rel="stylesheet" media="screen and (min-width:960px)" href="css/style-ie.css" />
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script src="js/selectivizr.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
        <script src="./js/PIE.js"></script>
        <script src="./js/ie-css3.js"></script>
    <![endif]-->
</head>
<body class="apply_page">
	<div class="apply_content">
		<div class="apply_box">
			<p>申请免费试听</p>
			<form action="" name="myform" onsubmit="return false" autocomplete="off">
				<lable for="en_name">英文姓名&nbsp;:&nbsp;</lable>
				<input type="text" name="en_name" placeholder="必填，3-20个英文字母" required pattern="^[A-z]{3,20}$" />
				<i id="en_info"></i>

				<lable for="cn_name">中文姓名&nbsp;:&nbsp;</lable>
				<input type="text" name="cn_name" placeholder="必填，2-5个中文" required pattern="^[\u4e00-\u9fa5]{2,5}$" />
				<i id="cn_info"></i>

				<lable for="number">手机号码&nbsp;:&nbsp;</lable>
				<input type="text" name="tel" placeholder="必填，11位手机号码" required pattern="^1[0-9]{10}$" />
				<i  id="tel_info"></i>

				<lable for="email">电子邮箱&nbsp;:&nbsp;</lable>
				<input type="email" name="email" placeholder="如：1******@qq.com" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,5})$" />
				<i id="email_info"></i>
				
				<input type="reset" value="重填" id="res"/>
				<input type="submit" value="提交" id="sub" />
			</form>
			<p id='get_info'></p>
			<a class="back">&lt;&lt;&nbsp;返回</a>
		</div>
	</div>
</body>
<script src="js/school.js"></script>
<script src="js/apply.js"></script>
</html>