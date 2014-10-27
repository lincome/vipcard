<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电子</title>
<style type="text/css">
body {
font-size: 12px;
text-align: center;
margin: 0px;
padding: 0px;
}
#pic{
margin:0 auto;
width:800px;
padding:0;
border:0px solid #333;
}
#pic img{
max-width:850px;
width:expression(document.body.clientWidth>document.getElementById("pic").scrollWidth*9/10? "780px": "auto" );
border:0px dashed #000;
}
</style>
<script language="javascript">
        //JS验证输入的内容
        function checkInput()
        {
            var txtName=document.getElementById("cardid");
            var lblMsg=document.getElementById("lblMsg");
            
            //创建正则表达式
            var re=/^[0-9]{12,13}$/; //只输入数字正则
            //var re=/^[u4e00-u9fa5]{1,10}$/; //只输入汉字的正则
               
            if(txtName.value.search(re)==-1)
            {
                lblMsg.innerText = "请输入数字，字符介于12到13个。";
                //lblMsg.innerText = "请输入汉字，字符不能超过十个。";
                return false;
            }
            else
            {
                lblMsg.innerText = "√";
                return true;
            }
        }
</script>
</head>

<body background="images/01_04.jpg">
<div align="center" id="pic">
<img src="images/default1.jpg"/>
<br />
 <form method="get" action="hyk.php">
<table width="448" height="100" border="0">
<tr>
<td width="87" align="right"><h1>卡号:</h1></td>
<td width="351"><input type="text" name="cardid" id="cardid" style="width: 300px; height: 40px;font-size:15px;" onblur="return checkInput()"></td>
<td width="180">
<div id="lblMsg"></div>
</td>
</tr>
<br />
<tr >
<td colspan="2" align="right" ><input type="submit" data-inline="true" align="middle"  value="生&nbsp;成 &nbsp;会&nbsp;员&nbsp;卡" style="width: 400px; height: 40px;font-size:35px; background:url(images/button.jpg) "   ></td>
</tr>
</table>
</form>
<?php
	if(empty($_get['errno'])){
		$errno=$_GET['errno'];
		if($errno==1){
			echo "<br /><font color='red' size='3'>你的输入不正确，请重新输入！</font>";
		}
	}
?>
<div>
<br />
<h1>冠超市版权所有！</h1>
</div>
</div>
</body>
</html>
