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
        <!-- Hier is er een button die je terug brength naar de index.php en van daaruit wordt je verwezen naar
             de create student controller -->
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
        <!-- allstudents is hier rood en de error zegt dat het onbesetaande variabele is maar we hebben hem
         degelijk aangemaakt in de student controller -->
        <?php foreach ($allstudents as $student) {
            echo '<form method="post">';
            echo '<tr>';
            // omdat allstudents een array van objecten is moeten we get Methoden gebruiken die gedefinieerd werden
            // in de Person.php & Student.php klassen in de Model folder
            echo '<td>' . $student->getId() . '</td>';
            echo '<td>' . $student->getFullname() . '</td>';
            echo '<td>' . $student->getEmail() . '</td>';
            echo '<td>' . $student->getGrade() . '</td>';
            // we maken een variabele die het object moet terugsturen via de POST bij het herladen van de pagina om te weten
            // welke object men precies moet gaan bewerken of verwijderen objecten kan je niet plaatsen in de POST daarom
            // gaan we serialize functie gebruiken die het object verandert naar een string; diezelfde string gaan
            // we veranderen in een andere string voor security en charachter encoding redenen (vraag Manny voor meer uitleg
            // als het je intereseert).
            $encodedAndSerializedStudent = base64_encode(serialize($student));
            // De variabele plaatsen we dan in iedere edit & delete button en het object zal weer aangemaakt worden
            // bij de StudenController.php & aan de hand van if methoden weet men of het object bewerkt of verwijdert moet
            // worden
            echo '<td><button type="submit" value="'.$encodedAndSerializedStudent.'" name="editStudent">edit</button></td>';
            echo '<td><button type="submit" value="'.$encodedAndSerializedStudent.'" name="students">delete</button></td>';
            echo '</tr>';
            echo '</form>';
        }
        ?>
        </tbody>
    </table>
</div>

<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php' ?>
</body>
</html>
