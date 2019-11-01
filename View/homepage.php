<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
    <?php require 'includes/header.php'?>
    <form method="post">
        <!-- Hier kies je welke lijst je wilt zien, bij het klikken keer je terug naar de index.php die je -->
        <!-- naar de volgende controller verwijst. Commentaar zal alleen te vinden zijn bij de student controllers -->
        <input type="submit" name="students" value="students">
        <input type="submit" name="teachers" value="teachers">
        <input type="submit" name="classes" value="classes">
    </form>
    <?php require 'includes/footer.php'?>
</body>
</html>