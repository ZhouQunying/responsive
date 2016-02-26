$(function(){
	$("#get_info").html('')
	
	var w,h,en=false,cn=false,te=false,mail=true
	
	$("input[name='en_name']").blur(function(){
		var reg = /^[A-z]{3,20}$/
		if(!reg.test($.trim($(this).val()))){
			$("#en_info").html("请填写正确的英文姓名")
			en = false
		}else{
			$("#en_info").html("")
			en = true
		}
	})
	
	$("input[name='cn_name']").blur(function(){
		var reg = /^[\u4e00-\u9fa5]{2,5}$/
		if(!reg.test($.trim($(this).val()))){
			$("#cn_info").html("请填写正确的中文姓名")
			cn = false
		}else{
			$("#cn_info").html("")
			cn = true
		}
	})
	
	$("input[name='tel']").blur(function(){
		var reg = /^1[0-9]{10}$/
		if(!reg.test($.trim($(this).val()))){
			$("#tel_info").html("请填写正确的手机号码")
			te = false
		}else{
			$("#tel_info").html("")
			te = true
		}
	})
	
	$("input[name='email']").blur(function(){
		if($.trim($(this).val()).length>0){
			var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,5})$/
			if(!reg.test($.trim($(this).val()))){
				$("#email_info").html("请填写正确的邮箱或不填")
				mail = false
			}else{
				$("#email_info").html("")
				mail = true
			}
		}else{
			$("#email_info").html("")
			mail=true
		}
	})
	
	$("#sub").click(function(){
		if(!en){$("#en_info").html("请填写正确的英文姓名")}
		if(!cn){$("#cn_info").html("请填写正确的中文姓名")}
		if(!te){$("#tel_info").html("请填写正确的手机号码")}
		if(!mail){$("#email_info").html("请填写正确的邮箱或不填")}
		if(!en || !cn || !te || !mail){
			return false
		}else{
			doSignup()
			$("#sub").html("提交中")
		}
	})

	$('#res').click(function(){
		$('#en_info,#cn_info,#tel_info,#get_info').html('');
	})
})


function doSignup(){
	var en_name = document.myform.en_name.value; 
	var cn_name = document.myform.cn_name.value; 
	var tel = document.myform.tel.value; 
	var email = document.myform.email.value;
	var xmlhttp=null;

	if(window.XMLHttpRequest){ 
		xmlhttp=new XMLHttpRequest(); 
	}else{ 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
	} 

	xmlhttp.onreadystatechange = function(){ 
		if(xmlhttp.readyState==4 && xmlhttp.status==200){ 

			var s = xmlhttp.responseText;
			eval("var info ="+s+";");
			
			if(!info['rlt']){
				if(info['msg'] == 'Parameter Error'){
					document.getElementById("get_info").innerHTML="参数错误，请重试";
				}
				if(info['msg'] == 'User Exists'){
					document.getElementById("get_info").innerHTML="用户已存在，请更换";
				}
			}else if(info['rlt']){
				document.getElementById("get_info").innerHTML="尊敬的"+info['trace']['cn_name']+"，您已成功申请"+info['trace']['schoolName']+"试听课程，请等待客服与您联系";
				document.getElementById("sub").innerHTML="提交";
				document.getElementById("sub").disabled=true;
				document.getElementById("sub").style.background='#bbb';
			}
		}
	} 

	xmlhttp.open('post','register.php',true); 
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	xmlhttp.send('en_name='+en_name+"&cn_name="+cn_name+"&tel="+tel+"&email="+email+"&school="+school);
}