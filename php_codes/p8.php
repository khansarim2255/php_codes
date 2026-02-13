<?php 
$name = $_POST["t1"];
$cnt = $_POST["t2"];
for ($i = 1; $i<=$cnt; $i++){
    if ($i%2==0)
        echo "<font color='red'>$name</font><br>";
    else
        echo "<font color='black'>$name</font><br>";
}
?>