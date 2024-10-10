<?php

use Alura\PDO\Domain\Model\Student;
use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
require "vendor/autoload.php";



$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM studentsclass');


while($studentListData = $statement->fetch(PDO::FETCH_ASSOC)){
    $student = new Student(
        $studentListData['id'],
        $studentListData['name'],
         new \DateTimeImmutable($studentListData['birth_date']),
    );
    var_dump($student);
}
exit();
