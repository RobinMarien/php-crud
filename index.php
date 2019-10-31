<?php
declare(strict_types=1);

//include all your model files here

require 'Model/Connection.php';
require 'Model/Person.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
require 'Model/Grade.php';
require 'Model/StudentLoader.php';
require 'Model/TeacherLoader.php';
require 'Model/GradeLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/StudentController.php';

/*//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);*/

function deleteEverythingPost($post)
{
    foreach ($post as $elemnt) {
        $elemnt = null;
    }
}

if (isset($_POST["students"])) {
    deleteEverythingPost($_POST);
    $controller = new StudentController();
    $controller->render();
} else if (isset($_POST["createStudent"])) {
    deleteEverythingPost($_POST);
    $controller = new
} else {
    deleteEverythingPost($_POST);
    $controller = new HomepageController();
    $controller->render($_GET, $_POST);
}