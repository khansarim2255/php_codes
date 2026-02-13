<?php
error_reporting(0);
$msg=$_REQUEST["msg"];
if($msg==1){
?>
<script language="javaScript" type="text/JavaScript">
alert('Invalid user name or password');
</script>
<?php
}
?>
<html>
<body>
<form name="f1" action="allinone.php?flg=0" method="POSt">
User Name: <input type="text" name="unm"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" name="b" value="LOGIN">
</form>
</body>
</html>