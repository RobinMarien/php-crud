<?php
declare(strict_types=1);

require '../Model/Connection.php';

class GradeLoader
{
    public function getGrades()
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
        $stmt = $pdo->query("SELECT * FROM grade WhERE id=" . $id);
        $row = $stmt->fetch();
        return $row;
    }

    public function createGrade(Grade $grade)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "INSERT INTO grade (gradename, location) VALUES ('" . $grade->getGradename() . "','" . $grade->getLocation() . "')";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
        //after this function is done the view should return to the list of grades and show the new row
    }

    public function editGrade(Grade $editedGrade)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "UPDATE grade SET gradename = '" . $editedGrade->getGradeName() . "', location = '" . $editedGrade->getLocation() . "' WHERE id = " . $editedGrade->getId();
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
        //after this function is done the view should return to list of grades and see his updated row
    }

    /*public function deleteGrade(Grade $deletedGrade)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "DELETE FROM grade WHERE id='".$deletedGrade->getId()."'";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }*/
}