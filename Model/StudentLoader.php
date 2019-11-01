<?php
declare(strict_types=1);

class StudentLoader
{
    public function getStudents()
    {
        // creëer nieuwe lege array
        $arrayStudents = array();
        // open de verbinding met de database
        $connection = new Connection();
        $pdo = $connection->openConnection();
        // creëer SQL query (statement) die $pdo zal moeten op halen
        $stmt = $pdo->query("SELECT * FROM student");
        // loop door alle rijen data die worden opgevangen
        while ($row = $stmt->fetch()) {
            // creëer nieuw student
            $student = new Student($row['id'], $row['fullname'], $row['email'], $row['grade']);
            // push het object in een array
            array_push($arrayStudents, $student);
        }
        // return alle studenten die je hebt opgehaald uit de database
        return $arrayStudents;
    }

    // deze functie wordt niet gebruikt
    public function getStudent($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM student WhERE id=" . $id);
        $row = $stmt->fetch();
        return $row;
    }

    public function createStudent(Student $student)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "INSERT INTO student (fullname, email, grade) VALUES ('" . $student->getFullname() . "','" . $student->getEmail() . "','" . $student->getGrade() . "')";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }

    public function editStudent(Student $editedStudent)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "UPDATE student SET fullname = '" . $editedStudent->getFullname() . "', email = '" . $editedStudent->getEmail() . "', grade = '" . $editedStudent->getGrade() . "' WHERE id = " . $editedStudent->getId();
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }

    public function deleteStudent(Student $deletedStudent){
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "DELETE FROM student WHERE id = :id";
        $stmnt = $pdo->prepare($sql);
        $stmnt->bindParam(':id', $deletedStudent->getId(), PDO::PARAM_INT);
        $stmnt->execute();
    }
}