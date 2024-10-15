<?php


use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
use Alura\PDO\Infrastructure\Repository\PdoStudentRepository;

require "vendor/autoload.php";



$pdo = ConnectionCreator::createConnection();

$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);


