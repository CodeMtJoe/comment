<?php
require('connt.php');
//操作数据库
$content=$_POST['name'];
$sql='insert into message'.
	 '(content)'.
	 'values'.
	 "('$content')";
$rel=mysqli_query($coon,$sql) or die('插入数据库失败');
echo $content;



?>