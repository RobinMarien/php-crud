<?php
declare(strict_types=1);

require '../Model/Connection.php';

class StudentLoader
{
    public function getAllStudents()
    {
        $arrayStudents = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM student");
        while ($row = $stmt->fetch()) {
            array_push($arrayStudents, $row);
        }
        return $arrayStudents;
    }

    public function getStudent($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM student WhERE id=".$id);
        $row = $stmt->fetch();
        return $row;
    }
}