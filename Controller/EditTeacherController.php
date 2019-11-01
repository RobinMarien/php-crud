<?php


class EditTeacherController
{
    public function render()
    {
        $gradeLoader = new GradeLoader();
        $teacher = unserialize(base64_decode($_POST["editTeacher"]));
        $grade = $gradeLoader->getGrades();

        require 'View/edit_teacher.php';
    }
}