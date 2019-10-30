<?php
declare(strict_types=1);
require "../Model/Connection.php";

class TeacherLoader
{
    public function getAllTeachers()
    {
        $arrayStudents = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM teacher");
        while ($row = $stmt->fetch()) {
            array_push($arrayStudents, $row);
        }
        return $arrayStudents;
    }

    public function getStudent($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM teacher WhERE id=".$id);
        $row = $stmt->fetch();
        return $row;
    }
}