<?php
	include "public.php";
	//接收数据
	$sname = $_POST["uname"];
	$h5 = $_POST["h5"];
	$js = $_POST["js"];
	$id=$_POST["sid"];
	///编写修改的sql语句
	$sql = "update scoretab set sname='$sname',h5='$h5',js='$js' where sid=$id";
	$row = mysql_query($sql);
	//返回结果给客户端
	if( $row ){
		echo "<script>alert('修改成功');location.href='scorelist.php';</script>";
	}else{
		echo "<script>alert('修改失败');</script>";
	}
?>