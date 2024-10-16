<?php


namespace Alura\PDO\Domain\Repository;

use Alura\PDO\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents():array;
    public function save(Student $student):bool;
    public function remove(Student $student):bool;
    public function studentsBirthAt(\DateTimeInterface $birthday):array;
    public function studentsWithPhones(): array;
}
//studentsBirthAt
