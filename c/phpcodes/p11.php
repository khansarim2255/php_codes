<?php
$nm=$_POST["t1"];
$cnt=$_POST["t2"];
?>
<BODY>
<?php
for($i=1;$i<=$cnt;$i++){
if($i%2==0){
?>
<font color='red'><?php echo $nm;?></font><br>
<?php
}else
{
?>
<font color='black'><?php echo $nm;?></font><br>
<?php
}
}
?>
</BODY>