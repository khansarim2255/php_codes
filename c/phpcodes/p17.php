<?php
$t1=$_POST["t1"];
$t2=$_POST["t2"];
if($t1=="Admin" && $t2=="Admin"){
header("Location:success.php");
}else{
header("Location:invalid.php");
}
?>