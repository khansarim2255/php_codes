<?php
$back = $_POST['bg'];
$text = $_POST['tc'];
$name = $_POST['nm'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body style="background-color:<?php echo $back; ?>;">
    <p style="color:<?php echo $text; ?>;">
        Hello, <?php echo $name; ?>
    </p>
</body>
</html>
