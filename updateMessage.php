<?php
// 直接傳回todolist的畫面
require("dbconnect.php");
$id=(int)$_POST['id'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$principle=mysqli_real_escape_string($conn,$_POST['principle']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$degree=mysqli_real_escape_string($conn,$_POST['degree']);
//$degree=mysqli_real_escape_string($conn,$_POST['degree']);
// $msgID1=(int)$_GET['id'];
if ($title) {
	$sql = "update todo set title='$title',content = '$content',principle = '$principle',status='$status', degree='$degree' where id = $id;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "Task:$id updated.";
} else {
	echo "Message title cannot be empty";
}
header("Location: check.php?m=$msg");
?>

