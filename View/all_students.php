<?php
declare(strict_types=1);
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
    <title>All Students!</title>

</head>
<body>
<div class="margintop">
    <h1><span class="highlight">All</span> students!</h1>
    <form method="post">
        <input type="submit" value="Create New Student" name="createStudent">
    </form>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($allstudents as $student) {
            echo '<tr>';
            echo '<td>' . $student->getId() . '</td>';
            echo '<td>' . $student->getFullname() . '</td>';
            echo '<td>' . $student->getEmail() . '</td>';
            echo '<td>' . $student->getGrade() . '</td>';
            echo '<form method="post">';
            echo '<td><input type="submit" value="edit" name="editStudent"></td>';
            echo '<td><input type="submit" value="delete" name="deleteStudent"></td>';
            echo '</form>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php' ?>
</body>
</html>
