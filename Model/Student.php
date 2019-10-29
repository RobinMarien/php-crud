<?php
declare(strict_types=1);

class Student
{
    private $id;
    private $fullname;
    private $email;
    private $grade;

    public function __construct(int $_id, string $_fullname, string $_email, int $_grade)
    {
        $this->id = $_id;
        $this->fullname = $_fullname;
        $this->email = $_email;
        $this->grade = $_grade;
    }
}