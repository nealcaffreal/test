<?php
	include "public.php";
	//接收客户端传递id
	$id = $_GET["id"];
	//编写sql
	$sql = "SELECT * FROM `scoretab` WHERE sid=$id";
	//执行sql
	$res = mysql_query($sql);//返回一个结果集
	$arr = mysql_fetch_array($res);//数组	
?>
<form action="updateDo.php" method="post">
	<input type="hidden" name="sid" value="<?php echo $arr["sid"]; ?>"/>
	姓名: <input type="text" name="uname" value="<?php echo $arr["sname"]; ?>"/><br>
	h5成绩:<input type="text" name="h5" value="<?php echo $arr["h5"]; ?>"/><br>
	js成绩:<input type="text" name="js" value="<?php echo $arr["js"]; ?>"/><br>
	<input type="submit" value="修改学生成绩"/>
</form>
 