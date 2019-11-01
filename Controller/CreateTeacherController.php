<?php


class CreateTeacherController
{
    public function render()
    {
        $gradeLoader = new GradeLoader();
        $grade = $gradeLoader->getGrades();

        require 'View/new_teacher.php';
    }
}