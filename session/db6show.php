<?php
include("dbc.php");
$rn=$_POST["rn"];
$sq="select * from student where roll=$rn";
$rs=mysqli_query($con,$sq);
if($rec=mysqli_fetch_array($rs,MYSQLI_BOTH)){
$roll=$rec["roll"];
$sname=$rec["sname"];
$fname=$rec["fname"];
$email=$rec["email"];
$mobile=$rec["mobile"];
}else{
echo "Such Roll number does not exists";
exit;
}
?>
<html>
<body>
<form name="f1" action="allinone.php?flg=3" method="POSt">
Roll Number: <input type="text" name="rn" value="<?php echo $roll;?>"><br>
Student Name: <input type="text" name="sn" value="<?php echo $sname;?>"><br>
Father Name: <input type="text" name="fn" value="<?php echo $fname;?>"><br>
Student Email: <input type="text" name="se" value="<?php echo $email;?>"><br>
Student Mobile: <input type="text" name="sm" value="<?php echo $mobile;?>"><br>
<input type="submit" name="b" value="UPDATE">
</form>
</body>
</html>