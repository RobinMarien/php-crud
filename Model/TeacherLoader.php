<?php
declare(strict_types=1);

class TeacherLoader
{
    public function getTeachers()
    {
        $arrayStudents = array();
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM teacher");
        while ($row = $stmt->fetch()) {
            $teacher = new Teacher($row['id'], $row['fullname'], $row['email'], $row['grade']);
            array_push($arrayStudents, $teacher);
        }
        return $arrayStudents;
    }

    public function getTeacher($id)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $stmt = $pdo->query("SELECT * FROM teacher WhERE id=" . $id);
        $row = $stmt->fetch();
        return $row;
    }

    public function createTeacher(Teacher $teacher)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "INSERT INTO teacher (fullname, email, grade) VALUES ('" . $teacher->getFullname() . "','" . $teacher->getEmail() . "','" . $teacher->getGrade() . "')";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }

    public function editTeacher(Teacher $editedTeacher)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "UPDATE teacher SET fullname = '" . $editedTeacher->getFullname() . "', email = '" . $editedTeacher->getEmail() . "', grade = '" . $editedTeacher->getGrade() . "' WHERE id = " . $editedTeacher->getId();
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute();
    }

    public function deleteTeacher(Teacher $deletedTeacher)
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = "DELETE FROM teacher WHERE id = :id";
        $stmnt = $pdo->prepare($sql);
        $stmnt->bindParam(':id', $deletedTeacher->getId(), PDO::PARAM_INT);
        $stmnt->execute();
    }
}