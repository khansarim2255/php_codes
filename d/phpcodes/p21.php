<?php
$r=$_POST["r"];
$c=$_POST["c"];
echo "<table border='1'>";
for($i=1;$i<=$r;$i++){
if($i%2==0){
echo "<tr bgcolor='green'>";
}
else{
echo "<tr bgcolor='white'>";
}
for($j=1;$j<=$c;$j++){
echo "<td>".$i."</td>";
}
echo "</tr>";
}
echo "</table>";
?>