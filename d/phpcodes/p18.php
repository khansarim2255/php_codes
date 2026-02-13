<?php
$t1=$_POST["t1"];
$t2=$_POST["t2"];
if($t1=="Admin" && $t2=="Admin"){
header("Location:show.php?flg=1");
}else{
header("Location:show.php?flg=2");
}
?>