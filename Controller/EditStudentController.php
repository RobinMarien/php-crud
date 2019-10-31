<?php


class EditStudentController
{
    function render()
    {
        $gradeloader = new GradeLoader();
        $student = unserialize(base64_decode($_POST["editStudent"]));
        $grade = $gradeloader->getGrades();
        require 'View/edit_student.php';
    }
}