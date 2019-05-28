<?php
require('connt.php');
$id=$_GET['id'];
$del_sql='delete from message where id='.$id;
mysqli_query($coon,$del_sql) or die('删除失败'.mysqli_error($coon));
$url='message.php';
echo "<script>window.location.href='$url'</script>";


?>