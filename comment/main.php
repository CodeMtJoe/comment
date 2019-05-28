<?php
// $user=$_POST['username'];
// $psd=$_POST['password'];

// if($user==''||$psd==""){
// 	echo "<script>alert('用户名或密码为空,请重新输入!');history.go(-1)</script>";

// }
if(isset($_POST['submit']) && $_POST['submit']=='登陆'){
	$user=$_POST['username'];
	$psd=$_POST['password'];

	if($user==''||$psd==""){
		echo "<script>alert('用户名或密码为空,请重新输入!');history.go(-1)</script>";

	}else{
		$conn=mysqli_connect('localhost','root','root');
		if(mysqli_errno($conn)){
			die('数据库连接失败!'.mysqli_error($conn));
		}
		 mysqli_select_db($conn,'userdb') or die('数据库选择失败!');
		mysqli_set_charset($conn,'utf8') or die('数据库设置编码失败');
		$sql="select username,password from user where username='$user' and password='$psd'";
		$rel=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($rel);
		// if(!$rel){
		// 	echo mysqli_error($conn);
		// }
		if($num){
		echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";

		}else{
		echo "<script>alert('用户名或密码错误,请重新输入!');history.go(-1)</script>";
		return;

		}

	}

}
?>