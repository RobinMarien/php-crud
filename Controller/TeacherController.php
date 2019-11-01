<?php
declare(strict_types=1);

class TeacherController
{
    public function render()
    {
        $teacherloader = new TeacherLoader();
        if (isset($_POST["createName"]) && $_POST["createEmail"] && $_POST["createClass"]) {
            $teacher = new Teacher(0, $_POST["createName"], $_POST["createEmail"], (int)$_POST["createClass"] );
            $teacherloader->createTeacher($teacher);
        }
        else if(isset($_POST["editName"]) && isset($_POST["editEmail"]) && isset($_POST["editClass"])){
            $teacher = new Teacher((int)$_POST["teachers"], $_POST["editName"], $_POST["editEmail"], (int)$_POST["editClass"]);
            $teacherloader->editStudent($teacher);
        }
        else if(unserialize(base64_decode($_POST["teachers"]))){
            $teacher = unserialize(base64_decode($_POST["teachers"]));
            $teacherloader->deleteTeacher($teacher);
        }
        $allteachers = $teacherloader->getTeachers();

        require 'View/all_teachers.php';
    }
}