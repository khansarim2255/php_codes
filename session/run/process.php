<?php
$conn = mysqli_connect("localhost","root","","2025");

if(isset($_POST['submit'])){
    $name = $_POST['sname'];
    $year = $_POST['year'];
    $course = $_POST['course'];
    $fees = $_POST['fees'];

    mysqli_query($conn,
    "INSERT INTO student(id,student_name,admission_year,course_name,fees)
     VALUES(NULL,'$name','$year','$course','$fees')");
}

$result = mysqli_query($conn,"SELECT * FROM student");

echo "<h3>Student Records</h3>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['student_name']." ".$row['course_name']." ".$row['fees']."<br>";
}
?>
