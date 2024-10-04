<?php

require 'src/Domain/Model/Student.php';

class PdoStudentRepository implements StudentRepository
{
    private PDO $pdo;

    public function __construc()
    {
        $this->pdo = ConnectionCreator::createConnecetion();
    }

    public function allStudents(): array
    {
        $statementData = $this->pdo->query('SELECT * FROM students');
        while($statementData->fetch(PDO::FETCH_ASSOC)){
            $students = new Student(
                $statementData['id'],
                $statementData['name'],
                new DateTimeImmutable($statementData['birthday'])
            );
        }
        return $students;
    }

    public function save():bool
    {

        $stmt = $this->pdo->prepare('INSERT INTO students(name,birthday) VALUES(?,?)');
        $stmt->bindValue(1,);
        $stmt->bindValue(1,);
        return $stmt->execute();
    }


    public function remove(Student $student): bool
    {
        $stmt = $this->pdo->prepare('DELETE FROM students WHERE ID = ?');
        $stmt->bindValue(1,$student->getId());
        return $stmt->execute();
    }
    public function studentBirthday(DateTimeInterface $birthday): array
    {
        // TODO: Implement studentBirthday() method.
    }
}