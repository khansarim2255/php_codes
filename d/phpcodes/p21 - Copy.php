<?php
$r=$_POST["r"];
$c=$_POST["c"];
?>
<body>
<table border="1">
<?php
for($i=1;$i<=$r;$i++){
?>
<tr>
<?php
for($j=1;$j<=$c;$j++){
?>
<td><?php echo $i; ?></td>
<?php
}
?>
</tr>
<?php
}
?>
</table>
</body>