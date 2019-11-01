<?php


class EditTeacherController
{
    public function render()
    {
        $gradeLoader = new GradeLoader();
        $teacher = unserialize(base64_decode($_POST["editStudent"]));
        $grade = $gradeLoader->getGrades();

        require 'View/edit_teacher.php';
    }
}