<?php
if(isset($_POST['submit']) && $_POST['submit']=='立即注册'){
	$user=$_POST['username'];
	$password=$_POST['password'];
	$confirm=$_POST['confpassword'];
	//1.判断用户名密码是否为空
	if($user==''||$password==''||$confirm==''){
	echo "<script>alert('请确认信息的完整性');history.go(-1)</script>";
	}else if($password!=$confirm){ //判断密码是否一致
	echo "<script>alert('密码不一致,请重新输入');history.go(-1)</script>";
	}else{
		if($password==$confirm){
			//定义数据库
			$conn=mysqli_connect('localhost','root','root');
			//判断是否连接成功
			if(mysqli_errno($conn)){
				echo "数据库连接失败\n";
				exit;
			}
			//选择数据库
			mysqli_select_db($conn,'userdb') or die('数据库选择失败');
			//设定字符集
			mysqli_set_charset($conn,'utf8') or die('数据库字符设置失败');
			//sql语句
			$sql='select username from user where username='."'$user'";
				//执行语句
			$rel=mysqli_query($conn,$sql);
			$num=mysqli_num_rows($rel);  //统计执行结果影响的行数
			//echo $num;
			if($num){
				// 判断用户存在  $num返回不为0的数的话就是真
				echo "<script>alert('用户名已存在');history.go(-1)</script>";
			}else{
				//$num返回不为0情况
				$inser_sql='insert into user'.
							'(username,password)'.
							'values'.
							"('$user','$password')";
				$inser_rel=mysqli_query($conn,$inser_sql);
				
				if($inser_rel){
				echo "<script>alert('注册成功!');history.go(-2)</script>";

				}else{
				echo "<script>alert('注册失败,请稍后重试!');history.go(-1)</script>";

				}
			}

		}
	}






}else{
	
	echo "<script>alert('提交不成功');history.go(-1)</script>";
}




?>