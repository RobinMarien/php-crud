<?php
require '../Model/TeacherLoader.php';

$teacherloader = new TeacherLoader();
$allteachers = $teacherloader->getTeachers();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Robin Mariën, Manny Apsel">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="stylesheet" type="text/css" href="../Media/CSS/formstyle.css">
    <title>All Teachers!</title>

</head>
<body>
<h1><span class="highlight">All</span> teachers!</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Current class</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($allteachers as $teacher) {
        echo '<tr>';
        echo '<td>' . $teacher['id'] . '</td>';
        echo '<td>' . $teacher['fullname'] . '</td>';
        echo '<td>' . $teacher['email'] . '</td>';
        echo '<td>' . $teacher['grade'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php'?>
</body>
</html>

