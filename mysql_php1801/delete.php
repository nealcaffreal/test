<?php
	//接收客户端请求的数据  id
	$id = $_GET["id"];
	include "public.php";
	//操作数据库--完成删除功能
	$sql = "DELETE FROM `scoretab` WHERE sid=$id" ;
	$row = mysql_query($sql);
	//服务器返回结果到客户端
	if( $row ){
		echo "<script>alert('删除成功');location.href='scorelist.php';</script>";
	}else{
		echo "<script>alert('删除失败');</script>";
	}
?>