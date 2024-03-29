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
require 'Controller/CreateStudentController.php';
require 'Controller/EditStudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/CreateTeacherController.php';
require 'Controller/EditTeacherController.php';

/*//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_GET, $_POST);*/

// Op basis van if statements kijken we in de POST naar welke studentcontroller we gestuurd worden
// Als er geen student controller gekozen werd gaan we naar de homepage
if (isset($_POST["students"])) {
    // bij de homepage.php file hebben we voor students gekozen en gaan we zodoende een student controller aan maken
    // maar, je komt hier ook meteen terecht nadat je op de delete button in all_students.php hebt geklikt of op
    // submit button bij de edit_student & new_student
    $controller = new StudentController();
    $controller->render();
} else if (isset($_POST["createStudent"])) {
    $controller = new CreateStudentController();
    $controller->render();
} else if (isset($_POST["editStudent"])) {
    $controller = new EditStudentController();
    $controller->render();
} else if (isset($_POST["teachers"])) {
    $controller = new TeacherController();
    $controller->render();
} else if (isset($_POST["createTeacher"])) {
    $controller = new CreateTeacherController();
    $controller->render();
} else if (isset($_POST["editTeacher"])) {
    $controller = new EditTeacherController();
    $controller->render();
} else {
    // creëer nieuwe HP controller
    $controller = new HomepageController();
    // de GET en POST zijn onnodig, nog iets dat overkwam van Koen mvc boiler plate
    $controller->render($_GET, $_POST);
}

