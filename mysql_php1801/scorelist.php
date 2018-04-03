<?php
	//列表显示页面     直接访问数据库
	include "public.php";
	$sql = "SELECT * FROM scoretab";
	$res = mysql_query($sql);//执行的是select操作 返回一个结果集
	
	echo "<table border=1 width=500>";
		echo "<tr><td>编号</td><td>姓名</td><td>语文</td><td>数学</td><td>操作</td></tr>";
		while( $arr = mysql_fetch_array($res) ){ //取出结果集中的一条记录
			echo 
				"<tr><td>{$arr["sid"]}</td>
					 <td>{$arr["sname"]}</td>
					 <td>{$arr["h5"]}</td>
					 <td>{$arr["js"]}</td>
					 <td><a href='delete.php?id={$arr["sid"]}'>删除</a>|<a href='update.php?id={$arr["sid"]}'>修改</a></td></tr>";
		}
	echo "</table>";
		
?>
<h3><a href="add.html">添加学生成绩</a></h3>