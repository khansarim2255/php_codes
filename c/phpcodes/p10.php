<?php
$nm=$_POST["t1"];
$cnt=$_POST["t2"];
?>
<BODY>
<?php
for($i=1;$i<=$cnt;$i++)
if($i%2==0)
echo "<font color='red'>".$nm."</font><br>";
else
echo "<font color='black'>".$nm."</font><br>";
?>
</BODY>