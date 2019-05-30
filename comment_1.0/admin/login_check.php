<?php
require('coon.php');
$username=$_POST['username'];
$pwd=$_POST['password'];
if (isset($_POST['submit']) && $_POST['submit']=='登陆') {
	if (!empty($username)||!empty($pwd)) {
		$sql="select username,password from user where username='$username' and password='$pwd'";
		$rel=mysqli_query($coon,$sql) or die('插入失败'.mysqli_error($coon));
		$num=mysqli_num_rows($rel);
		if($num){
		echo "<script>alert('登陆成功!')</script>";
		session_start();
		$_SESSION['username']=$_POST['username'];
		if ($_SESSION['username']=='admin') {
			header('location:index.php');
		}else{
			header('location:../comment/message.php');
		}

	}else{
		echo "<script>alert('用户名或密码错误,请重新输入!');history.go(-1)</script>";
		return;
		}
	}else{
		echo "<script>alert('用户名或密码为空,请重新输入!');history.go(-1)</script>";
	}
}else{
	echo "<script>alert('提交失败!');</script>";
}



?>