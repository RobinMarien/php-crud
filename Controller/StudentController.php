<?php
declare(strict_types=1);

class StudentController
{
    public function render()
    {
        $studentLoader = new StudentLoader();
        $allstudents = $studentLoader->getStudents();

        require 'View/all_students.php';

    }
}