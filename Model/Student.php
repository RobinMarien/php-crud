<?php
declare(strict_types=1);

class Student extends Person
{
    private $id;

    public function __construct(int $_id, string $_fullname, string $_email, int $_grade)
    {
        parent::__construct($_fullname, $_email, $_grade);
        $this->id = $_id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}