<?php


class EditStudentController
{
    function render()
    {
        $gradeloader = new GradeLoader();
        // de te bewerken object student wordt weer aangemaakt
        $student = unserialize(base64_decode($_POST["editStudent"]));
        $grade = $gradeloader->getGrades();

        require 'View/edit_student.php';
    }
}