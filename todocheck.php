<?php
require("dbconnect.php");

$msgID=(int)$_GET['id'];
if ($msgID) {
	$sql = "update todo set status=0 where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "$msgID return.";
}
header("Location: todolist.php?m=$msg");
//echo "Message:$msgID completed.";
//幹你娘
//好累喔

?>



