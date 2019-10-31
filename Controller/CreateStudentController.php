<?php
declare(strict_types=1);

class CreateStudentController
{
    public function render()
    {
        $gradeLoader = new GradeLoader();
        $grade = $gradeLoader->getGrades();

        require 'View/new_student.php';
    }
}