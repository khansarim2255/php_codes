<html>
<script language="JavaScript" type="text/Javascript">
function f(ob){
var v=ob.value;
f1.action="p20.php?col="+v;
f1.submit();
}
</script>
<body>
<form name="f1" method="POST">
<input type="button" value="RED" name="b1"  onclick="f(this)"><br>
<input type="button" value="GREEN" name="b2"  onclick="f(this)"><br>
<input type="button" value="BLUE" name="b3"  onclick="f(this)"><br>
</form>
</body>
</html>