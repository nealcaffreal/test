<?php
	//接收客户端的数据
	$uname = $_POST["uname"];
	$h5 = $_POST["h5"];
	$js = $_POST["js"];
	//操作数据库
	include "public.php";
	
	//编写sql语句 并执行
	$sql = "INSERT INTO `scoretab`( `sname`, `h5`, `js`) VALUES ('$uname','$h5','$js')";
	$row = mysql_query($sql);
	//返回结果给客户端
	if( $row ){
		echo "<script>alert('添加成功');location.href='scorelist.php';</script>";
	}else{
		echo "<script>alert('添加失败');</script>";
	}
?>