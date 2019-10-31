<?php
declare(strict_types=1);

class CreateStudentController
{
    public function render()
    {
        try {
            $studentLoader = new StudentLoader();

            require 'View/new_student.php';
            $studentLoader->createStudent();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}