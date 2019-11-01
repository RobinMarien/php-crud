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
    <title>Create a new student!</title>

</head>
<body>
<h1>Create a <span class="highlight">new</span> student!</h1>
<form method="post">
    <div class="form-section">
        <!-- De form houdt de variabele bij via de POST die zal worden.
             later zullen de variabelen een object vormen-->
        <input type="text" name="createName" autocomplete="off" required>
        <label for="name" class="label-name">
            <span class="content-name">Name</span>
        </label>
    </div>
    <div class="form-section">
        <input type="text" name="createEmail" autocomplete="off" required>
        <label for="email" class="label-name">
            <span class="content-name">E-mail</span>
        </label>
    </div>
    <div class="form-selection">
        <label for="class">Class</label>
        <select name="createClass">
            <?php foreach ($grade as $item) : ?>
                <option value="<?php echo $item->getId() ?>"><?php echo $item->getGradename() ?></option>

            <?php endforeach; ?>
        </select>
    </div>
    <!-- de name attribuut zorgt ervoor dat we terugkeren naar de studentController.php-->
    <button class="text-right" type="submit" name="students">Submit!</button>
</form>
<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php' ?>
</body>
</html>
