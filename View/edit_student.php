<?php ?>

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
    <title>Edit a Student</title>

</head>
<body>
<h1>Edit an <span class="highlight">existing</span> student!</h1>
<form method="post">
    <div class="form-section">
        <input type="text" name="editName" autocomplete="off" value="<?php echo $student->getFullname() ?>" required>
        <label for="name" class="label-name">
            <span class="content-name">Name</span>
        </label>
    </div>
    <div class="form-section">
        <input type="text" name="editEmail" autocomplete="off" value="<?php echo $student->getEmail() ?>" required>
        <label for="email" class="label-name">
            <span class="content-name">E-mail</span>
        </label>
    </div>
    <div class="form-selection">
        <label for="class">Class</label>
        <select name="editClass">
            <?php foreach ($grade as $item) : ?>
                <option value="<?php echo $item->getId() ?>"><?php echo $item->getGradename() ?></option>

            <?php endforeach; ?>
        </select>
    </div>
    <button class="text-right" type="submit" name="students" value="<?php echo $student->getId() ?>">Submit changes!
    </button>
</form>
<img id="logo" src="../Media/img/logo_Becode.png">
<?php require 'includes/footer.php' ?>
</body>
</html>
