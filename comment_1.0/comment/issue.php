<?php
//数据库配置信息
$db_host='localhost';
$db_user='root';
$db_pwd='root';
$db_name='userdb';
//连接数据库
$coon=@mysqli_connect($db_host,$db_user,$db_pwd);
if(!$coon){
	die('数据库连接失败!');
};
//选择当前数据库
mysqli_select_db($coon,'userdb') or die('数据库选择失败');
//设置数据库编码
mysqli_set_charset($coon,'utf8') or die('设置编码失败');
//操作数据库
$content=$_POST['name'];
$sql='insert into message'.
	 '(content)'.
	 'values'.
	 "('$content')";
$rel=mysqli_query($coon,$sql) or die('插入数据库失败');
echo $content;



?>