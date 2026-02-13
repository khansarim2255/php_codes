<?php
// Database connection
$conn = mysqli_connect("localhost","root","","ECOMM");

// Check connection
if(!$conn){
    die("Connection Failed");
}

// Insert data into table
if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $mdate = $_POST['mdate'];
    $company = $_POST['company'];
    $price = $_POST['price'];

    $sql = "INSERT INTO Product
            (product_name, manufacture_date, company, price)
            VALUES('$pname','$mdate','$company','$price')";

    mysqli_query($conn,$sql);
}

// Fetch records
$result = mysqli_query($conn,"SELECT * FROM Product");

// Display records
echo "<h2>Product Records</h2>";
echo "<table border='1'>
<tr>
<th>Product Name</th>
<th>Date</th>
<th>Company</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row['product_name']."</td>
    <td>".$row['manufacture_date']."</td>
    <td>".$row['company']."</td>
    <td>".$row['price']."</td>
    </tr>";
}
echo "</table>";
?>
