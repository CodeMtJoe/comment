<?php
require('../admin/coon.php');

?>



<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>评论留言</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<style type="text/css">
		body{
			
		}
		textarea{
			outline: none;
			resize: none;
		}
		.container{
			width: 700px;
			height: 800px;
			margin: 0 auto;
			box-shadow: 10px 10px 30px #CCCCCC;
			padding: 30px;
			position: relative;
		}
		.dly-btn{
			position: absolute;
			left: 0px;
			top: 10px;
		}
		.message{
			width: 640px;
			height: 450px;
			margin: 0 auto;
			//background-color: #000000;
			box-shadow: 0px 1px 10px #3333;
			
			margin-top: 80px;
		}
		.err{
			color: red;
			display: none;
		}
		li{
			list-style: none;
			width: 100%;
			height: 90px;
			line-height: 130px;
			border-bottom: 1px dotted #CCCCCC;
			display: none;
		}
		ul{
			overflow: scroll;
			height: 450px;

		}
		span{
			float: right;
			margin-right: 20px;
			display: none;
			color: #cccccc;
		}
		@media (max-width:768px) {
			.message{
				width: 340px;
				margin: 80px 0;
			}
			.container{
				width: 400px
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="say">
			<h2>评论</h2>
				<div class="form-group">
					<textarea id="textarea" name="textarea" class="form-control" placeholder="请输入内容"rows="5"></textarea>
					<div class="err">请填写内容后发布!</div>
					<div class="col-xs-offset-9 col-xs-3 ">
						<input type="submit"  class="dly-btn btn btn-success btn-lg btn-block" name="submit" id="submit" value="发布" />
					</div>	
					<div class="message" id="message">
						<ul>
						<?php 
							//操作数据库
							$sql='select content,lastdate from message order by id desc';
							$rel=mysqli_query($coon,$sql) or die('操作失败'.mysqli_error($coon));						
							while ($row=mysqli_fetch_array($rel)) {
						?>
							<li><?php echo $row[0];?></li><span><?php echo $row[1];?></span>
						<?php } ?>
						</ul>
					</div>
				</div>
			
		</div>
		
	</div>
<script type="text/javascript" src="../js/jquery-1.12.4.js">
	
	
</script>	
<script type="text/javascript" src="../js/bootstrap.min.js">
	
</script>
<script type="text/javascript">
	$(function(){
		//获取时间
		var t=new Date().toLocaleString();
		//提交按钮
		$('#submit').click(function(){
			if($('#textarea').val()==""){
				$('.err').fadeIn();
				return false;
			}else{

				$.ajax({
					url:'issue.php',
					type:'post',
					data:'name='+$("#textarea").val(),
					success:function(data){
						$('.err').css('color','green').html('发布成功!').fadeIn();
						location.reload();//重新加载页面
					}

				});
				
			}
		});


		$('li,span').fadeIn(2000);
		
	})
</script>
</body>

</html>