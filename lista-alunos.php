<?php

require 'src/Infrastructure/Persistence/ConnectionCreator.php';
require 'src/Domain/Model/Student.php';
require "vendor/autoload.php";



$pdo = ConnectionCreator::createConnecetion();

$statement = $pdo->query('SELECT * FROM students');


while($studentListData = $statement->fetch(PDO::FETCH_ASSOC)){
    $student = new Student(
        $studentListData['id'],
        $studentListData['name'],
         new \DateTimeImmutable($studentListData['birthday']),
    );
    var_dump($student);
}
exit();
