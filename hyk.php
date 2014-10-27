<html>
<head>
<title>会员条码</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"background="images/01_04.jpg">
<!-- Save for Web Slices (手机微信二改.psd) -->
<div align="center" id="pic" >
<img src="images/txm.jpg">
<?php
$cId = $_REQUEST['cardid'];
if(strlen($cId)==12 || strlen($cId)==13 )
{
	$image="buildcode.php?cardid=$cId";
}
else {
	header("Location:default.php?errno=1");
	exit();
}
?>
<img src="<?php echo $image;?>" width="600" height="300" />
<br /><br />
<h1>冠超市版权所有！</h1>
</div>
<!-- End Save for Web Slices -->
</body>
</html>