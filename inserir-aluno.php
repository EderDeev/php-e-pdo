<?php

require_once "vendor/autoload.php";
require 'Student.php';

$caminhoAbsoluto = __DIR__ . '/banco.sqlite';
$pdo  = new PDO('sqlite:'.$caminhoAbsoluto);

$student = new Student(null,"Eder",new DateTimeImmutable('2000-08-19'));

$sqlInsert = "INSERT INTO students(name,birthday) VALUES('{$student->getName()}', '{$student->getBirthday()->format('Y-m-d')}')";


echo $sqlInsert;

var_dump($pdo->exec($sqlInsert));