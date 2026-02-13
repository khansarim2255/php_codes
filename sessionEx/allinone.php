<?php
include("dbc.php");
$flg=$_REQUEST["flg"];
switch($flg){
case 0:
//-------------- To check Login Credentials
$unm=$_POST["unm"];
$pass=$_POST["pass"];
$sq="select * from logins where unm='$unm' and pass='$pass'";
//echo $sq;
//exit;
$result=mysqli_query($con,$sq);
$cnt=mysqli_num_rows($result);
if($cnt==1){
session_start();
$_SESSION["unm"]=$unm;
header("location:dashboard.php");
}else{
header("Location:index.php?msg=1 ");
}
break;
case 1:
//-------------- insert coode for student table
$rn=$_POST["rn"];
$sn=$_POST["sn"];
$fn=$_POST["fn"];
$se=$_POST["se"];
$sm=$_POST["sm"];
$sq="insert into student values($rn,'$sn','$fn','$se','$sm')";
mysqli_query($con,$sq);
header("Location:db4.php");
break;
case 2:
//------------- Delete code for student table----------
$rn=$_POST["rn"];
$sq="delete from student where roll=$rn";
//echo $sq;
mysqli_query($con,$sq);
//echo "Record saved";
header("Location:db4.php");
break;
case 22:
//------------- Delete code for student table db4----------
$rn=$_REQUEST["rn"];
$sq="delete from student where roll=$rn";
mysqli_query($con,$sq);
//echo "Record saved";
header("Location:db4.php");
break;
case 3:
//----------------- update code for student table-----------
$rn=$_POST["rn"];
$fn=$_POST["fn"];
$sn=$_POST["sn"];
$se=$_POST["se"];
$sm=$_POST["sm"];
$sq="update student set sname='$sn', fname='$fn', email='$se', mobile='$sm' where roll=$rn";
//echo $sq;
mysqli_query($con,$sq);
//echo "Record saved";
header("Location:db4.php");
break;
}
?>