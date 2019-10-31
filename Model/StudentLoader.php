<?php
declare(strict_types=1);

class StudentLoader
{
    public function getStudents()
    {
        $arrayStudents = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM student");
        while ($row = $stmt->fetch()) {
            $student = new Student($row['id'], $row['fullname'], $row['email'], $row['grade']);
            array_push($arrayStudents, $student);
        }
        return $arrayStudents;
    }

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