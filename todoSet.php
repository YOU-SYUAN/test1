<?php
require("dbconnect.php");

$msgID=(int)$_GET['id'];
if ($msgID) {
	$sql = "update todo set status=1 where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "$msgID completed.";
}
header("Location: todolist.php?m=$msg");
//echo "Message:$msgID completed.";
?>



