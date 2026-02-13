<!-- <?php
$conn = mysqli_connect("localhost","root","","2025");

if(isset($_POST['submit'])){
    $name = $_POST['sname'];
    $year = $_POST['year'];
    $course = $_POST['course'];
    $fees = $_POST['fees'];

    mysqli_query($conn,
    "INSERT INTO student(student_name,admission_year,course_name,fees)
     VALUES('$name','$year','$course','$fees')");
}

$result = mysqli_query($conn,"SELECT * FROM student");

echo "<h3>Student Records</h3>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['student_name']." ".$row['course_name']." ".$row['fees']."<br>";
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
    Student Name: <input type="text" name="sname"><br><br>
    Admission Year: <input type="number" name="year"><br><br>
    Course Name: <input type="text" name="course"><br><br>
    Fees: <input type="number" name="fees"><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
