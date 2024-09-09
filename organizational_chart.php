<?php include 'global/header.php'; ?>
<?php include 'global/menu.php'; ?>
<?php
// Include variables.php to access the variables
include 'profiles/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Chart</title>
</head>
<body>
    <h1>Organizational Chart</h1>
    <ul>
        <li><a href="profiles/profile images/john_doe.jpg"><?php echo $employee1_name; ?></a></li>
        <li><a href="profiles/profile images/jane_smith.jpg"><?php echo $employee2_name; ?></a></li>
        <li><a href="profiles/profile images/michael_johnson.jpg"><?php echo $employee3_name; ?></a></li>
    </ul>


</body>
</html>
<?php include 'global/footer.php'; ?>