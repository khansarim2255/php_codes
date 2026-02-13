<?php
error_reporting(0);
session_start();
if($_SESSION["unm"]==""){
header("location:index.php");
}
?>
<html>
<body>
<h1>All Operations:</h1><br>
<ol>
<li> <a href="db2fr.php">ADD</a></li>
<li> <a href="db5fr.php">Delete</a></li>
<li> <a href="db6fr.php">Update</a></li>
<li> <a href="db4.php">List Data</a></li>
</ol>
</body>
</html>