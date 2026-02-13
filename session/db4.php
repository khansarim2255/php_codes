<?php
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
</td></tr>
<?php
}
?>
</table>
