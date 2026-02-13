<?php
error_reporting(0);
session_start();
if($_SESSION["unm"]==""){
header("location:index.php");
}
?>
<html>
<body>
<form name="f1" action="allinone.php?flg=1" method="POSt">
Roll Number: <input type="text" name="rn"><br>
Student Name: <input type="text" name="sn"><br>
Father Name: <input type="text" name="fn"><br>
Student Email: <input type="text" name="se"><br>
Student Mobile: <input type="text" name="sm"><br>
<input type="submit" name="b" value="SAVE">
</form>
</body>
</html>