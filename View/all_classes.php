<?php
require '../Model/GradeLoader.php';

$gradeloader = new GradeLoader();
$allgrades = $gradeloader->getGrades();
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
    <title>All Classes!</title>

</head>
<body>
<h1><span class="highlight">All</span> classes!</h1>
<table class="">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($allgrades as $grade) {
        echo '<tr>';
        echo '<td>' . $grade['id'] . '</td>';
        echo '<td>' . $grade['gradename'] . '</td>';
        echo '<td>' . $grade['location'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php'?>
</body>
</html>

