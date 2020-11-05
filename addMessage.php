
<?php
//5-+

require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$principle=mysqli_real_escape_string($conn,$_POST['principle']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$degree=mysqli_real_escape_string($conn,$_POST['degree']);
if ($title) { //if title is not empty
	$sql = "insert into todo (title, content, principle, status, degree) values ('$title', '$content', '$principle', '$status', '$degree');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg = "Task:$id added.";
} else {
	echo "Message title cannot be empty";
}
header("Location: check.php?m=$msg");
?>