<?php
session_start();
require("dbconnect.php");
?>
<table>
<body>
<h1>Update Message</h1>
<form method="post" action="updateMessage.php">
      id: <input name="id" type="int" id="id" value = <?php echo (int)$_GET['id']?> /><br>
      Message Title: <input name="title" type="text" id="title" /> <br>

      Content: <input name="content" type="text" id="content" /> <br>
      
      Principle: <input name="principle" type="text" id="principle" /> <br>

      Status: <input name="status" type="text" id="status" /> <br>

      Degree: <select name="degree">
　        <option value="緊急" >緊急</option>
　        <option value="重要">重要</option>
　        <option value="一般">一般</option>
          </select> <br>
      
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>