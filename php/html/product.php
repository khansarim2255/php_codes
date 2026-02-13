<?php
$conn = mysqli_connect("localhost","root","","ECOMM");

if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $mdate = $_POST['mdate'];
    $company = $_POST['company'];
    $price = $_POST['price'];

    mysqli_query($conn,
    "INSERT INTO Product(product_name,manufacture_date,company,price)
     VALUES('$pname','$mdate','$company','$price')");
}
?>

<form method="post">
Product Name: <input type="text" name="pname"><br><br>
Date of Manufacture: <input type="date" name="mdate"><br><br>
Company: <input type="text" name="company"><br><br>
Price: <input type="number" name="price"><br><br>
<input type="submit" name="submit">
</form>

<?php
$result = mysqli_query($conn,"SELECT * FROM Product");

while($row = mysqli_fetch_assoc($result)){
    echo $row['product_name']." ".$row['price']."<br>";
}
?>
