<?php
require("dbconnect.php");

$msg=(int)$_POST['id'];
if ($msg) {
	$sql = "delete from todo where id=$msg;";
    mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
    $msg = "Task:$msg canceled or finished.";
}
header("Location: check.php?m=$msg");
?>