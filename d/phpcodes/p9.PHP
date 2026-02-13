<?php
$nm=$_POST["t1"];
$cnt=$_POST["t2"];
?>
<BODY>
<?php
for($i=1;$i<=$cnt;$i++)
if($i%2==0)
echo $nm."<br>";
?>
</BODY>