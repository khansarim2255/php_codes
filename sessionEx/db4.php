<?php
error_reporting(0);
session_start();
if($_SESSION["unm"]==""){
header("location:index.php");
}
include("dbc.php");
$sq="select * from student";
//echo $sq;
$records=mysqli_query($con,$sq);
?>
<table border="1">
<tr>
<th>Stud Roll No</th>
<th>Stud Name</th>
<th>Stud Father</th>
<th>Stud Email</th>
<th>Stud Mobile</th>
<th>Action</th>
</tr>
<?php
while($rec=mysqli_fetch_array($records,MYSQLI_BOTH)){
?>
<tr><td>
<?php echo $rec["roll"]; ?>
</td><td>
<?php echo $rec["sname"];?>
</td><td>
<?php echo $rec["fname"];?>
</td><td>
<?php echo $rec["email"];?>
</td><td>
<?php echo $rec["mobile"];?>
</td>
<td><a href="allinone.php?flg=22&rn=<?php echo $rec['roll']; ?>">Delete</a> | 
<a href="db6show.php?rn=<?php echo $rec['roll']; ?>">Edit</a></td>
</tr>
<?php
}
?>
</table>
