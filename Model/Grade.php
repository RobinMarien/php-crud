<?php
declare(strict_types=1);

class Grade
{
    private $id;
    private $gradename;
    private $location;

    public function __construct(int $_id, string $_gradename, string $_location)
    {
        $this->id = $_id;
        $this->gradename = $_gradename;
        $this->location = $_location;
    }

    public function getGradename(): string
    {
        return $this->gradename;
    }
    public function getLocation(): string
    {
        return $this->location;
    }
    public function getId(): int
    {
        return $this->id;
    }
}