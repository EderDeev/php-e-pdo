<?php

require 'src/Infrastructure/Persistence/ConnectionCreator.php';
require 'src/Domain/Model/Student.php';
require "vendor/autoload.php";


$pdo = ConnectionCreator::createConnecetion();
$student = new Student(null,"João",new DateTimeImmutable('2001-08-20'));

$sqlInsert = "INSERT INTO students(name,birthday) VALUES(?,?)";
$stmt = $pdo->prepare($sqlInsert);
$stmt->bindValue(1,$student->getName());
$stmt->bindValue(2,$student->getBirthday()->format('Y-m-d'));

if($stmt->execute()){
    echo "Aluno registrado com sucesso";
}
exit();

echo $sqlInsert;

var_dump($pdo->exec($sqlInsert));