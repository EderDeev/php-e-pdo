<?php

require_once "vendor/autoload.php";
require 'Student.php';

$caminhoAbsoluto = __DIR__ . '/banco.sqlite';
$pdo  = new PDO('sqlite:'.$caminhoAbsoluto);

$student = new Student(null,"Aluno2';DROP TABLE student",new DateTimeImmutable('2000-08-19'));

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