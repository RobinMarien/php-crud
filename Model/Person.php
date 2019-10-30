<?php
declare(strict_types=1);

class Person
{
    private $fullname;
    private $email;
    private $grade;

    public function __construct(string $_fullname, string $_email, int $_grade)
    {
        $this->fullname = $_fullname;
        $this->email = $_email;
        $this->grade = $_grade;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getGrade(): int
    {
        return $this->grade;
    }
}