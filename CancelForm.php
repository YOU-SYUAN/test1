<?php
session_start();
require("dbconnect.php");
?>
<table>
<body>
<h1>cancel Message</h1>
<form method="post" action="Cancel.php">
      id: <input name="id" type="int" id="id" value = <?php echo (int)$_GET['id']?> /><br>
      
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>