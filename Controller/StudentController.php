<?php
declare(strict_types=1);

class StudentController
{
    public function render()
    {
        $studentLoader = new StudentLoader();
        if (isset($_POST["createName"]) && $_POST["createEmail"] && $_POST["createClass"]) {
            $student = new Student(0, $_POST["createName"], $_POST["createEmail"], (int)$_POST["createClass"] );
            $studentLoader->createStudent($student);
        }
        else if(isset($_POST["editName"]) && isset($_POST["editEmail"]) && isset($_POST["editClass"])){
            // in the $_POST["students"] zit de id van de student die wordt bewerkt
            // zie de button tag helemaal onderaan in de edit_student.php file
            $student = new Student((int)$_POST["students"], $_POST["editName"], $_POST["editEmail"], (int)$_POST["editClass"]);
            $studentLoader->editStudent($student);
        }
        else if(unserialize(base64_decode($_POST["students"]))){
            $student = unserialize(base64_decode($_POST["students"]));
            $studentLoader->deleteStudent($student);
        }

        $allstudents = $studentLoader->getStudents();

        require 'View/all_students.php';

    }
}