<?php
function getLink($db_host,$db_user,$db_pwd,$db_name){
	$Link=mysqli_connect($db_host,$db_user,$db_pwd);
	if (!$Link) {
		die("数据库连接失败!请检查配置") ;
	};
	mysqli_select_db($Link,$db_name) or die('数据库选择失败'.mysqli_error($Link));//选择数据库
	//设置编码
	mysqli_set_charset($Link,'utf8') or die('设置编码失败'.mysqli_error($Link));
	return $Link;
}


?>