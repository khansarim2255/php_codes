<?php 
$u = $_POST["t1"];
$p = $_POST["t2"];

if ($u == Admin && $p == Admin){
    header("Location:show.php?flag=1");
    }
else{
    header("Location:show.php?flag=2");
}

?>