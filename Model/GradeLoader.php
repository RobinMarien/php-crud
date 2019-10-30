<?php
declare(strict_types=1);

require '../Model/Connection.php';

class GradeLoader
{
    public function getAllGrades()
    {
        $arrayStudents = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM grade");
        while ($row = $stmt->fetch()) {
            array_push($arrayStudents, $row);
        }
        return $arrayStudents;
    }

    public function getGrade($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM grade WhERE id=".$id);
        $row = $stmt->fetch();
        return $row;
    }
}